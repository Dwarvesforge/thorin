# event

- [Thorin::event_emitter](#Thorin_event_emitter)
<a name="Thorin_event_emitter"></a>
## Thorin::event_emitter
Return a [League\Event\Emitter](http://event.thephpleague.com/2.0/emitter/basic-usage/) instance to work with.
```php
$emitter = Thorin::event_emitter();
$emitter->addListener('event.name', function($event) {
  // do something here...
});
```

[Full documentation](/doc/src/functions/event/event_emitter.md)

[See more](http://event.thephpleague.com/2.0/emitter/basic-usage/)
