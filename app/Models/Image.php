<?php

namespace App\Models;

use SimpleXMLElement;

class Image
{
    public function __construct(SimpleXMLElement $xml)
    {
        $this->thumbnail = $xml->thumbnail;
        $this->url = $xml->url;
        $this->alt = $xml->alt;
    }

    public string $thumbnail;
    public string $url;
    public string $alt;
}