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
			$this->user=I('get.');
		}elseif (IS_POST) {
			$this->user=I('post.');
		}

	}
	// 返回json数据
	protected function returnJson($code,$msg,$data)
	{
		return $this->ajaxReturn(['code'=>$code,'msg'=>$msg,'data'=>$data]);
	}
	// 验证是否缺少参数
	protected function verifyArgs($required)
	{
		 	$keys=array_keys($this->user);
			if(count(array_intersect($keys,$required))<count($required)){
				return false;
			}else{

				foreach ($this->user as $key => $value) {
					if (empty($value)) {
						return false;
					}
				}
				return true;
			}
	}
 
}
?>