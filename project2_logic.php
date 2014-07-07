<?php 
//List of random words. There are 50 words in the array, with indexes from 0 to 49
$word_list = array(
	'project','drift','drain','last','prosecution','maximum','announcement','warrior','prediction','bacteria',
	'questionnaire','mud','infrastructure','hurry','privilege','temple','medium','outdoor','suck','broadcast','leap','random','past','wrist','curtain','monitor','pond','domain','guilt','cattle',
	'subject','walking','aim','minimum','fiscal','skirt','dump','hence','database','uncomfortable',
	'execute','limb','ideology','average','welcome','tune','continuing','harm','horn','endure',);
	
//List of symbols. There are 20 symbols in this array, with indexes from 0 to 19
$symbol_list = array ( '!','@','#','$','%','^','&','*','+','|','?','>','<','/','~','=','-','_',';');

// Checking the number of words chosen for the password
	$word_count = isset($_POST['word_count']) ? $_POST['word_count'] : '';
	
//	Checking if the user chooses to include Numericals
	$add_number = isset($_POST['add_number']) ? 'checked' : '';
	
// Checking if the user chooses to include Symbols	
	$add_symbol = isset($_POST['add_symbol']) ? 'checked' : '';
	
//Initializing the new_password variable
	$new_Password = array();

/*If the user has chosen atleast a word,then the display mode of the dsplay_div is set 
to block mode */ 
	if($word_count){
	$display_mode = "block";	
	}
/* If no words are chosen,the display_div is hidden from the user */
	else{ $display_mode = "none";}

/* For the number of words chosen by the user equal number of random words are chosen from the array $word_count. This is done by generating random indexes of the array $word_count using the built-in function rand() */	
	for($i=1;$i<= $word_count;$i++)
	{
		$index = rand(0,49);
		array_push($new_Password,$word_list[$index]);
	
	}
/* If the user chooses to add a numerical to the new password, a random number between 0 to 9 is chosen using rand() */
	if($add_number == 'checked')
	{
		$number = rand(0,9);
		array_push($new_Password,"$number");
	}
/* If the user chooses to add a symbol to the new password, a random numerical is chosen using rand() on the indexes of the array of list of symbols, $symbol_list  */
	if($add_symbol == 'checked')
	{
		$j = rand(0,19);
		array_push($new_Password,$symbol_list[$j]);
	}
?>