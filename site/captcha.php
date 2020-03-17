<?php
session_start();
//Send a image
create_image();
exit();

function create_image(){
    
    $security_code = $_SESSION["security_code"];
	    
    //Create the image
    $image = @imagecreatefromjpeg("images/static.jpg");  

    //Making the font color
    $black = ImageColorAllocate($image, 0, 0, 0);

    //Make the background black 
    //ImageFill($image, 0, 0, $bgImg); 

    //Set some variables for positioning and font-size, "5" is the largest I could get to work
	$vPos = 3;
	$hPos = 25;
	$fontSize = imageloadfont('./dimurph.gdf');;
	
    ImageString($image, $fontSize, $hPos, $vPos, $security_code, $black); 
 
    //Tell the browser what kind of file this is 
    header("Content-Type: image/jpeg"); 

    //Output image as a jpeg 
    ImageJpeg($image);
   
    //Free up stuff
    ImageDestroy($image);
}
?>