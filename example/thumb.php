<?php

require "../vendor/autoload.php";

$thumb = new \GMSystem\Resizer\Resizer("cache", 75, 5, true);
//$thumb->flush();

echo "<p><img src='{$thumb->make("images/image.jpg", 200)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400,400)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 1200,628)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 200,600)}' alt='GMSystem' title='GMSystem'></p>";

echo "<p><img src='{$thumb->make("images/image.png", 200)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400,400)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 1200,628)}' alt='GMSystem' title='GMSystem'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 200,600)}' alt='GMSystem' title='GMSystem'></p>";

//$thumb->flush("images/image.jpg");
//$thumb->flush("images/image.png");
//$thumb->flush();