# object

- [Thorin::pick](#Thorin_pick)
<a name="Thorin_pick"></a>
## Thorin::pick
Creates an object composed of the picked `object` properties.

```php
$object = (object) ['a' => 1, 'b' => '2', 'c' => 3];
Thorin::pick($object, ['a','c']);
// (object) ['a' => 1, 'c' => 3]
```

[Full documentation](/doc/src/functions/object/pick.md)

[See more](https://github.com/lodash-php/lodash-php/blob/master/src/Object/pick.php)
