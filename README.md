__NO LONGER MAINTAINED!__ Try the following instead: [https://github.com/jralph/Twig-Markdown](https://github.com/jralph/Twig-Markdown)

LaBlog Parsedown Plugin (Including Twig Filter)
===============================================

An alternative markdown processor wrapper for LaBlog. This processor wraps the `parsedown` processor instead of the default `MarkdownExtra` processor.

This processor has a few differences. The main difference is that this processor required GitHub flavoured markdown. For the most part, this is the standard markdown format, but if you have used Markdown Extra, you will notice some functionality may be different.

Installation
============

Main Processor
--------------

LaBlog Parsedown can be installed as the default processor for LaBlog by changing the binding for `Lablog\Lablog\Processor\ProcessorInterface`.

The binding should be changed as follows:

`'Lablog\Lablog\Processor\ProcessorInterface' => 'Lablog\Parsedown\ParsedownProcessor'`

Twig Filter
-----------

LaBlog Parsedown also adds Parsedown as a twig filter. To enable the twig filter, add the `Lablog\Parsedown\ParsedownProcessor` to your service providers in your Laravel `comfig/app.php` file.

Once done, you will be able to use the parsedown filter like so.

```php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Twig Template</title>
</head>
<body>
    {{ content | parsedown }}
</body>
</html>
```

*Where `content` is a string of markdown.*
