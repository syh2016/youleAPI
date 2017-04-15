<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {

	// 注册测试
	public function register( )
	{
		$url="http://www.youle.com/index.php/Home/User/register";
		$data=[
			'mobile'=> 15811205357,
			'password1'=>a11111,
			'password2'=>a11111,
			'code'=>1234,
			'unique_id'=>11,
		];
		$res=httpRequest($url,'post',$data);
		// p($res);
		echo $res;
		 // var_dump($res);
		
	}

	public function test()
	{
		 
	}


}