<?php

    $image = imagecreatefromjpeg("imagens".DIRECTORY_SEPARATOR."certificado.jpg");
    $titleColor = imagecolorallocate($image,0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);
    imagestring($image, 5, 450, 150, "Certifcado", $titleColor);
    imagestring($image, 5, 440, 350, "David Silva", $titleColor);
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y")  , $titleColor);

    header("Content-type: image/jpg");
    imagejpeg($image);
    imagejpeg($image,"imagens".DIRECTORY_SEPARATOR."certificado-".date("Y-m-d").".jpg", 10);
    imagedestroy($image);