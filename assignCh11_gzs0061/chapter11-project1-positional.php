<?php
include("rainbowIterator.php");
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
            margin:1px;
            display: inline-block;
            
            position: absolute;
        }
    </style>   
</head>
<body>
<main>
<?php
echo "<h1> Using iterator: ".$iterator."</h1>";

$red=0;
$green=0;
$blue=0;

$steps=floor(255/$iterator);
$height=40;
$width=40;

for ($red=0;$red<255&&$red>=0;$red+=$iterator) {
    
	for ($green=0;$green<255&&$green>=0;$green+=$iterator) {
        
		for ($blue=0;$blue<255&&$blue>=0;$blue+=$iterator) {
            
            $hexColor = "#" . sprintf('%02x',$red) . sprintf('%02x',$green) . sprintf('%02x',$blue);
            
            $zindex = floor(($blue/2.55));
            $topOff = floor(($red/255)*$steps*$height+$zindex*$height*(1/$steps)+50);
            $leftOff = floor(($green/255)*$steps*$width+$zindex*$width*(1/$steps));            

            $styleAttribute = "style='background-color: rgb(" . $red . "," . $green . "," . $blue . ");";
            $styleAttribute .= " top: " . $topOff . "px;";
            $styleAttribute .= " left: " . $leftOff . "px;";
            $styleAttribute .= " z-index: " . $zindex . ";";
            
            $titleAttribute = "title='$hexColor'";            
            
            echo "<span " . $styleAttribute . " " . $titleAttribute . "></span>	\n";
				
		}
	}
}
?>

</main>
</body>
</html>    