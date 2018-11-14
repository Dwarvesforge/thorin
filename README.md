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

- Archives
	- [`Thorin::archive_files`](doc/src/functions/archives/t_archive_files.md) : create an archive with some files
	- [`Thorin::extract_files`](doc/src/functions/archives/t_extract_files.md) : extract some files from an archive
- Array
	- [`Thorin::array_all`](doc/src/functions/array/t_array_all.md) : return true if all the array items pass the test function, false otherwise
	- [`Thorin::array_any`](doc/src/functions/array/t_array_any.md) : return true if at least one of the array items pass the test function, false otherwise
	- [`Thorin::array_chunk`](doc/src/functions/array/t_array_chunk.md) : Chunks an array into smaller arrays of a specified size
	- [`Thorin::array_deep_flatten`](doc/src/functions/array/t_array_deep_flatten.md) : Deep flattens an array
	- [`Thorin::array_drop_left`](doc/src/functions/array/t_array_drop_left.md) : Returns a new array with n elements removed from the left
	- [`Thorin::array_drop_right`](doc/src/functions/array/t_array_drop_right.md) : Returns a new array with n elements removed from the right
	- [`Thorin::array_find_last`](doc/src/functions/array/t_array_find_last.md) : Returns the last element for which the provided function returns a truthy value.
	- [`Thorin::array_find_last_index`](doc/src/functions/array/t_array_find_last_index.md) : Returns the index of the last element for which the provided function returns a truthy value.
	- [`Thorin::array_flatten`](doc/src/functions/array/t_array_flatten.md) : Flattens an array up to the one level depth.
	- [`Thorin::array_group_by`](doc/src/functions/array/t_array_group_by.md) : Groups the elements of an array based on the given function.
	- [`Thorin::array_range`](doc/src/functions/array/t_array_range.md) : create an array with a from, to range
	- [`Thorin::array_remove_empty`](doc/src/functions/array/t_array_remove_empty.md) : remove empty items in the passed array
	- [`Thorin::is_assoc_array`](doc/src/functions/array/t_is_assoc_array.md) : check if is an associative array
- Cache
	- [`Thorin::cache`](doc/src/functions/cache/t_cache.md) : Store/get/delete item from a chosen cache (apc, memcache, filesystem, etc...)
	- [`Thorin::cache_factory`](doc/src/functions/cache/t_cache_factory.md) : Return a cache pool using the requested driver
- Cast
	- [`Thorin::to_boolean`](doc/src/functions/cast/t_to_boolean.md) : cast a value into a boolean
- Collections
	- [`Thorin::collect`](doc/src/functions/collections/t_collect.md) : Manipulate array data with ease using the [laravel collections](https://laravel.com/docs/5.7/collections) module
- Colors
	- [`Thorin::random_color`](doc/src/functions/colors/t_random_color.md) : return a random color in hexa format like "4F23A5"
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
	- [`Thorin::dir_size`](doc/src/functions/filesystem/t_dir_size.md) : calculate a directory size and return it
	- [`Thorin::disk`](doc/src/functions/filesystem/t_disk.md) : return a [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk registered in config
	- [`Thorin::disks`](doc/src/functions/filesystem/t_disks.md) : return a [Flysystem](http://flysystem.thephpleague.com/docs/) manager instance of the requested disks registered in config
	- [`Thorin::force_download`](doc/src/functions/filesystem/t_force_download.md) : force download a file
	- [`Thorin:human_filesize`](doc/src/functions/filesystem/t_human_filesize.md) : convert a filesize into a human readable one like "10 MB"
- Hooks
	- [`Thorin::add_filter`](doc/src/functions/hooks/t_add_filter.md) : a wordpress style filter
	- [`Thorin::apply_filters`](doc/src/functions/hooks/t_apply_filters.md) : apply the requested filters on the passed value
	- [`Thorin::add_action`](doc/src/functions/hooks/t_add_action.md) : register an action that will be executed when the `Thorin::do_action` is called
	- [`Thorin::do_action`](doc/src/functions/hooks/t_do_action.md) : execute the actions registered with the `Thorin::add_action` function
- HTML
	- [`Thorin::autolink`](doc/src/functions/html/t_autolink.md) : transform every urls inside a text to actual html `<a>` tags
	- [`Thorin::esc_attr`](doc/src/functions/html/t_esc_attr.md) : escape the passed value to be injected inside an html attribute
	- [`Thorin::text_to_html`](doc/src/functions/html/t_text_to_html.md) : transform a passed text into html paragraphs and line breaks
- i18n
	- [`Thorin::available_languages`](doc/src/functions/i18n/t_available_languages.md) : return the available languages configured
	- [`Thorin::browser_language`](doc/src/functions/i18n/t_browser_language.md) : return the browser language
	- [`Thorin::default_language`](doc/src/functions/i18n/t_default_language.md) : return the default language configured
	- [`Thorin::lang`](doc/src/functions/i18n/t_lang.md) : translation system using languages files
	- [`Thorin::language`](doc/src/functions/i18n/t_language.md) : return the actual language used by the application depending on the available languages and the default one
- Images
	- [`Thorin::average_color`](doc/src/functions/images/t_average_color.md) : return the average color for the passed image
	- [`Thorin::image`](doc/src/functions/images/t_image.md) : return an [Intervention](http://image.intervention.io/) image instance to work with
	- [`Thorin::optimize_image`](doc/src/functions/images/t_optimize_image.md) : easily resize and compress an image
- Is
	- [`Thorin::is_email`](doc/src/functions/is/t_is_email.md) : check if the passed string is a valid email
- Medias
	- [`Thorin::embed`](doc/src/functions/medias/e_embed.md) : get the embed code for a passed video url like youtube, vimeo, etc...
- Objects
	- [`Thorin::extend`](doc/src/functions/objects/t_extend.md) : Extend an object/array with another recursively
- Paths
	- [`Thorin::app_path`](doc/src/functions/paths/t_app_path.md) : return a file path in the "app" folder absolute to the server root
	- [`Thorin::asset_path`](doc/src/functions/paths/t_asset_path.md) : return an asset (image, video, etc...) path absolute to the server root
	- [`Thorin::base_path`](doc/src/functions/paths/t_base_path.md) : return a file path in the "base" folder absolute to the server root
	- [`Thorin::document_root_path`](doc/src/functions/paths/t_document_root_path.md) : return a file path in the "document root" folder absolute to the server root
	- [`Thorin::sanitize_path`](doc/src/functions/paths/t_sanitize_path.md) : Sanitize the passed path by normalize it, removing the last "." and add a slash at the end if needed
	- [`Thorin::normalize_path`](doc/src/functions/paths/t_normalize_path.md) : Normalize the passed path by resolving all the "../"
- Recaptcha
	- [`Thorin::recaptcha_display`](doc/src/functions/recaptcha/t_recaptcha_display.md) : display a recaptcha
	- [`Thorin::recaptcha_verify`](doc/src/functions/recaptcha/t_recaptcha_verify.md) : verify a recaptcha
- Security
	- [`Thorin::csrf_input`](doc/src/functions/security/t_csrf_input.md) : get an hidden CSRF input to add to your forms
	- [`Thorin::csrf_qs`](doc/src/functions/security/t_csrf_qs.md) : get a CSRF token in query string format
	- [`Thorin::csrf_validate`](doc/src/functions/security/t_csrf_validate.md) : Validate a form by checking the CSRF token
- Session
	- [`Thorin::session_destroy`](doc/src/functions/session/t_session_destroy.md) : destroy the session
	- [`Thorin::session`](doc/src/functions/session/t_session.md) : get/set/remove some session value
	- [`Thorin::session_flash`](doc/src/functions/session/t_session_flash.md) : get/set some flash session value
	- [`Thorin::session_id`](doc/src/functions/session/t_session_id.md) : get the session id
- Strings
	- [`Thorin::clean_cut`](doc/src/functions/strings/t_clean_cut.md) : return a clean string with a max length and an end character like "..."
	- [`Thorin::headslash`](doc/src/functions/strings/t_headslash.md) : make sure the passed string has a `/` at the begining
	- [`Thorin::is_end_with`](doc/src/functions/strings/t_is_end_with.md) : check if a string end with another one
	- [`Thorin::is_start_with`](doc/src/functions/strings/t_is_start_with.md) : check if a string start with another one
	- [`Thorin::random_string`](doc/src/functions/strings/t_random_string.md) : generate a random string with a specific length
	- [`Thorin::remove_whitespace`](doc/src/functions/strings/t_remove_whitespace.md) : remove all whitespace in a string
	- [`Thorin::slug`](doc/src/functions/strings/t_slug.md) : generate a slug from a string
	- [`Thorin::tailslash`](doc/src/functions/strings/t_tailslash.md) : make sure the passed string has a `/` at the end
- Time
	- [`Thorin::is_timestamp_valid`](doc/src/time/t_is_timestamp_valid.md) : check if the passed timestamp is a valid one
- Urls
	- [`Thorin::asset_url`](doc/src/functions/paths/t_asset_url.md) : return an asset (image, video, etc...) url relative to the paths.assets config
	- [`Thorin::root_url`](doc/src/functions/paths/t_root_url.md) : return a url relative to the app.root_url config
	- [`Thorin::sanitize_url`](doc/src/functions/urls/t_sanitize_url.md) : Sanitize the passed url by removing all double "//" and passing through the `filter_var` function
- Utils
	- [`Thorin::current_url`](doc/src/functions/utils/t_current_url.md) : return the actual url
	- [`Thorin::define`](doc/src/functions/utils/t_define.md) : define a constant if not already defined
	- [`Thorin::domain`](doc/src/functions/utils/t_domain.md) : return the domain from the config app.domain
	- [`Thorin::env`](doc/src/functions/utils/t_env.md) : access environment variables with a fallback
	- [`Thorin::environment`](doc/src/functions/utils/t_environment.md) : return the environment
	- [`Thorin::ip_address`](doc/src/functions/utils/t_ip_address.md) : return the user ip address
	- [`Thorin::is_ajax_request`](doc/src/functions/utils/t_is_ajax_request.md) : return if the script has been called using ajax or not
	- [`Thorin::is_android`](doc/src/functions/utils/t_is_android.md) : check if the user comes from an android device
	- [`Thorin::is_crawler`](doc/src/functions/utils/t_is_crawler.md) : return if the script has been called by a web crawler like the google bot, etc...
	- [`Thorin::is_desktop`](doc/src/functions/utils/t_is_desktop.md) : check if the user is on a desktop device
	- [`Thorin::is_environment`](doc/src/functions/utils/t_is_environment.md) : check if the actual environment match one of the ones passed as parameter
	- [`Thorin::is_ios`](doc/src/functions/utils/t_is_ios.md) : check if the user is on an ios device
	- [`Thorin::is_ip_match`](doc/src/functions/utils/t_is_ip_match.md) : check if the user ip match some passed ones like `['234.34.*.*']`
	- [`Thorin::is_mobile`](doc/src/functions/utils/t_is_mobile.md) : check if the user is on a mobile device (tablet and phone)
	- [`Thorin::is_phone`](doc/src/functions/utils/t_is_phone.md) : check if the user is on a phone device
	- [`Thorin::is_tablet`](doc/src/functions/utils/t_is_tablet.md) : check if the user is on a tablet device
	- [`Thorin::location`](doc/src/functions/utils/t_location.md) : get some location info about the user (uses ipinfo.io)
	- [`Thorin::pre`](doc/src/functions/utils/t_pre.md) : debug some variables/object/etc... inside a `<pre>` tag
	- [`Thorin::protocol`](doc/src/functions/utils/t_protocol.md) : return the protocol from the config app.protocol
	- [`Thorin::redirect_ip`](doc/src/functions/utils/t_redirect_ip.md) : redirect some ip addresses to a specific url
	- [`Thorin::safe_redirect`](doc/src/functions/utils/t_safe_redirect.md) : redirect the user to a specific url
	- [`Thorin::whois`](doc/src/functions/utils/t_whois.md) : get some whois info about a domain name
- Vendors
	- [`Thorin::dotenv`](doc/src/functions/vendor/t_dotenv.md) : access the [dotenv](https://github.com/vlucas/phpdotenv) instance used by Thorin
	- [`Thorin::faker`](doc/src/functions/vendor/t_faker.md) : access the full power of the nice [Faker](https://github.com/fzaninotto/Faker) library
	- [`Thorin::lodash`](doc/src/functions/vendor/t_lodash.md) : access the full power of the nice [Lodash](https://github.com/lodash-php/lodash-php) library
	- [`Thorin::mobile_detect`](doc/src/functions/vendor/t_mobile_detect.md) : access the full power of the nive [Mobile_Detect](http://mobiledetect.net/) library
	- [`Thorin::sh`](doc/src/functions/vendor/t_sh.md) : call some shell functions with ease using the nice [ShellWrapp](https://github.com/MrRio/shellwrap) library
	- [`Thorin::validator`](doc/src/functions/vendor/t_validator.md) : return a [Respect Validation](https://github.com/Respect/Validation) class instance to work with
- Views
	- [`Thorin::render_blade`](doc/src/functions/views/t_render_blade.md) : let you quickly render some blade templates
	- [`Thorin::render_twig`](doc/src/functions/views/t_render_twig.md) : let you quickly render some twig templates
	- [`Thorin::render_mustache`](doc/src/functions/views/t_render_mustache.md) : let you quickly render some mustache templates
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
- |--- lang
- |------- en
- |--- views
- | public (document root)
- |--- dist

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
