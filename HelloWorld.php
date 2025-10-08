<?php
    $date = new DateTime("now");
    echo("Hello,World!!!<br>");
    echo("PHP Test Web Page!!!<br>");
    echo("Today is:". $date->format(DATE_RSS) ."!!!<br>");
    echo("<a href=\"index.html\">Html Page</a>");
?>
