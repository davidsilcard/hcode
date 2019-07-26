<?php

    $image = imagecreatefromjpeg("imagens".DIRECTORY_SEPARATOR."certificado.jpg");
    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);
    $fontBevan = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
    $fontPlay = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

    imagettftext($image, 32, 0, 320, 250, $titleColor, $fontBevan, "Certifcado");
    imagettftext($image, 32, 0, 375, 350, $titleColor, $fontPlay, "David Silva");
    imagestring($image, 32, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

    header("Content-type: image/jpg");
    imagejpeg($image);
    imagejpeg($image, "imagens".DIRECTORY_SEPARATOR."certificado-".date("Y-m-d").".jpg", 80);
    imagedestroy($image);

?>

