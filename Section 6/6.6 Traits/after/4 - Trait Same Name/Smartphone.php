<?php

require_once('Music.php');
require_once('Video.php');

class Smartphone {
    use Music, Video {
        Video::play insteadof Music;
    }
}

$nokia = new Smartphone();
$nokia->play();