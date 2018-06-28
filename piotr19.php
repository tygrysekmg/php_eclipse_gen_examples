<?php

function count_g(){
	yield 1;
	yield 2;
	yield from [3,4];
	yield from new ArrayIterator([5,6]);
	yield from seven();
	yield 9;
	yield 10;
}


function seven(){
	yield 7;
	yield from e();
}


function e(){
	yield 8;
	
}

foreach (count_g() as $num) {
	echo "$num **";
}