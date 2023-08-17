<?php
include_once "dd.php";

$arr = [
	'name'		=> 'Fazle Bari',
	'email'		=> 'fazlebarisn2gmail.com',
	'age'		=> 34,
	'school'	=> 'Chakuli',
	'village'	=> 'Shihata',
	'Thana'		=> 'Manda'
];

// dd($arr);

 $case_arr = array_chunk( $arr, 2 ,true );

dd($arr, $case_arr);