<?php
    include("rainbowIterator.php");
    $red = 0;
    $green = 0;
    $blue = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 11</title>
    <style>
        main {
            position: relative;
        }

        span {
            height: 40px;
            width: 40px;
            border: solid black 1px;
            margin: 1px;
            display: inline-block;
            position: absolute;
        }

    </style>
</head>

<body>
    <main>
        <?php echo "<h1> Using iterator: ".$iterator."</h1>";


for ($red=0;$red<255&&$red>=0;$red+=$iterator) {
    
	for ($green=0;$green<255&&$green>=0;$green+=$iterator) {
        
		for ($blue=0;$blue<255&&$blue>=0;$blue+=$iterator) {
            
            $hexColor = " "; 
            $hexColor .= sprintf('%02x',$red);
            $hexColor .= sprintf('%02x',$green);
            $hexColor .= sprintf('%02x',$blue);
            
            $top = (1.5*$red)+$green;
            
            $left = (1.5*$red)+$blue;
            
            echo '<span 
                 style="background-color:
                 rgb('.$red.','.$green.','.$blue.'); 
                 top:'.$top.'px;
                 left:'.$left.'px; 
                 z-index:'.$red.'; 
                 width:'.$iterator.'px;
                 height:'.$iterator.'px;" 
                 title="'.$hex.'">
              </span>';
				
		}
	}
}
?>

    </main>
</body>

</html>
