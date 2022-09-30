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

    public function Formatted()
    {
        switch ($this->currency) {
            case 'EUR':
                return  '€' . $this->value;
            default:
                return $this->currency . ' ' . $this->value;
        }
    }
}
