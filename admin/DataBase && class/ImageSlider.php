<?php

class ImageSlider
{
    public static  function Image_Slider($image,$path) {
        $upload=1;
        $image_name=$image['name'];
        $directory=$path;
        $targetFile=$directory.basename($image_name);
        $filetype=pathinfo($targetFile, PATHINFO_EXTENSION);
        if($filetype!=="png" && $filetype!=="jpg" && $filetype!=="gif"){
            $upload=0;
        }
        if($image['size']>5000000){
            $upload=0;
        }
        if($upload==1) {
            move_uploaded_file($image['tmp_name'],$targetFile);
        }
        return $image_name;
    }
}