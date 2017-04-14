<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\BaseController;
class UserController extends BaseController {

	/**
	 *	用户注册
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function register()
	{
		$required=['mobile','password1','password2','code'];//必选
		$optional=['unique_id'];//可选

		 
		if(!$this->verifyArgs($required)){
			return 	$this->returnJson(0,'缺少参数');
		};

		if(!check_mobile($this->user['mobile'])){	
			return $this->returnJson(-1,'非法手机号');
		}else{
			
			$Users=M('user');
			$res=$Users->where(['phone'=>$this->user['mobile']])->select();
			if (!empty($res)) {
				return $this->returnJson(-2,'已注册');
			}

			
			if ($this->user['password1']!==$this->user['password2'])
			{
				return  $this->ajaxReturn(['code'=>-1,'msg'=>'两次密码不一致']);
			}

			
		}


		

			 
 		// return $res;

		// var_dump($res);
		// {
  //   		return array('status'=>-1,'msg'=>'账号已存在');
  //   	}

		// if ($password1!==$password2)
		// {
		// 	return  $this->ajaxReturn(['code'=>-1,'msg'=>'两次密码不一致']);
		// }

  //   	$user['password'] = encrypt($user['password']);
  //   	$user['reg_time'] = time();
  //   	$user_id = M('users')->add($user);
  //   	if(!$user_id){
  //   		return array('status'=>-1,'msg'=>'添加失败');

		 

		// $data=[
		// 	'phone'=>$mobile,
		// 	'phone'=>$mobile,
		// ]
		// $res=M('user')->add(md5());
		// dump($res);
	}

	/**
	 *用户登录
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function login($value='')
	{
		# code...
	}

	/**
	 * 忘记密码
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	
	public function findPassword($value='')
	{
		# code...
	}

	/**
	 * 第三方登录
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function otherLogin($value='')
	{
		# code...
	}

	/**
	 * 发送验证码
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function sendSmsRegCode($value='')
	{
		# code...
	}

	/**
	 * 修改用户密码
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function updatePassword($value='')
	{
		# code...
	}

	/**
	 * 用户反馈
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function addTickling($value='')
	{
		# code...
	}

	/**
	 * 头像上传
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function headImageUpload($value='')
	{
		# code...
	}

	/**
	 * 获取服务器时间戳
	 * @author  syh
	 * @param 	string   文件名
	 * @param   string   文件内容
	 * @return  boolean         
	 */
	public function getServerTime()
	{
		$result=[
			'code'=>1,
			'msg'=>'获取成功',
			'data'=>time(),
		];
		
		$this->ajaxReturn($result); 
	}

}