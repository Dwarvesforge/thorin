# image

- [Thorin::average_image_color](#Thorin_average_image_color)
- [Thorin::image](#Thorin_image)
- [Thorin::optimize_image](#Thorin_optimize_image)
<a name="Thorin_average_image_color"></a>
## Thorin::average_image_color
Get the average color of an image in hexadecimal format like "45A3F3"
```php
$color = Thorin::average_image_color(Thorin::asset_path('img/my-cool-image.jpg'));
```

[Full documentation](/doc/src/functions/image/average_image_color.md)

[See more](https://github.com/ksubileau/color-thief-php)

<a name="Thorin_image"></a>
## Thorin::image
Return an Intervention Image instance to work with
```php
$image = Thorin::image('/my/cool/project/path/my-cool-image.png');
$image->resize(200,300);
$image->save('my-cool-image.png');
```

[Full documentation](/doc/src/functions/image/image.md)

<a name="Thorin_optimize_image"></a>
## Thorin::optimize_image
Optimize the passed image by compressing (resize and quality) it.
```php
$url = Thorin::optimize_image('my/cool/image.jpg);
```

[Full documentation](/doc/src/functions/image/optimize_image.md)
