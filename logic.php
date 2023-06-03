<?php
ini_set('display_errors', 0);

$ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false)) {
  $device = 'sp';
} elseif ((strpos($ua, 'iPad') !== false)) {
  $device = 'tb';
} else {
  $device = 'pc';
}

$list = ['all'];
$name = ['記事'];
$long_name = ['記事'];
$day = ['日', '月', '火', '水', '木', '金', '土'];

foreach ($list as $category) {
  $xml = file_get_contents('https://note.com/chatgpt_nobdata/rss?fbclid=IwAR2oayu5iQXct8TrRGz8xh4_Jk2JgVr8OpjI5_Z72xkO_ma6xyICyDi1oMk');
  $feed = simplexml_load_string($xml);
  for ($i = 0; $i < 15; $i++) {
    $title = $feed->channel->item[$i]->title;
    $description = $feed->channel->item[$i]->description;
    $text[$category][$i]['title'] = mb_convert_kana($title, "A", "UTF-8");
    $text[$category][$i]['description'] = str_replace("続きをみる", "", mb_convert_kana(strip_tags($description), "A", "UTF-8"));
    $text[$category][$i]['link'] = $feed->channel->item[$i]->link;
    $text[$category][$i]['date'] = mb_convert_kana(date('n月j日 G時i分', strtotime($feed->channel->item[$i]->pubDate)), "A", "UTF-8");
  }
}