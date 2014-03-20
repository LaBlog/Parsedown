<?php

namespace Lablog\Parsedown;

class ParsedownProcessor implements \Lablog\Lablog\Processor\ProcessorInterface
{
    /**
     * Inject Parsedown into the interface.
     * @param MichelfMarkdownExtra $parsedown
     */
    public function __construct(\Parsedown $parsedown)
    {
        $this->processor = $parsedown;
    }

    /**
     * Process the passed in content through parsedown processor.
     * @param  string $content
     * @return string
     */
    public function process($content)
    {
        return $this->processor->parse($content);
    }
}