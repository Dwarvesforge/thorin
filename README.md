![Thorin](.resources/doc-header.jpg)

# Thorin

<p>
	<a href="https://travis-ci.org/Dwarvesforge/thorin">
		<img src="https://img.shields.io/travis/Dwarvesforge/thorin.svg?style=flat-square" />
	</a>
	<!-- <a href="https://www.npmjs.com/package/coffeekraken-sugar">
		<img src="https://img.shields.io/npm/v/coffeekraken-sugar.svg?style=flat-square" />
	</a>
	<a href="https://github.com/Coffeekraken/sugar/blob/master/LICENSE.txt">
		<img src="https://img.shields.io/npm/l/coffeekraken-sugar.svg?style=flat-square" />
	</a> -->
	<!-- <a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/npm/dt/coffeekraken-sugar.svg?style=flat-square" />
	</a>
	<a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/github/forks/coffeekraken/sugar.svg?style=social&label=Fork&style=flat-square" />
	</a>
	<a href="https://github.com/coffeekraken/sugar">
		<img src="https://img.shields.io/github/stars/coffeekraken/sugar.svg?style=social&label=Star&style=flat-square" />
	</a>-->
	<!-- <a href="https://twitter.com/coffeekrakenio">
		<img src="https://img.shields.io/twitter/url/http/coffeekrakenio.svg?style=social&style=flat-square" />
	</a>
	<a href="http://coffeekraken.io">
		<img src="https://img.shields.io/twitter/url/http/shields.io.svg?style=flat-square&label=coffeekraken.io&colorB=f2bc2b&style=flat-square" />
	</a> -->
</p>

Thorin is a pretty simple toolkit that gives you a lot of cool helpers functions in multiple areas like:

- Views
	- [`Thorin::render_blade`](doc/src/functions/views/t_render_blade.md) : let you quickly render some blade templates
	- [Many more](doc/src/functions/views) 
- Paths
	- [`Thorin::asset_path`](doc/src/functions/paths/t_asset_path.md) : return an asset (image, video, etc...) path relative to the `T_ASSETS_PATH` constant
	- [`Thorin::asset_url`](doc/src/functions/paths/t_asset_url.md) : return an asset (image, video, etc...) url absolute to the `T_DOMAIN` and `T_ASSETS_PATH` constant
	- [Many more](doc/src/functions/paths)
- i18n
	- [`Thorin::lang`](doc/src/functions/i18n/t_lang.md) : Translation system using languages files
	- [Many more](doc/src/functions/i18n)
- Config
	- [`Thorin::config`](doc/src/functions/config/t_config.md) : Access values in a configuration file
- Objects
	- [`Thorin::extend`](doc/src/functions/objects/t_extend.md) : Extend an object/array with another recursively
- Strings
	- [`Thorin::tailslash`](doc/src/functions/strings/t_tailslash.md) : Make sure the passed string has a `/` at the end
	- [`Thorin::headslash`](doc/src/functions/strings/t_headslash.md) : Make sure the passed string has a `/` at the begining
	- [Many more](doc/src/functions/strings)
- Utils
	- [`Thorin::env`](doc/src/functions/utils/t_env.md) : Access environment variables with a fallback
	- [`Thorin::is_ajax_request`](doc/src/functions/utils/t_is_ajax_request.md) : Return if the script has been called using ajax or not
	- [`Thorin::is_environment`](doc/src/functions/utils/t_is_environment.md) : Check if the actual environment match one of the ones passed as parameter
	- [`Thorin::is_crawler`](doc/src/functions/utils/t_is_crawler.md) : Return if the script has been called by a web crawler like the google bot, etc...
	- [Many more](doc/src/functions/utils)
- [Many more](doc/src)

## Table of content

1. [Goals](#readme-goals)
2. [Install](#readme-install)
3. [Documentation](doc)
4. [Contribute](#readme-contribute)
5. [License](#readme-license)
6. [Who are Dwarvesforge](#readme-who-are-dwarvesforge)

<a id="readme-goals"></a>
## Goals

The main goal of this toolkit is to **gives you some nice and powerful features through a simple API**.
We will make this package grow every time we encounter and implement some nice functions/classes/helpers.

<a id="readme-install"></a>
## Install

```
composer require dwarvesforge/thorin
```

<a id="readme-get-started"></a>
## Get Started

To start using Thorin you have two choices. The first is the simplier the second the harder.

### First solution

Create the files/folders structure described bellow and start using Thorin with his full power right now:

- | .env
- | app
- |--- cache
- |------- views
- |------- images 
- |--- config
- |------- your configuration files here
- |--- lang
- |------- en
- |----------- your lang files here
- |--- views
- |------- your views files here

### Second solution

The second solution require that you set the various configurations by yourself if you need another folders structure.
To do so, you'll need first:

#### Specify where your config files are

First choice, using the .env file at the root of your project

```
T_CONFIG_PATH=something/relative/to/the/document/root/
```

Or by defining a constant like so:

```php
define('T_CONFIG_PATH', 'something/relative/to/the/document/root/');
```

The default value for this config is `app/config/`

#### Changing the path of each modules individually

To do so, you'll need to create some config files to override the default configs like so:

`my/config/path/paths.php`
```php
return [
	'ASSETS' => '${app.ROOT_PATH}dist/',
	'LANG' => '${app.ROOT_PATH}app/lang/',
	'IMAGES_CACHE' => '${app.ROOT_PATH}app/cache/images/',
	'VIEWS' => '${app.ROOT_PATH}app/views/',
	'VIEWS_CACHE' => '${app.ROOT_PATH}app/cache/views/'
]
```

<a id="readme-contribute"></a>
## Contribute

Dwarvesforge is an open source project and will ever be! You are more that welcomed to contribute to his development and make it more awesome every day.
To do so, you have several possibilities:

1. [Share the love ❤️](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-share-the-love)
2. [Declare issues](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-declare-issues)
3. [Fix issues](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-fix-issues)
4. [Add features](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md#contribute-add-features)

<a id="readme-license"></a>
## License

The code is available under the [MIT license](LICENSE.txt). This mean that you can use, modify, or do whatever you want with it. This mean also that it is shipped to you for free, so don't be a hater and if you find some issues, etc... feel free to [contribute](https://github.com/Dwarvesforge/dwarvesforge/blob/master/contribute.md) instead of sharing your frustrations on social networks like an asshole...

<a id="readme-who-are-dwarvesforge"></a>
## Who are Dwarvesforge

We try to be **some cool guys** that build **some cool tools** to make our (and yours hopefully) **every day life better**.  

#### [More on who we are](https://github.com/Dwarvesforge/dwarvesforge/blob/master/who-are-we.md)
