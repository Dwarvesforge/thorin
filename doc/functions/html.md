# html

- [Thorin::autolink](#Thorin::autolink)
- [Thorin::esc_attr](#Thorin::esc_attr)
- [Thorin::text_to_html](#Thorin::text_to_html)
## Thorin::autolink
Automaticaly transform urls into links in the passed text.
```php
$text = 'Hello world this is a nice http://google.com sample of text.';
$newText = Thorin::autolink($text);
// Hello world this is a nice <a href="http://google.com">http://google.com</a> sample of text.
```

[Full documentation](/doc/src/functions/html/t_autolink.md)

## Thorin::esc_attr
Escape the passed string to ensure it will not break any html when printed inside an attribute


[Full documentation](/doc/src/functions/html/t_esc_attr.md)

## Thorin::text_to_html
Format a simple passed text into a nice formated html one.
This will transform the new line into <br>, as well as the line breaks into paragraphs


[Full documentation](/doc/src/functions/html/t_text_to_html.md)
