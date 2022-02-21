# Wabi Block Theme

[![Deploy](https://github.com/richtabor/wabi/actions/workflows/deploy.yml/badge.svg)](https://github.com/richtabor/wabi/actions/workflows/deploy.yml)

Share your authentic self with [Wabi](https://richtabor.com/wabi), a WordPress block theme designed to help you tell your story best. Wabi foregrounds the simplistic design language of storytelling through clean lines, beautiful typography and a dynamic accent color system. And with multiple style variants (light, dark, and dynamic color schemes), Wabi is the most expressive and adaptable writing theme yet.

[Learn more and view the live demo on richtabor.com →](https://richtabor.com/wabi)

![Wabi WordPress Block Theme](https://user-images.githubusercontent.com/1813435/155023023-a1c04695-9c77-4a2b-a74c-5e79c6183728.jpg)


## Dynamic accent colors 
With Wabi, you may pick an accent color for each post and “theme” that content, providing a clever design layer to compliment the theme’s minimal style. Each post can have one of six different accent colors, all of which you may tailor within the new Global Styles interface. 

![Accent color picker in the Wabi block theme](https://user-images.githubusercontent.com/1813435/155022647-67c46cf0-8fec-4ede-991f-5b685a29959b.jpg)

## Style variants

With multiple style variants (light, dark, and two dynamic color schemes — aoi and pinku) at your fingertips, Method is the most expressive and adaptable writing theme yet. To apply one of these styles, head into the new Site Editor experience, then select the Styles icon at the top right of the toolbar. You’ll see the new Styles sidebar, which you’ll be able to change your theme’s style from. 

![Style variants in the Wabi block theme](https://user-images.githubusercontent.com/1813435/155022541-bef46ac7-cb00-4188-b025-b32032cfd885.jpg)

# Development Guide

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to docker.
2. Clone, or download, this repository into your `/wp-content/themes/` directory

## Requirements

- WordPress 5.9+
- PHP 5.6+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require Gutenberg trunk and will be described or tagged accordingly.

To optionally run tests locally, you will also need:

- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/)

You can install the test-specific development dependencies by running `npm i && composer install`. The following test commands are then available:

- `npm run lint:css` lints and autofixes where possible the CSS
- `composer run analyze [filename.php]` statically analyzes PHP for bugs
- `composer run lint` checks PHP for syntax errors
- `composer run standards:check` checks PHP for standards errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` attempts to automatically fix errors

## Resources

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [The Ultimate Guide to WordPress Block Templates in Gutenberg](https://richtabor.com/gutenberg-block-templates/)
- [A Primer on Full Site Editing for WordPress Theme Developers](https://richtabor.com/full-site-editing/)

## Demo Site

My blog, located at [richtabor.com](https://richtabor.com) is using Wabi.
