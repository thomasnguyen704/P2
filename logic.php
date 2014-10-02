<?php

	# Random number from set min and max range
	
	if (isset($_POST["makeNumber"])) {
		$number = rand (10, 99);
	} 
	else {
		$number = "";
	}



	# Random symbol from an array
	
	$symbolArray = array( "]", "[", "?", "/", "<", "~", "#", "`", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "=", "}", "|", ":", ";", "'", ",", ">", "{" );
	
	if (isset($_POST["makeSymbol"])) {
		$symbol=array_rand($symbolArray);
	} 
	else {
		$symbol = "";
	}
	
	

	# Random word from an array

	$wordArray = array (
		"Zero",
		"One",
		"Two",
		"Three",
		"Four",
		"Five",
		"Six",
		"Seven",
		"Eight",
		"Nine",
		"Ten",
		"Eleven",
		"Twelve",
		"Thirteen",
		"Fourteen",
		"Fifteen",
		"Sixteen",
		"Seventeen",
		"Eighteen",
		"Nineteen",
		"Twenty"
	);
	
	$wordRandom = array_rand($wordArray, $_POST["wordCount"]+1);