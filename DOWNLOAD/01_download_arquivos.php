<?php

    $link = "googlelogo-color-120x44dp.png";
    $content = file_get_contents($link);
    $parse = parse_url($link);
    $basename = basename($parse["path"]);
    $file = fopen($basename, "w+");
    fwrite($file, $content);
    fclose($file);

?>

<img src="<?=$basename?>" alt="">
