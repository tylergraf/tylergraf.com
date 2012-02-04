<?php

  include_once('tumblr.php');

  $username = 'solenoled';
  $api_key = 'dIhAnxldxbsglBGNVV44pUdXesW9DcjMRfcSVey0lXg9VAQmsN' ;
  $api_secret = 'jQLvpw94zw5RczdZnNQWNyY3VAgXZWMnv0tJ6axMX1hqFsUAdy' ;

  $t = new phpTumblr($api_key,$username,$api_secret);

  $posts = $t->getPosts();
  $posties = $posts['response']['posts'];
  $pCount = $posts['response']['blog']['posts'];
  $tCount = $posts['response']['total_posts'];







 function displayTree($var) {
     $newline = "\n";
     foreach($var as $key => $value) {
         if (is_array($value) || is_object($value)) {
             $value = $newline . "<ul>" . displayTree($value) . "</ul>";
         }

         if (is_array($var)) {
             if (!stripos($value, "<li class=")) {
                $output .= "<li class=\"file\">" . $value . "</li>" . $newline;
             }
             else {
                $output .= $value . $newline;
             }

         }
         else { // is_object
            if (!stripos($value, "<li class=")) {
               $value = "<ul><li class=\"file\">" . $value . "</li></ul>" . $newline;
            }

            $output .= "<li class=\"folder\">" . $key . $value . "</li>" . $newline;
         }

     }

     return $output;
}
?>