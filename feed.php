<?php
    require_once "admin/includes/functions/config.php";

    $response = fetchAll("devotions", "devotion_id", 0, 15);
    if ($response) {
        $items = $response;
    } else {
        echo "Temporary Error! Please check back later";
    }
    
    /**
    * For demonstration purposes, the data is defined here.
    * In a real scenario it should be loaded from a database.
    */
    $channel = array("title"        => "Prayer Madueke",
                     "description"  => "Prayer M. Madueke, Christian Author of over 100 books on Amazon.",
                     "link"         => "http://www.madueke.com",
                     "copyright"    => "Copyright (C) 2020 Prayer Madueke. All rights reserved.");
    
    // $items = array(
    //     array("title"       => "$devotion_title",
    //           "description" => "This is the description of the first example.",
    //           "link"        => "http://www.example.com/example1.html",
    //           "pubDate"     => date("D, d M Y H:i:s O", mktime(22, 10, 0, 12, 29, 2008)))
    // );
    
    $output = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?" . ">";
    $output .= "<rss version=\"2.0\">";
    $output .= "<channel>";
    $output .= "<title>" . $channel["title"] . "</title>";
    $output .= "<description>" . $channel["description"] . "</description>";
    $output .= "<link>" . $channel["link"] . "</link>";
    $output .= "<copyright>" . $channel["copyright"] . "</copyright>";
    
    foreach ($items as $item) {
        $devotion_link = strtolower((str_replace(" ", "-", $item['devotion_title'])));
        $devotion_body = str_replace("</b>", "'", $item["devotion_body"]);
        $devotion_body = trim(preg_replace('/\s+/', ' ', $devotion_body));
        $devotion_body = strip_tags($devotion_body);
        $devotion_body = substr($devotion_body, 0, 1000) . "...";
        $source = $item['datePosted'];
        $date = new DateTime($source);
        
        $output .= "<item>";
        $output .= "<title>" . $item["devotion_title"] . "</title>";
        $output .= "<description>" . $devotion_body . "</description>";
        $output .= "<link>" . "http://www.madueke.com/devotional?devotion=$devotion_link" . "</link>";
        $output .= "<pubDate>" . date("D, d M Y H:i:s T", strtotime($item['datePosted'])) . "</pubDate>";
        $output .= "</item>";
    }
    $output .= "</channel>";
    $output .= "</rss>";
    
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    echo $output;

?>