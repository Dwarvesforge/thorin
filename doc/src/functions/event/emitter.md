# emitter

Return a [League\Event\Emitter](http://event.thephpleague.com/2.0/emitter/basic-usage/) instance to work with.


### Parameters
Name  |  Type  |  Description  |  Status  |  Default
------------  |  ------------  |  ------------  |  ------------  |  ------------
$name  |  **{ [String](http://php.net/manual/en/language.types.string.php) }**  |  The name of the emitter to create if want to separate them  |  optional  |  "default"

Return **{ League\Event\Emitter }** The League\Event\Emitter instance to work with

### Example
```php
	$emitter = Thorin::emitter();
$emitter->addListener('event.name', function($event) {
  // do something here...
});
```
Author : Olivier Bossel [olivier.bossel@gmail.com](mailto:olivier.bossel@gmail.com) [https://olivierbossel.com](https://olivierbossel.com)

See : **See more** : [http://event.thephpleague.com/2.0/emitter/basic-usage/](http://event.thephpleague.com/2.0/emitter/basic-usage/)