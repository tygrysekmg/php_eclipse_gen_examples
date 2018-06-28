<html>
<head>
</head>
<body>

<?php
$input = <<<'EOF'
1;PHP;Likes dollars signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;
echo $input;
echo "<br />";
echo "<br />";



function input_parser($input){
	foreach (explode("\n",$input) as $line) {
		$fields = explode(';', $line);
		$id = array_shift($fields);
		
		yield $id => $fields;
		
		
	}
	
	
}

foreach (input_parser($input) as $id => $fields ) {
	
	echo "$id";
	echo "<br />";
	echo "$fields[0]";
	echo "<br />";
	echo "$fields[1]";
	echo "<br />";
}

 ?>
 
 </body>
 </html>