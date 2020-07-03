<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\demo_model;
class demo_controller extends Controller
{
	public function danh_sach(){
		$arr_sb = demo_model::get_all();
		return view('danh_sach',compact('arr_sb'));
	}
	public function them_san_bong(){
		return view('them_san_bong');
	}
	public function them_xu_ly(Request $rq){
		$san_bong = new demo_model();
		$san_bong->ma = $rq->ma;
		$san_bong->ten = $rq->ten;
		$san_bong->tuoi = $rq->tuoi;
		$san_bong->insert_process();
		return redirect()->route('danh_sach_san_bong');
	}
	public function sua_san_bong($ma_san_bong){
		$arr_sb = demo_model::get_one($ma_san_bong);
		return view('sua_san_bong',compact('arr_sb'));
	}
	public function sua_xu_ly(Request $rq){
		$san_bong = new demo_model();
		$san_bong->ma = $rq->ma;
		$san_bong->ten = $rq->ten;
		$san_bong->tuoi = $rq->tuoi;
		$san_bong->process_update();
		return redirect()->route('danh_sach_san_bong')
	}
	public function login(){
		return view('login');
	}
	public function login_process(Request $rq){
		$user = $rq->user;
		$password = $rq->password;
		$arr_login = demo_model::login_proxess($user, $password);
		if(count($arr_login) == 1){
			$rq->session()->put('ma',$arr_login[0]->ma);
			return redirect()->route('quan_ly_san_bong.danh_sach_san_bong');
		}
		else{
			return redirect()->route('login')->with('sucess','lỗi');
		}
	}
    public function logout(Request $rq){
		$rq->session()->flush();
		return redirect()->route('login');
	}
}
