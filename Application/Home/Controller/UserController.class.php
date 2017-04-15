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

		 
		if(!$this->verifyArgs($required))
		{
			return 	$this->returnJson(-1,'缺少参数');
		};

		if(!check_mobile($this->user['mobile']))
		{	
			return $this->returnJson(-2,'非法手机号');
		}
		
		
		
		$Users=M('user');
		$res=$Users->where(['mobile'=>$this->user['mobile']])->select();
		if (!empty($res))
		{
			return $this->returnJson(-3,'已注册');
		}

			
		if ($this->user['password1']!==$this->user['password2'])
		{
			return $this->returnJson(-4,'两次密码不一致');
		}

		if(isPassword($this->user['password1'])){


			$add_data=[
				'mobile'        => $this->user['mobile'],
				'password'      => password($this->user['password1']),
				'register_time' =>time(),
			];

			$res=$Users->add($add_data);
			if ($res)
			{
				return $this->returnJson(200,'注册成功',$arr);
			}else{
				return $this->returnJson(0,'系统错误',$arr);
				
			}
		}
		else
		{
			
			return $this->returnJson(-5,'密码必须6-18为字母数字下划线');
		}
		 
		 

	
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