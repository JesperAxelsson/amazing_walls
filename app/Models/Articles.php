<?php

namespace App\Models;

class Articles
{
    public static function all()
    {
        $objXmlDocument = simpleXML_load_file('https://test.rebelwalls.com/articles.php');

        if ($objXmlDocument === FALSE) {
            echo "There were errors parsing the XML file.\n";
            foreach (libxml_get_errors() as $error) {
                echo $error->message;
            }
            exit;
        }
        $arr = array();
        foreach ($objXmlDocument->article as $i => $obj) {
            array_push($arr, new Article($obj));
        }
// dd($arr[0]->images[0]);
        return $arr;
    }

    public static function find($id)
    {
        $articles = self::all();

        foreach ($articles as $article) {
            if ($article->id == $id) {
                return $article;
            }
        }
    }
}
