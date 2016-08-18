<?php
#Задание4
    $ch = curl_init("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
    $fp = fopen("wikiout.json", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);

    $fp = fopen("wikiout.json", "r");
    $json = file_get_contents("wikiout.json");

    $wikiArr = json_decode($json, true);

    echo "Title: ".$wikiArr['query']['pages']['15580374']['title']."<br/>";
    echo "PageID: ".$wikiArr['query']['pages']['15580374']['pageid']."<br/>";
