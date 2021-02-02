<?php
require 'vendor/autoload.php';
use Carbon\Carbon;

class MyClass{
 	public static function cek_umur($tgl,$bln,$thn) {
 		return Carbon::createFromDate($thn, $bln, $tgl)->age;
 	}
 	public static function operasi_aritmatika($param1,$param2,$operand) {
 		switch ($operand) {
 			case '+':
 				return ($param2+$param1);
 			case '-':
 				return ($param2-$param1);
 			case '/':
 				return ($param2/$param1);
 			case 'x':
 				return ($param2*$param1);
 			default:
 				return 'Error Statement';
 		}
 	}
}
?>