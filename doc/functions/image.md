# image

- [Thorin::image_average_color](#Thorin_image_average_color)
- [Thorin::image_optimize](#Thorin_image_optimize)
- [Thorin::image](#Thorin_image)
<a name="Thorin_image_average_color"></a>
## Thorin::image_average_color
Get the average color of an image in hexadecimal format like "45A3F3"
```php
$color = Thorin::image_average_color(Thorin::asset_path('img/my-cool-image.jpg'));
```

[Full documentation](/doc/src/functions/image/image_average_color.md)

[See more](https://github.com/ksubileau/color-thief-php)

<a name="Thorin_image_optimize"></a>
## Thorin::image_optimize
Optimize the passed image by compressing (resize and quality) it.
```php
$url = Thorin::image_optimize('my/cool/image.jpg);
```

[Full documentation](/doc/src/functions/image/image_optimize.md)

<a name="Thorin_image"></a>
## Thorin::image
Return an Intervention Image instance to work with
```php
$image = Thorin::image('/my/cool/project/path/my-cool-image.png');
$image->resize(200,300);
$image->save('my-cool-image.png');
```

[Full documentation](/doc/src/functions/image/image.md)
