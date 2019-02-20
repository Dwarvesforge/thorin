# app_build

Return the application build version.
The build version will be taken either from:
1. `config` The `app.build` config
2. `txt` A file at the project root called `build.txt`
3. `hash` Generating a hash from the `path.assets` folder



### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$method  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The wanted method to get the build. By default it's `null`, meaning that it will try every methods one by one  |  optional  |  null

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The build version

### Example
```php
	$domain = Thorin::app_build();
// 3jdujfh5g3jsd0w0s7c6nr57s3gv1yxk
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)