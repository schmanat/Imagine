<?php

namespace Imagine\Filter\Basic;

use Imagine\ImageInterface;
use Imagine\Filter\FilterInterface;

class Show implements FilterInterface
{
    private $format;
    private $options;

    public function __construct($format, array $options = array())
    {
        $this->format  = $format;
        $this->options = $options;
    }

    public function apply(ImageInterface $image)
    {
        return $image->show($this->format, $this->options);
    }
}