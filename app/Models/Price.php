<?php

namespace App\Models;

use SimpleXMLElement;

class Price
{
    public function __construct(SimpleXMLElement $xml)
    {
        $this->value = $xml->value;
        $this->currency = $xml->currency;
    }

    public string $value;
    public string $currency;
}