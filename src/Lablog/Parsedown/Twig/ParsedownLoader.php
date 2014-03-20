<?php

namespace Lablog\Parsedown\Twig;

use Twig_Environment;
use Twig_Function_Function;
use Twig_Filter_Method;
use Twig_Extension;

class ParsedownLoader extends Twig_Extension
{

    /**
     * Load the parsedown class object.
     *
     * @return void
     */
    public function __construct()
    {
        $this->markdown = new \Parsedown;
    }

    public function getName()
    {
        return 'MarkdownLoader';
    }

    public function getFilters()
    {
        return array(
            'parsedown' => new Twig_Filter_Method($this, 'parsedownProcessor')
        );
    }

    public function parsedownProcessor($markdown)
    {
        return $this->markdown->parse($markdown);
    }
}