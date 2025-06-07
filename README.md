# WP-Playground-Blueprint

Following the talk about the Playground platform, here is a small example on how to create a basic blueprint to configure the playground.

## Playground

WordPress Playground is the platform that lets you run WordPress instantly on any device without a host. It's a place to build, experiment, test, and grow.

## Blueprint

A Blueprint is a regular JSON file that follows the schema available at [https://playground.wordpress.net/blueprint-schema.json](https://playground.wordpress.net/blueprint-schema.json).

## Setup

To start a new Playground, just go to [https://playground.wordpress.net/](https://playground.wordpress.net/). A new WP instance will be created just for you.

Cick on the menu icon (top left), there you can create your own JSON config.

## Load a preconfigured Blueprint

To load a preconfigured Blueprint, simply add the `?blueprint-url=` parameter.

Ex. `https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/timotheemoulin/WP-Playground-Blueprint/refs/heads/master/blueprint-101.json`
This will load our basic example.