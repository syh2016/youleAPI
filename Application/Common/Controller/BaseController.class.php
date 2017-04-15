<?php 
namespace Common\Controller;
use Think\Controller;
/**
 *  基类
 * @author  syh     
 */
class BaseController extends Controller{	

	public $user=null;//用户参数
	public function __construct()
	{
		parent::__construct();	
		if (IS_GET) {
			$this->user=delEmpty(I('get.'));

		}elseif (IS_POST) {

			$this->user=delEmpty(I('post.'));
		}

	}
	// 返回json数据
	protected function returnJson($code,$msg,$data)
	{
		$data=[
			'code'=>$code,
			'msg'=>$msg,
			'data'=>$data
		];
		//调试模式
		if (C('API_DEBUG'))
		{
			echo '<pre>';
			print_r($data);
			exit();
		}else{
			exit(json_encode($data, JSON_UNESCAPED_UNICODE));		
		}

	}
	// 验证是否缺少参数
	protected function verifyArgs($required)
	{
		 	$keys=array_keys($this->user);

			if(count(array_intersect($keys,$required))<count($required)){
				return false;
			}else{
				return true;
			}
	}
 
}
?>