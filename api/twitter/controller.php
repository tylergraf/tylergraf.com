<?php

require('twitter.php');

$twitter = new Twitter("tylergraf", "titleist");
$public_timeline = $twitter->getPublicTimeline();

print_r($public_timeline);
?>