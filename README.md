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

Parsedown
=========
