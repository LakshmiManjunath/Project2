
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>xkcd Password Generator</title>
	
<!-- Link to Customized Style Sheet -->
	<link href="css/project2.css" type="text/css" rel="stylesheet">
<!-- Link to Google Fonts Cabin-Condensed -->	
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
<!-- Link to logic part of Project2 -->
	<?php require 'project2_logic.php'; ?>
	
</head>
<body>
<h1>xkcd Password Generator</h1>

<!-- Beginning of the form -->
<form method="POST" action="index.php">
<!-- The Input section of the html -->
	<div class="input">
		<label for="no_words">Number of Words:</label>
		<select id="no_words" name="word_count"> 
			<option value="">Select value</option>
			<option value='1' <?php if($word_count == 1){echo "selected='selected'";} ?>>1</option>
			<option value='2' <?php if($word_count == 2){echo "selected='selected'";} ?>>2</option>
			<option value='3' <?php if($word_count == 3){echo "selected='selected'";} ?>>3</option>
			<option value='4' <?php if($word_count == 4){echo "selected='selected'";} ?>>4</option>
			<option value='5' <?php if($word_count == 5){echo "selected='selected'";} ?>>5</option>
			<option value='6' <?php if($word_count == 6){echo "selected='selected'";} ?>>6</option>
			<option value='7' <?php if($word_count == 7){echo "selected='selected'";} ?>>7</option>
			<option value='8' <?php if($word_count == 8){echo "selected='selected'";} ?>>8</option>
			<option value='9' <?php if($word_count == 9){echo "selected='selected'";} ?>>9</option>
		</select><br>
		<label>Include a Number</label><input type="checkbox" name="add_number" <?php if($add_number){echo "checked='checked'";} ?>><br>
		<label>Include a Symbol</label><input type="checkbox" name="add_symbol" <?php if($add_symbol){echo "checked='checked'";} ?>><br>
		<br><input type="submit" value="Generate Password!" id="generate_password">
	</div><br>

<!-- Section which displays the generated password -->
	<div class="display_div" style="display:<?php echo $display_mode ;?>;">
	<span style="color:#6666FF;font-size:25px;font-family:'Cabin Condensed';"> Password: </span><?php 
		foreach($new_Password as $word)
		{
			echo $word.' ';
		}
	?>
	</div>
</form>

<!-- Section describing what is xkcd password and how is it generated -->
<div class="info">
	<p><b>xkcd</b>, created by Randall Munroe, is a webcomic of romance, sarcasm, math, and language. The subject matter of the comic varies from statements on life &amp; love to mathematical &amp; scientific jokes.</p>
	<p class="image"><a href="http://xkcd.com/936/"><img src="images/password_strength.png" alt="password_strength"></a> </p>
	<p class="xkcd_info">This comic is saying that the password in the first frame "Tr0ub4dor&3" is easier for password cracking software to guess because it has less entropy than "correcthorsebatterystaple" and also more difficult for a human to remember, leading to insecure practices like writing the password down on a post-it attached to the monitor.<br>
	In simple cases the entropy of a password is calculated as a^b where 'a' is the number of allowed symbols and 'b' is its length. A dictionary word (however long) has an entropy of around 65000, i.e. 16 bits. A truly random string of length 11 (not like "Tr0ub4dor&3", but more like "J4I/tyJ&Acy") has 94^11 = 72.1 bits. However the comic shows that "Tr0ub4dor&3" has only 28 bits of entropy. Another way of selecting a password is to have 2048 "symbols" (common words) and select only 4 of those symbols. 2048^4 = 44 bits, much better than 28.<br>
	The important thing to take away from this comic is that longer passwords are better because each additional character adds much more time to the breaking of the password. Complexity does not matter unless you have length in passwords. Complexity is more difficult for humans to remember, but length is not.
	</p>
</div>	
</body>
</html>