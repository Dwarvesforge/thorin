# object

- [Thorin::obj_pick](#Thorin_obj_pick)
<a name="Thorin_obj_pick"></a>
## Thorin::obj_pick
Creates an object composed of the picked `object` properties.

```php
$object = (object) ['a' => 1, 'b' => '2', 'c' => 3];
Thorin::obj_pick($object, ['a','c']);
// (object) ['a' => 1, 'c' => 3]
```

[Full documentation](/doc/src/functions/object/obj_pick.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Object/pick.php)
