<?php
$a_bool = TRUE;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;

echo gettype($a_bool);
echo gettype($a_str);

if (is_int($a_bool)){
	$an_int += 4;
}
if (is_string($a_bool)){
	echo "String: $bool";
}
echo $an_int;
?>