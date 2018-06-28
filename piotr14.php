<?php
 function gen_one(){
	 for ($i = 1; $i <= 3; $i++) {
		 yield $i;
	 }
 }
 $generator = gen_one();
 
 print_r($generator);
 
 
 foreach ($generator as $value)
 {
	 echo "$value \n";
 }
 ?>