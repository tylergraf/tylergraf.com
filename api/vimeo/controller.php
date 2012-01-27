<?php
include_once('vimeo.php');
$vimeo = new phpVimeo('6c59a30e75fe31f4f8253e4ff66c8e72', 'f3a53ce9ef5360cf');


if($_GET['id']){
  $videoId = $_GET['id'];
  $film = $vimeo->call('vimeo.videos.getInfo', array('video_id' => $videoId));
  $film = $film->video;
}
else{
  $videos = $vimeo->call('vimeo.videos.getUploaded', array('user_id' => 'tylergraf','full_response' => 1));
  $videos = $videos->videos->video;
}



//    print_r($videos->);

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
