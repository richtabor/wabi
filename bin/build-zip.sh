#!/bin/bash

# Enable nicer messaging for build status.
BLUE_BOLD='\033[1;34m';
GREEN_BOLD='\033[1;32m';
RED_BOLD='\033[1;31m';
YELLOW_BOLD='\033[1;33m';
COLOR_RESET='\033[0m';
error () {
	echo -e "\n${RED_BOLD}$1${COLOR_RESET}\n"
}
status () {
	echo -e "\n${BLUE_BOLD}$1${COLOR_RESET}\n"
}
success () {
	echo -e "\n${GREEN_BOLD}$1${COLOR_RESET}\n"
}
warning () {
	echo -e "\n${YELLOW_BOLD}$1${COLOR_RESET}\n"
}

# Exit if any command fails.
set -e

# Change to the expected directory.
cd "$(dirname "$0")"
cd ..

# Remove old build directory.
if test -d build;
	then
		rm -r build;
		status "Removing older build directory"
	fi

if [ -z "$NO_CHECKS" ]; then
	# Make sure there are no changes in the working tree. Release builds should be
	# traceable to a particular commit and reliably reproducible. (This is not
	# totally true at the moment because we download nightly vendor scripts).
	changed=
	if ! git diff --exit-code > /dev/null; then
		changed="file(s) modified"
	elif ! git diff --cached --exit-code > /dev/null; then
		changed="file(s) staged"
	fi
	if [ ! -z "$changed" ]; then
		git status
		error "ERROR: Cannot build plugin zip with dirty working tree. ☝️
		Commit your changes and try again."
		exit 1
	fi

	# Do a dry run of the repository reset. Prompting the user for a list of all
	# files that will be removed should prevent them from losing important files!
	status "Resetting the repository to pristine condition. ✨"
	to_clean=$(git clean -xdf --exclude="local.json" --dry-run)
	if [ ! -z "$to_clean" ]; then
		echo $to_clean
		warning "🚨 About to delete everything above! Is this okay? 🚨"
		echo -n "[y]es/[N]o: "
		read answer
		if [ "$answer" != "${answer#[Yy]}" ]; then
			# Remove ignored files to reset repository to pristine condition. Previous
			# test ensures that changed files abort the plugin build.
			status "Cleaning working directory… 🛀"
			git clean -xdf --exclude="local.json"
		else
			error "Fair enough; aborting. Tidy up your repo and try again. 🙂"
			exit 1
		fi
	fi
fi

status "Installing dependencies…"

PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true npm install

status "Generating build…"

npm run build

mkdir -p build

# Build the theme zip
status "Creating theme zip… 🤐"
toplevelFiles=$(ls *.{txt,php,png,css})
themeJson=$(ls theme.json)
incFiles=$(ls inc/*.php)
patterns=$(ls inc/patterns/*.php)
templates=$(ls templates/*.html)
styles=$(ls styles/*.json)
parts=$(ls parts/*.html)
assets=$(ls assets/**/*.{js,css,ttf,txt,jpg})
assetsJs=$(ls assets/js/build/*.{js,php})

zip -r ./build/wabi.zip \
	$toplevelFiles \
	$themeJson \
	$incFiles \
	$patterns \
	$templates \
	$parts \
	$styles \
	$assets \
	$assetsJs \

unzip ./build/wabi.zip -d "./build/wabi/"

status "You've built the theme ✅"
