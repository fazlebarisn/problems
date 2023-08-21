<?php

function dd(...$vals){
	foreach( $vals as $val ){
		echo "<pre>";
		var_dump($val);
		echo "<pre>";
	}
}

$info = [
	[
		'first_name'	=> 'Fazle',
		'last_name'		=> 'Bari',
		'age'			=> 35
	],
	[
		'first_name'	=> 'Faiser',
		'last_name'		=> 'Rahman',
		'age'			=> 30
	],
	[
		'first_name'	=> 'Sardar',
		'last_name'		=> 'Motin',
		'age'			=> 32
	],
];

$info2 = [
	'one'=>[
		'first_name'	=> 'Fazle',
		'last_name'		=> 'Bari',
		'age'			=> 35
	],
	'two'=>[
		'first_name'	=> 'Faiser',
		'last_name'		=> 'Rahman',
		'age'			=> 30
	],
	'three'=>[
		'first_name'	=> 'Sardar',
		'last_name'		=> 'Motin',
		'age'			=> 32
	],
];

$info3 = [
	[1,'Fazle','Bari', 35],
	[2,'Faiser','Rahman', 34],
	[3,'Sardar','Motin', 40],
];

// $result = array_column($info2, 'first_name', 'age' );
// End of array_column function

$names = ['Bari', 'Sony', 'Motin', 'Rony','Bari', 'Sony','Motin', 'Rony','Motin', 'Rony',];
$deps = ['Bangla', 'English', 'Math', 'CSE'];

// $result = array_combine($names, $deps );
// End of array_combine function

$result = array_count_values($names);

function find( $result, $name ){
	if( $result[$name] >= 0 ){
		echo "Found match of $name " , $result[$name] . ' times';
	}else{
		echo 'No match found';
	}
}
// find($result, 'Sony');
// End of array_count_values function

$color1 = [
	'one'	=> 'Red', 
	'two'	=> 'Green', 
	'three'	=> 'Blue',
	'four'	=> 'Yollow'
];

$color2 = [
	'one'	=> 'Red', 
	'two'	=> 'Green', 
	'm'		=> 'Bluei',
	'd'		=> 'Yollow2'
];

$color3 = [
	'one'	=> 'Red', 
	'r'		=> 'Green', 
	'm'		=> 'Blue',
	'd'		=> 'Yollow2'
];


// End of ( array_diff, array_diff_assoc ) function
// $result = array_diff($color1, $color2,$color3 );
// $result = array_diff_assoc($color1, $color2,$color3 );
// $result = array_diff_key($color1, $color2,$color3 );
// $result = array_intersect($color1, $color2,$color3 );
$result = array_intersect_assoc($color1, $color2,$color3 );

dd($result);