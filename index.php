<?php

function dd(...$vals){
	foreach( $vals as $val ){
		echo "<pre>";
		var_dump($val);
		echo "<pre>";
	}
}

$me = [8,8,4,4];
$yo = [
	'a' => 'kui',
	'b' => 'kui',
	'c' => 'kui',
	'd' => 'kui',
];

	


dd($yo,$me);