# Textpattern themes website

[![Greenkeeper](https://badges.greenkeeper.io/textpattern/textpattern-themes-website.svg)](https://greenkeeper.io/)
[![Build Status](https://travis-ci.com/textpattern/textpattern-themes-website.svg)](https://travis-ci.com/textpattern/textpattern-themes-website)

**CURRENTLY UNDER DEVELOPMENT**

Official 2019+ themes website of the [Textpattern](https://textpattern.com/) project. **Requires Textpattern 4.7.3 or later.**

## Supported web browsers

* Chrome, Edge, Firefox, Safari and Opera the last two recent stable releases.
* Internet Explorer 11.
* Firefox ESR latest major point release.

Older versions of the above and other browsers may work, but these are the ones we verify.

## Requirements

Building this repository requires:

* [Node.js](https://nodejs.org/)
* [Grunt](https://gruntjs.com/)
* [Composer](https://getcomposer.org/)

## Setup

### Installing required tools

The project uses [Grunt](https://gruntjs.com/) to run tasks. First make sure you have base dependencies installed: [Node.js](https://nodejs.org/) and [Grunt](https://gruntjs.com/). You can install Node using the [installer](https://nodejs.org/), Composer using the [installer](https://getcomposer.org/), and Grunt with npm:

```ShellSession
$ npm install -g grunt-cli
```

Consult the Grunt documentation for more instructions if necessary.

### Installing dependencies

After you have the base dependencies taken care of, you can install the project's dependencies. Navigate to the project's directory, and run the dependency manager:

```ShellSession
$ cd textpattern-themes-website
$ npm install
$ composer install
```

**npm** installs Node modules for Grunt and **composer** installs PHP libraries.

## Building

This repository hosts sources and needs to be built before it can be used. After you have installed all dependencies, you will be able to run tasks using Grunt, including building:

```ShellSession
$ grunt @task@
```

Where the `@task@` is either `build` or `watch`.

* The `build` task builds the project.
* The `watch` task will launch a task that watches for file changes; the project is then automatically built if a source file is modified.

## Plugins used

All plugins we use are installed via Composer:

* [`etc_cache`](https://github.com/etc-plugins/etc_cache) ✓ Composer
* [`etc_pagination`](https://github.com/etc-plugins/etc_pagination) ✓ Composer
* [`smd_thumbnail`](https://github.com/bloke/smd_thumbnail) ✓ Composer
