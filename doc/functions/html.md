# html

- [Thorin::autolink](#Thorin_autolink)
- [Thorin::esc_attr](#Thorin_esc_attr)
- [Thorin::text_to_html](#Thorin_text_to_html)
<a name="Thorin_autolink"></a>
## Thorin::autolink
Automaticaly transform urls into links in the passed text.
```php
$text = 'Hello world this is a nice http://google.com sample of text.';
$newText = Thorin::autolink($text);
// Hello world this is a nice <a href="http://google.com">http://google.com</a> sample of text.
```

[Full documentation](/doc/src/functions/html/autolink.md)

<a name="Thorin_esc_attr"></a>
## Thorin::esc_attr
Escape the passed string to ensure it will not break any html when printed inside an attribute


[Full documentation](/doc/src/functions/html/esc_attr.md)

<a name="Thorin_text_to_html"></a>
## Thorin::text_to_html
Format a simple passed text into a nice formated html one.
This will transform the new line into <br>, as well as the line breaks into paragraphs


[Full documentation](/doc/src/functions/html/text_to_html.md)