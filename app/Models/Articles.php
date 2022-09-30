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
    }

    public string $id;
    public string $productName;
    public string $descriptionTitle;
    public string $descriptionText;
    // public $images;
    // public $price;

}

class Articles
{
    static $foo = '<?xml version="1.0"?>
    <articles>
        <article>
            <id>X05P4554Q4GQ</id>
            <productName>Tidemark, Blue</productName>
            <descriptionTitle>Wallpaper with classy stripes</descriptionTitle>
            <descriptionText>The uneven stripes of the tide with its calm blue hues bring a pleasant, serene and restful setting. The wallpaper is excellent for hanging on all four walls in a room. Searching for a specific tint? Please contact us and our design studio will help you find the perfect tone.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786798/article/R15101_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786798/article/R15101_image1</url>
                    <alt>Wall Mural R15101 Tidemark, Blue image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786590/article/R15101_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786590/article/R15101_image2</url>
                    <alt>Wall Mural R15101 Tidemark, Blue image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786593/article/R15101_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786593/article/R15101_image3</url>
                    <alt>Wall Mural R15101 Tidemark, Blue image 3 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786593/article/R15101_image4</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786593/article/R15101_image4</url>
                    <alt>Wall Mural R15101 Tidemark, Blue image 4 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X0BWLWQBJ139</id>
            <productName>Tres Tintas MURAL KATHMANDU</productName>
            <descriptionTitle>Mural Kathmandu</descriptionTitle>
            <descriptionText>This is a design collaboration between the Barcelona based brand Tres Tintas and Rebel Walls.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118881/article/M2214-1_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118881/article/M2214-1_image1</url>
                    <alt>Wall Mural M2214-1 Tres Tintas MURAL KATHMANDU image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118891/article/M2214-1_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118891/article/M2214-1_image2</url>
                    <alt>Wall Mural M2214-1 Tres Tintas MURAL KATHMANDU image 2 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>15</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X0BZ0PV1ENXT</id>
            <productName>Elevation Lines, Black</productName>
            <descriptionTitle>Living lines</descriptionTitle>
            <descriptionText>With a blackboard as background, this black wallpaper comes alive! Tall mountains and deep valleys, small hills and steep ravines &#x2013; on a map, all this is portrayed with the help of thin, thin lines. So-called height curves mark height differences in the terrain, depending on how close or far apart they are.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457939041/article/R14072_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457939041/article/R14072_image1</url>
                    <alt>Wall Mural R14072 Elevation Lines, Black image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936775/article/R14072_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936775/article/R14072_image2</url>
                    <alt>Wall Mural R14072 Elevation Lines, Black image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936775/article/R14072_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936775/article/R14072_image3</url>
                    <alt>Wall Mural R14072 Elevation Lines, Black image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X0N0IUHFBVTY</id>
            <productName>Tres Tintas MAYOLICA</productName>
            <descriptionTitle>Mayolica</descriptionTitle>
            <descriptionText>This is a design collaboration between the Barcelona based brand Tres Tintas and Rebel Walls.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118874/article/JO1015-3_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118874/article/JO1015-3_image1</url>
                    <alt>Wall Mural JO1015-3 Tres Tintas MAYOLICA image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118887/article/JO1015-3_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118887/article/JO1015-3_image2</url>
                    <alt>Wall Mural JO1015-3 Tres Tintas MAYOLICA image 2 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>15</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X0TM8X5EBI4A</id>
            <productName>Cotton Skies, Black</productName>
            <descriptionTitle>CLOUDS DRIFTING BY</descriptionTitle>
            <descriptionText>Feel weightless with this beautiful etched clouds. This designs brings air into your room and makes your ceiling feel miles away. If you like white walls but still want something surprising, this design will suit you perfectly.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486463544/article/R14511_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486463544/article/R14511_image1</url>
                    <alt>Wall Mural R14511 Cotton Skies, Black image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486464102/article/R14511_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486464102/article/R14511_image2</url>
                    <alt>Wall Mural R14511 Cotton Skies, Black image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486464105/article/R14511_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486464105/article/R14511_image3</url>
                    <alt>Wall Mural R14511 Cotton Skies, Black image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X161FBK8M7KV</id>
            <productName>Cuddle Clouds</productName>
            <descriptionTitle>A nap amongst the clouds</descriptionTitle>
            <descriptionText>Who hasnt dreamed of taking a nap surrounded by fluffy clouds? In Cuddle Clouds, your dream can become reality. Just place the tapestries in the bedroom and dreamlike rest will surely be achieved. The wallpaper is repeatable sideways.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457939020/article/R14011_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457939020/article/R14011_image1</url>
                    <alt>Wall Mural R14011 Cuddle Clouds image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936718/article/R14011_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936718/article/R14011_image2</url>
                    <alt>Wall Mural R14011 Cuddle Clouds image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936720/article/R14011_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936720/article/R14011_image3</url>
                    <alt>Wall Mural R14011 Cuddle Clouds image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1DQ35UGEPQF</id>
            <productName>Marble Art</productName>
            <descriptionTitle>Marble walls bring elegance to your home</descriptionTitle>
            <descriptionText>Classic, luxurious and irregular. This marble wall mural will add glamor to any room and make your furnishings pop.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927938/article/R15181_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927938/article/R15181_image1</url>
                    <alt>Wall Mural R15181 Marble Art image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927884/article/R15181_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927884/article/R15181_image2</url>
                    <alt>Wall Mural R15181 Marble Art image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927885/article/R15181_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927885/article/R15181_image3</url>
                    <alt>Wall Mural R15181 Marble Art image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1FERZAFAZMT</id>
            <productName>Tres Tintas CARTE MARIN</productName>
            <descriptionTitle>Carte Marin</descriptionTitle>
            <descriptionText>This is a design collaboration between the Barcelona based brand Tres Tintas and Rebel Walls.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118883/article/M2506-2_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118883/article/M2506-2_image1</url>
                    <alt>Wall Mural M2506-2 Tres Tintas CARTE MARIN image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1493118894/article/M2506-2_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1493118894/article/M2506-2_image2</url>
                    <alt>Wall Mural M2506-2 Tres Tintas CARTE MARIN image 2 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>15</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1LRDD59BTYM</id>
            <productName>Pulse of Passion, Blue</productName>
            <descriptionTitle>A black and blue drama</descriptionTitle>
            <descriptionText>A midnight blue wallpaper with wide strokes of the brush without hesitation, sudden stops in the line, a caution which generates its own pattern and then new, sudden and delightful flings in the pattern. This is a crazy pattern, but we love it. And despite its cheeky lines, this wallpaper won&amp;rsquo;t put up a considerable fight for attention in the room.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457939042/article/R14093_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457939042/article/R14093_image1</url>
                    <alt>Wall Mural R14093 Pulse of Passion, Blue image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936795/article/R14093_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936795/article/R14093_image2</url>
                    <alt>Wall Mural R14093 Pulse of Passion, Blue image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936795/article/R14093_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936795/article/R14093_image3</url>
                    <alt>Wall Mural R14093 Pulse of Passion, Blue image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1O74Z3ULR5P</id>
            <productName>Jungle Land, Vintage</productName>
            <descriptionTitle>ORIGINAL 19TH-CENTURY DESIGN</descriptionTitle>
            <descriptionText>An exotic jungle in a faraway land &#x2013; or at least as it was imagined by the unknown artist who once upon a time created the illustration that this wallpaper mural pattern was based upon. Evoke dreams in your own home about distant shores, and the creatures awaiting beneath the trees in the jungle, with this fascinating wall mural.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486463552/article/R14611_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486463552/article/R14611_image1</url>
                    <alt>Wall Mural R14611 Jungle Land, Vintage image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486464137/article/R14611_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486464137/article/R14611_image2</url>
                    <alt>Wall Mural R14611 Jungle Land, Vintage image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1486464132/article/R14611_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1486464132/article/R14611_image3</url>
                    <alt>Wall Mural R14611 Jungle Land, Vintage image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1PNF9QYNJK5</id>
            <productName>Storm Brewing</productName>
            <descriptionTitle>Add expression to your room with this wall mural</descriptionTitle>
            <descriptionText>When the air is warm but the clouds are gathering, an expectant heaviness descends on the land below. Perfect for adding atmosphere to your ceiling, these thunderous clouds are a repeatable pattern, created using watercolours and ink.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088131/article/R14191_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088131/article/R14191_image1</url>
                    <alt>Wall Mural R14191 Storm Brewing image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088303/article/R14191_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088303/article/R14191_image2</url>
                    <alt>Wall Mural R14191 Storm Brewing image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088303/article/R14191_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088303/article/R14191_image3</url>
                    <alt>Wall Mural R14191 Storm Brewing image 3 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088319/article/R14191_image4</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088319/article/R14191_image4</url>
                    <alt>Wall Mural R14191 Storm Brewing image 4 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1Q6TEFC56DZ</id>
            <productName>Perfect Fit, Mint Green</productName>
            <descriptionTitle>A minty green wallpaper</descriptionTitle>
            <descriptionText>Subdued minty green with grey pattern connections. Inspired by the perfection of the circle, we created this pattern. A timeless wallpaper that works perfectly in many different types of rooms. Pick your favourite amongst the delightfully misty pastel shades.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457939043/article/R14112_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457939043/article/R14112_image1</url>
                    <alt>Wall Mural R14112 Perfect Fit, Mint Green image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936798/article/R14112_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936798/article/R14112_image2</url>
                    <alt>Wall Mural R14112 Perfect Fit, Mint Green image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936802/article/R14112_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936802/article/R14112_image3</url>
                    <alt>Wall Mural R14112 Perfect Fit, Mint Green image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X1VCVDP9EYU6</id>
            <productName>Lenses</productName>
            <descriptionTitle>The dot of dots</descriptionTitle>
            <descriptionText>Say hello to a remarkably soulful dot; in line as well as in pattern composition. See how the dots calmly rise towards the sky or, if you turn the wallpaper, how the dots playfully drift down from the ceiling. We were thinking of stylized camera objectives when this creation took form, but beauty is in the eye of the beholder, and you can just as easily see the characteristic splash of coffee from an overfilled coffee cup in the pattern.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457939010/article/R13951_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457939010/article/R13951_image1</url>
                    <alt>Wall Mural R13951 Lenses image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936736/article/R13951_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936736/article/R13951_image2</url>
                    <alt>Wall Mural R13951 Lenses image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1457936733/article/R13951_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1457936733/article/R13951_image3</url>
                    <alt>Wall Mural R13951 Lenses image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X208H6WTULXY</id>
            <productName>Broken Belle Epoque</productName>
            <descriptionTitle>A wall mural full of bittersweet memories</descriptionTitle>
            <descriptionText>Your eye will be drawn to the questions in this photograph. Can you glimpse its former glory? Can you appreciate its dilapidated glamour? Those that can will feel a pulling at their very soul.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088137/article/R14361_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088137/article/R14361_image1</url>
                    <alt>Wall Mural R14361 Broken Belle Epoque image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088392/article/R14361_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088392/article/R14361_image2</url>
                    <alt>Wall Mural R14361 Broken Belle Epoque image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088392/article/R14361_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088392/article/R14361_image3</url>
                    <alt>Wall Mural R14361 Broken Belle Epoque image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X29Y7FLOV61V</id>
            <productName>The Memory Box</productName>
            <descriptionTitle>Let your eyes rest on this extraordinary display case</descriptionTitle>
            <descriptionText>There are hours to be spent imagining the story behind each of these objects. What was so important about the card game that meant the eight of spades was preserved? Why was that strange jointed doll figure originally bought? This small print pattern is a mysterious highlight in any room.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088150/article/R14261_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088150/article/R14261_image1</url>
                    <alt>Wall Mural R14261 The Memory Box image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088352/article/R14261_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088352/article/R14261_image2</url>
                    <alt>Wall Mural R14261 The Memory Box image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088360/article/R14261_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088360/article/R14261_image3</url>
                    <alt>Wall Mural R14261 The Memory Box image 3 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088359/article/R14261_image4</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088359/article/R14261_image4</url>
                    <alt>Wall Mural R14261 The Memory Box image 4 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088356/article/R14261_image5</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088356/article/R14261_image5</url>
                    <alt>Wall Mural R14261 The Memory Box image 5 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1476088363/article/R14261_image6</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1476088363/article/R14261_image6</url>
                    <alt>Wall Mural R14261 The Memory Box image 6 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X2ESIKZK4AM0</id>
            <productName>Fossil Stone</productName>
            <descriptionTitle/>
            <descriptionText/>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1489476385/article/R14971_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1489476385/article/R14971_image1</url>
                    <alt>Wall Mural R14971 Fossil Stone image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1489476422/article/R14971_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1489476422/article/R14971_image2</url>
                    <alt>Wall Mural R14971 Fossil Stone image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1489476422/article/R14971_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1489476422/article/R14971_image3</url>
                    <alt>Wall Mural R14971 Fossil Stone image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X2H835COXEAR</id>
            <productName>Animal Tree, Grey</productName>
            <descriptionTitle>Perfect for the kid\'s room</descriptionTitle>
            <descriptionText>If you look close at this gorgeous tree wallpaper design, you\'ll find traces from all kinds of exotic animals &#x2013; perfect to play along with kids. Can you guess all the animals?</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503928016/article/R15332_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503928016/article/R15332_image1</url>
                    <alt>Wall Mural R15332 Animal Tree, Grey image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927897/article/R15332_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927897/article/R15332_image2</url>
                    <alt>Wall Mural R15332 Animal Tree, Grey image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927896/article/R15332_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927896/article/R15332_image3</url>
                    <alt>Wall Mural R15332 Animal Tree, Grey image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X2LSFOURRWNY</id>
            <productName>West Coast, Pale</productName>
            <descriptionTitle>A unique wall panel</descriptionTitle>
            <descriptionText>Well-worn boards in a unique herringbone pattern. This wallpaper is just as lovely on a feature wall as in a whole room, and its gray color palette will add style and comfort to your home.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927938/article/R15162_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927938/article/R15162_image1</url>
                    <alt>Wall Mural R15162 West Coast, Pale image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1504096431/article/R15162_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1504096431/article/R15162_image2</url>
                    <alt>Wall Mural R15162 West Coast, Pale image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1503927882/article/R15162_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1503927882/article/R15162_image3</url>
                    <alt>Wall Mural R15162 West Coast, Pale image 3 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X2M56VCPCRLU</id>
            <productName>Bistro Tiles, White</productName>
            <descriptionTitle/>
            <descriptionText/>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1489476387/article/R14862_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1489476387/article/R14862_image1</url>
                    <alt>Wall Mural R14862 Bistro Tiles, White image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1489476417/article/R14862_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1489476417/article/R14862_image2</url>
                    <alt>Wall Mural R14862 Bistro Tiles, White image 2 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
        <article>
            <id>X2MHSJZR2RLI</id>
            <productName>Seaport</productName>
            <descriptionTitle>Striped wooden panel in marine colors</descriptionTitle>
            <descriptionText>The surface of salty, worn boards brings character and depth to the irregular stripes in soft, harmonic colors. This wallpaper is just as suitable for one wall as several. Should the tones not be the right ones in your home &#x2013; contact our design studio for the color combination of your choice.</descriptionText>
            <images>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786838/article/R15171_image1</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786838/article/R15171_image1</url>
                    <alt>Wall Mural R15171 Seaport image 1 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786598/article/R15171_image2</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786598/article/R15171_image2</url>
                    <alt>Wall Mural R15171 Seaport image 2 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786599/article/R15171_image3</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786599/article/R15171_image3</url>
                    <alt>Wall Mural R15171 Seaport image 3 by Rebel Walls</alt>
                </image>
                <image>
                    <thumbnail>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fill,fl_progressive,h_450,q_85,w_600/v1495786600/article/R15171_image4</thumbnail>
                    <url>https://res.cloudinary.com/rebelwalls/image/upload/b_black,c_fit,fl_progressive,h_1333,q_85,w_1333/v1495786600/article/R15171_image4</url>
                    <alt>Wall Mural R15171 Seaport image 4 by Rebel Walls</alt>
                </image>
            </images>
            <price>
                <value>12.9</value>
                <currency>EUR</currency>
            </price>
        </article>
    </articles>
    ';

    public static function all()
    {
        $objXmlDocument = simplexml_load_string(self::$foo);

        if ($objXmlDocument === FALSE) {
            echo "There were errors parsing the XML file.\n";
            foreach (libxml_get_errors() as $error) {
                echo $error->message;
            }
            exit;
        }
        $arr = array();
        foreach ($objXmlDocument->article as $i => $obj) {
            array_push($arr, new Article($obj) );
        }

        // dd($arr);
        // dd($objXmlDocument->article[1]);
        // dd($objXmlDocument->articles);
       
        // $objJsonDocument = json_encode($objXmlDocument);
        // $arrOutput = json_decode($objJsonDocument, TRUE);
        // dd($arrOutput);
        return $arr;
        // return $arrOutput['article'];
        // return [
        //     [
        //         'id' => 1,
        //         'productName' => "Dude Placeholder",
        //         'descriptionTitle' => "Dude",
        //         'descriptionText' => "Banan cupcake",
        //         'images' =>  [],
        //         'price' => [
        //             'value' => 9.0,
        //             'currency' => "EUR"
        //         ]
        //         ],
        //         [
        //             'id' => 2,
        //             'productName' => "Cool Product",
        //             'descriptionTitle' => "Not same title",
        //             'descriptionText' => "Loooong text here mate",
        //             'images' =>  [],
        //             'price' => [
        //                 'value' => 9.0,
        //                 'currency' => "EUR"
        //             ]
        //         ]
        // ];
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
