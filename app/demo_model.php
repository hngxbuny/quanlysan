<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class demo_model extends Model
{
    public $ma;
	public $ten;
	public $tuoi;
	static function get_all(){
		$sql = "select * from san_bong";
		$result = DB::select($sql);
		return $result;
	}
	public function insert_process(){
		$sql = "insert into san_bong values ('$this->ma','$this->ten','$this->tuoi')";
		DB::insert($sql);
	}
	static function get_one($ma_san_bong){
		$arr_sb = DB::select("select * from san_bong where ma = '$ma_san_bong'");
		return $arr_sb;
	}
	public function process_update(){
		DB::update("update san_bong set ten = ?, tuoi = ? where ma = ?",[
			$this->ten,
			$this->tuoi,
			$this->ma
		]);
	}
	static function login_process($user,$password){
		$arr_login = DB::select("select * from san_bong where email = ? and password = ?",[
			$user,
			$password
		]);
		return $arr_login;
	}
}
