<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2018/12/23
 * Time: 17:29
 */
require_once '../vendor/autoload.php';
use UncleNine\FetchRss;

$arr = [

    "https://www.infosecurity-magazine.com/rss/news/",
    "https://www.secpulse.com/archives/category/news/feed",


];

foreach ($arr as $url){
    $rss = (new FetchRss())->parse($url);
    foreach ($rss->items as $item) {
        $href = $item['link'];
        $title = $item['title'];
        print "URL=> $href \r\n title=> $title \r\n\r\n";

    }
}

