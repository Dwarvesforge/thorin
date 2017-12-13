# t_optimize_image

Optimize the passed image by compressing (resize and quality) it and save it to the {cache}/images folder
in order to avoid recreating it again and again



Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$path  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The image path to process relative to the document root  |  required  |
$settings  |  **{ [Object](http://php.net/manual/en/language.types.object.php) }**  |  The settings to tell how to compress the image  |  optional  |  {}
$cache  |  **{ [Boolean](http://php.net/manual/en/language.types.boolean.php) }**  |  true if want to save the optimized image in cache, false if not  |  optional  |  true

Return **{ [String](http://php.net/manual/en/language.types.string.php) }** The optimized image path. If cache is not used, return the image in base64 format

Author : Olivier Bossel <olivier.bossel@gmail.com>