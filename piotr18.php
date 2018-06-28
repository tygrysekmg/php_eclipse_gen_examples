<?php
 function from(){
	 
	 yield 1;
	 yield 2;
	 yield 3;
	 
	 
	 
 }
 
 
 function gen(){
	 yield 0;
	 yield from from();
	 yield 4;
	 
 }
 
 var_dump(iterator_to_array(gen()));
 
 
 ?>