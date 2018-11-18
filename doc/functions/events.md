# events

- [Thorin::emitter](#Thorin::emitter)
## Thorin::emitter
Return a [League\Event\Emitter](http://event.thephpleague.com/2.0/emitter/basic-usage/) instance to work with.
```php
$emitter = Thorin::emitter();
$emitter->addListener('event.name', function($event) {
  // do something here...
});
```

[Full documentation](/doc/src/functions/events/t_emitter.md)

[See more](http://event.thephpleague.com/2.0/emitter/basic-usage/)
