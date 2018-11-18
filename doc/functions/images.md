# images

- [Thorin::average_color](#Thorin::average_color)
- [Thorin::image](#Thorin::image)
- [Thorin::optimize_image](#Thorin::optimize_image)
## Thorin::average_color
Get the average color of an image in hexadecimal format like "45A3F3"
```php
$color = Thorin::average_color(Thorin::asset_path('img/my-cool-image.jpg'));
```

[Full documentation](/doc/src/functions/images/t_average_color.md)

[See more](https://github.com/ksubileau/color-thief-php)

## Thorin::image
Return an Intervention Image instance to work with
```php
$image = Thorin::image('/my/cool/project/path/my-cool-image.png');
$image->resize(200,300);
$image->save('my-cool-image.png');
```

[Full documentation](/doc/src/functions/images/t_image.md)

## Thorin::optimize_image
Optimize the passed image by compressing (resize and quality) it.

[Full documentation](/doc/src/functions/images/t_optimize_image.md)
