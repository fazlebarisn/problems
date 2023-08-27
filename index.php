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

$arg = [
	'Red', 'Blue', 'Yellow'
];

$arg2 = [
	'Red', 'Blue', 'Pick'
];

$arg3 = [
	['Red', 'Blue', 'Pink']
];

$array1 = [
	"a" => ["green", "red", "blue", "red"]
];
$array2 = [
	"a" => "green", "red", "blue", "Parpal",
	// "b" => "green", "red", "blue", "red",
	// "c" => 2,3,6,8,7
];
// dd($arr);

$result = array_diff( $arg, $arg2 );

// dd($result );

class Parrent{
	public function myName(){
		echo "Fazle Bari";
	}
}

$P = new Parrent;
// $P->myName();

class Child extends Parrent{
	public function myName(){
		echo "Fazle Bari Sony";
	}
}
$c = new Child;
// $c->myName();
