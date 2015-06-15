<?php

echo "This is a REST API build for alien kitty. Please give the correct URLs.";


$urlParams = explode('/', $_SERVER['REQUEST_URI']);
$last = explode('?', $urlParams[2]);
$functionName = $last[0];
$functionName($last[1]);


function greetings ($urlParams) {
    echo json_encode("Hello, Kitty!");
	//$last = explode('=', $urlParams);
	//echo " ".$last[1];
	//$string = $last[1];
    $pos = strpos($urlParams, "How");
	if($pos)
		echo json_encode(" I am fine.");
	$pos = strpos($urlParams, "Good");
	if($pos)
		echo json_encode(" You too.");
	$pos = strpos($urlParams, "What");
	if($pos)
		echo json_encode(" This is MuktoSoft-SureCash.");
}

function weather ($urlParams) {
    echo "In func2";
    //echo "<br/>Argument 1 -> ".$urlParams[3];
    echo " ".$urlParams[3];
}

function qa ($urlParams) {
    echo "In func2";
    //echo "<br/>Argument 1 -> ".$urlParams[3];
    echo " ".$urlParams[3];
}

?>

