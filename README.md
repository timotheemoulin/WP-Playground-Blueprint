# WP-Playground-Blueprint

Following the talk about the Playground platform, here is a small example on how to create a basic blueprint to configure the playground.

## Playground

WordPress Playground is the platform that lets you run WordPress instantly on any device without a host. It's a place to build, experiment, test, and grow.

## Blueprint

A Blueprint is a regular JSON file that follows the schema available at https://playground.wordpress.net/blueprint-schema.json.

## Setup

To start a new Playground, just go to https://playground.wordpress.net/. A new WP instance will be created just for you.

Cick on the menu icon (top left), there you can create your own JSON config.

## Load a preconfigured Blueprint

To load a preconfigured Blueprint, simply add the `?blueprint-url=` parameter.

Ex. https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/timotheemoulin/WP-Playground-Blueprint/refs/heads/master/blueprint-101.json
This will load our basic example.

## Key learning points

- You need to use a custom PHP script to cleanup default WordPress content before importing your XML
- Playground works nicely to showcase a plugin / theme or any usecsae.
- Plugins and themes can be fetched from the main wp.org repository
- Custom plugins can also be fetched from a public repo (you can fetch a .zip file into the `wp-content/plugins` directory)
- Handling media is a hassle
 - When importing your xml data, media need to use a public URL for `guid` and `wp:attachment_url`
 - Hosting media on `https://raw.githubusercontent.com` works well
 - Media `wp:post_parent` must be set to an ID that you know for sure exists before the import
 - `link` works well with permalink like `<link>https://playground.wordpress.net/?attachment_id=21</link>` but seems to have issue when a custom permalink structure is used.