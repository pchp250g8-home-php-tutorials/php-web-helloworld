<?php

    $date = new DateTime("now", new DateTimeZone("Europe/Minsk"));   
    echo("Hello, World!!!<br>");
    echo("PHP Test Web Page!!!<br>");
    echo("Today is:" . $date->format(DATE_RSS) . "!!!<br>");
    echo("<p><a href=\"index.html\">Html Page</a></p>");
?>
