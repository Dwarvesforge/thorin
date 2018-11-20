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

- [App](doc/functions/app.md)
- [Array](doc/functions/array.md)
- [Cache](doc/functions/cache.md)
- [Cast](doc/functions/cast.md)
- [Collection](doc/functions/collection.md)
- [Color](doc/functions/color.md)
- [Config](doc/functions/config.md)
- [Date](doc/functions/date.md)
- [DB](doc/functions/db.md)
- [Email](doc/functions/email.md)
- [Event](doc/functions/event.md)
- [Filesystem](doc/functions/filesystem.md)
- [Function](doc/functions/function.md)
- [Hook](doc/functions/hook.md)
- [i18n](doc/functions/i18n.md)
- [Image](doc/functions/image.md)
- [Is](doc/functions/is.md)
- [Media](doc/functions/media.md)
- [Object](doc/functions/object.md)
- [Path](doc/functions/path.md)
- [Recaptcha](doc/functions/recaptcha.md)
- [Security](doc/functions/security.md)
- [Session](doc/functions/session.md)
- [String](doc/functions/string.md)
- [Url](doc/functions/url.md)
- [Util](doc/functions/util.md)
- [Vendor](doc/functions/vendor.md)
- [View](doc/functions/view.md)

## Table of content

1. [Goals](#readme-goals)
2. [Install](#readme-install)
3. [Documentation](doc)
4. [Contribute](#readme-contribute)
5. [License](#readme-license)
6. [Who are Dwarvesforge](#readme-who-are-dwarvesforge)

<a id="readme-goals"></a>
## Goals

The main goal of this toolkit is to **give you some nice and powerful features through a simple API**.
We will make this package grow every time we encounter and implement some nice functions/classes/helpers.

<a id="readme-install"></a>
## Install

```
composer require dwarvesforge/thorin
```

> You can install the [Thorin Visual Studio Code Snippets Extension](https://marketplace.visualstudio.com/items?itemName=Dwarvesforge.dwarvesforge-thorin-snippets) to help you using the package.

<a id="readme-get-started"></a>
## Get Started

To start using Thorin you have two choices. The first is the simplier the second the harder.

### First solution

Create the files/folders structure described bellow and start using Thorin with his full power right now:

- | .env
- | app
- |--- cache
- |------- views
- |--- config
- |--- lang
- |------- en
- |--- views
- | public (document root)
- |--- dist

### Second solution

The second solution require that you set the various configurations by yourself if you need another folders structure.
To do so, you'll need first:

#### Specify where your config files are

First choice, using the `.env` file at the root of your project

```
T_CONFIG_PATH=/something/absolute/to/the/server/root/
```

Or by defining a constant like so **BEFORE loading Thorin**:

```php
define('T_CONFIG_PATH', '/something/absolute/to/the/server/root/');
```

The default value for this config is `app/config/`

#### Changing the path of each modules individually

To do so, you'll need to create some config files to override the default configs that you can find here:

- Application config : [`app/config/app.php`](doc/config/app.md)
- Cache config : [`app/config/cache.php`](doc/config/cache.md)
- DB config : [`app/config/db.php`](doc/config/db.md)
- Email config : [`app/config/email.php`](doc/config/email.md)
- Filesystem config : [`app/config/filesystem.php`](doc/config/filesystem.md)
- i18n config : [`app/config/i18n.php`](doc/config/i18n.md)
- Image config : [`app/config/image.php`](doc/config/image.md)
- **Path config** : [`app/config/path.php`](doc/config/path.md)
- Recaptcha config : [`app/config/recaptcha.php`](doc/config/recaptcha.md)
- Session config : [`app/config/session.php`](doc/config/session.md)

To override some config, simply create a file with the same name in your config folder and override it inside this file.

## `.env` file

The `.env` file can contains a set of environment variables. Here's the file that document them:

- **Example** : [`.env.example`](doc/.env.example.md)

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
