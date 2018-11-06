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
	- [`Thorin::render_twig`](doc/src/functions/views/t_render_twig.md) : let you quickly render some twig templates
	- [`Thorin::render_mustache`](doc/src/functions/views/t_render_mustache.md) : let you quickly render some mustache templates
	- [Many more](doc/src/functions/views) 
- Paths
	- [`Thorin::asset_path`](doc/src/functions/paths/t_asset_path.md) : return an asset (image, video, etc...) path absolute to the server root
	- [`Thorin::sanitize_path`](doc/src/functions/paths/t_sanitize_path.md) : Sanitize the passed path by normalize it, removing the last "." and add a slash at the end if needed
	- [`Thorin::normalize_path`](doc/src/functions/paths/t_normalize_path.md) : Normalize the passed path by resolving all the "../"
- Urls
	- [`Thorin::asset_url`](doc/src/functions/paths/t_asset_url.md) : return an asset (image, video, etc...) url relative to the paths.assets config
	- [`Thorin::sanitize_url`](doc/src/functions/urls/t_sanitize_url.md) : Sanitize the passed url by removing all double "//" and passing through the `filter_var` function
	- [Many more](doc/src/functions/paths)
- i18n
	- [`Thorin::lang`](doc/src/functions/i18n/t_lang.md) : Translation system using languages files
	- [`Thorin::browser_language`](doc/src/functions/i18n/t_browser_language.md) : Return the browser language
	- [Many more](doc/src/functions/i18n
- Collections
	- [`Thorin::collect`](doc/src/functions/collections/t_collect.md) : Manipulate array data with ease using the [laravel collections](https://laravel.com/docs/5.7/collections) module
- Cache
	- [`Thorin::cache`](doc/src/functions/cache/t_cache.md) : Store/get/delete item from a chosen cache (apc, memcache, filesystem, etc...)
	- [`Thorin::cache_factory`](doc/src/functions/cache/t_cache_factory.md) : Return a cache pool using the requested driver
- Config
	- [`Thorin::config`](doc/src/functions/config/t_config.md) : Access values in a configuration file
- DB
	- [`Thorin::db`](doc/src/functions/db/t_db.md) : Simply connect and query a database using the [illuminate/database](https://packagist.org/packages/illuminate/database) package
	- [Eloquent](https://laravel.com/docs/5.7/eloquent) : Eloquent is integrated to the toolkit. You can create some models, link them to a configured connection, etc...
- Email
	- [`Thorin::mailer`](doc/src/functions/email/t_mailer.md) : Return a configurated [PHPMailer](https://github.com/PHPMailer/PHPMailer) instance to send emails with
- Events
	- [`Thorin::emitter`](doc/src/functions/events/t_emitter.md) : Return an emitter instance with the one you can listen/emit to events with ease
- Filesystem
	- [`Thorin::disk`](doc/src/functions/filesystem/t_disk.md) : Return a [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk registered in config
	- [`Thorin::disks`](doc/src/functions/filesystem/t_disks.md) : Return a [Flysystem](http://flysystem.thephpleague.com/docs/) manager instance of the requested disks registered in config
- Hooks
	- [`Thorin::add_filter`](doc/src/functions/hooks/t_add_filter.md) : A a wordpress style filter
	- [`Thorin::apply_filters`](doc/src/functions/hooks/t_apply_filters.md) : Apply the requested filters on the passed value
	- [Many more](doc/src/functions/hooks)
- Objects
	- [`Thorin::extend`](doc/src/functions/objects/t_extend.md) : Extend an object/array with another recursively
- Security
	- [`Thorin::csrf_input`](doc/src/functions/security/t_csrf_input.md) : Get an hidden CSRF input to add to your forms
	- [`Thorin::csrf_validate`](doc/src/functions/security/t_csrf_validate.md) : Validate a form by checking the CSRF token
	- [Many more](doc/src/functions/security)
- Session
	- [`Thorin::session`](doc/src/functions/session/t_session.md) : Get/Set/Remove some session value
	- [`Thorin::session_flash`](doc/src/functions/session/t_session_flash.md) : Get/Set some flash session value
	- [Many more](doc/src/functions/session)
- Strings
	- [`Thorin::tailslash`](doc/src/functions/strings/t_tailslash.md) : Make sure the passed string has a `/` at the end
	- [`Thorin::headslash`](doc/src/functions/strings/t_headslash.md) : Make sure the passed string has a `/` at the begining
	- [Many more](doc/src/functions/strings)
- Utils
	- [`Thorin::current_url`](doc/src/functions/utils/t_current_url.md) : Return the actual url
	- [`Thorin::env`](doc/src/functions/utils/t_env.md) : Access environment variables with a fallback
	- [`Thorin::is_ajax_request`](doc/src/functions/utils/t_is_ajax_request.md) : Return if the script has been called using ajax or not
	- [`Thorin::is_environment`](doc/src/functions/utils/t_is_environment.md) : Check if the actual environment match one of the ones passed as parameter
	- [`Thorin::is_crawler`](doc/src/functions/utils/t_is_crawler.md) : Return if the script has been called by a web crawler like the google bot, etc...
	- [Many more](doc/src/functions/utils)
- Vendors
	- [`Thorin::faker`](doc/src/functions/vendor/t_faker.md) : Access the full power of the nice [Faker](https://github.com/fzaninotto/Faker) library
	- [`Thorin::lodash`](doc/src/functions/vendor/t_lodash.md) : Access the full power of the nice [Lodash](https://github.com/lodash-php/lodash-php) library
	- [`Thorin::sh`](doc/src/functions/vendor/t_sh.md) : Call some shell functions with ease using the nice [ShellWrapp](https://github.com/MrRio/shellwrap) library
	- [`Thorin::validator`](doc/src/functions/vendor/t_validator.md) : Return a [Respect Validation](https://github.com/Respect/Validation) class instance to work with
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
- |------- your views files/folders here

### Second solution

The second solution require that you set the various configurations by yourself if you need another folders structure.
To do so, you'll need first:

#### Specify where your config files are

First choice, using the .env file at the root of your project

```
T_CONFIG_PATH=something/absolute/to/the/server/root/
```

Or by defining a constant like so:

```php
define('T_CONFIG_PATH', 'something/absolute/to/the/server/root/');
```

The default value for this config is `app/config/`

#### Changing the path of each modules individually

To do so, you'll need to create some config files to override the default configs that you can find here:

- **Application config** : [`app/config/app.php`](doc/config/app.md)
- **Cache config** : [`app/config/cache.php`](doc/config/cache.md)
- **DB config** : [`app/config/db.php`](doc/config/db.md)
- **Email config** : [`app/config/email.php`](doc/config/email.md)
- **Filesystem config** : [`app/config/filesystem.php`](doc/config/filesystem.md)
- **i18n config** : [`app/config/i18n.php`](doc/config/i18n.md)
- **Images config** : [`app/config/images.php`](doc/config/images.md)
- **Paths config** : [`app/config/paths.php`](doc/config/paths.md)
- **Session config** : [`app/config/session.php`](doc/config/session.md)

To override some config, simply create a file with the same name in your config folder and override it inside this file.

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
