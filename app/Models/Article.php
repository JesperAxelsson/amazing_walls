<?php

namespace App\Models;

use SimpleXMLElement;

class Article
{
    public function __construct(SimpleXMLElement $xml)
    {
        $this->id = $xml->id;
        $this->productName = $xml->productName;
        $this->descriptionTitle = $xml->descriptionTitle;
        $this->descriptionText = $xml->descriptionText;

        $imageArr = array();
        foreach ($xml->images->image as $i => $image) {
            array_push($imageArr, new Image($image));
        }

        $this->images = $imageArr;

        $this->price = new Price($xml->price);
    }


    public string $id;
    public string $productName;
    public string $descriptionTitle;
    public string $descriptionText;
    public $images;
    public $price;

}
