<?php

//后台管理员控制器
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/17
 * Time: 15:53
 */
namespace Admin\Controller;
use Component\AdminController;
class ManagerController extends AdminController
{


    public function login()
    {
        if(!empty($_POST))
        {
              //验证码校验
              $verify=new \Think\Verify();
              if(!$verify->check($_POST['captcha']))
              {
                 echo "验证码错误";
              }else{
                  //判断用户名和密码，在model模型中制作一个专门的方法验证
                  $user=new \Admin\Model\ManagerModel();
                 $rst= $user->checkNamePwd($_POST['mg_username'],$_POST['mg_password']);
                 if($rst === false){
                     echo "用户名或密码错误";
                 }else{
                     //登陆信息持久化$_SESSION
                     session('mg_username',$rst['mg_name']);
                     session('mg_id',$rst['mg_id']);

                     //session(name,value) 设置session
                    // session(mg_username); //获取session
                     //session(name,null) 删除指定session
                     //session(null) 清空全部session

                     //页面跳转到后台受首页redirect()
                     $this->redirect('Index/index');
                 }
              }

        }else
            {
                $this->display();
            }

    }


    public function logout()
    {
        session(null);
        redirect('login');
    }

    //制作专门的方法实现验证码的生成
   public function verifyImg()
   {
       $config=array(
           'useImgBg'  =>  false,           // 使用背景图片
           'fontSize'  =>  14,              // 验证码字体大小(px)
           'useCurve'  =>  false,            // 是否画混淆曲线
           'useNoise'  =>  true,            // 是否添加杂点
           'imageH'    =>  26,               // 验证码图片高度
           'imageW'    =>  100,               // 验证码图片宽度
           'length'    =>  4,               // 验证码位数
           'fontttf'   =>  '',              // 验证码字体，不设置随机获取
           'bg'        =>  array(243, 251, 254),  // 背景颜色
           'reset'     =>  true,           // 验证成功后是否重置
       );
       $verify= new \Think\Verify($config);
       $verify->entry();
   }

    public function showlist()
    {

        $info=D('Manager')->select();
        $rinfo=$this->getRoleInfo();
        //var_dump($rinfo);
        $this->assign('rinfo',$rinfo);
        $this->assign('info',$info);
        $this->display();
    }


    public function upd($mg_id)
    {

        if(!empty($_POST))
        {
          // print_r($_POST);
            $manager=D('manager');
            $manager->create();
            $z=$manager->save();
            if($z)
            {
                echo "修改管理员成功！";

            }else{
                echo "修改管理员失败！";

            }
        }else{

        //获得被修改管理员的信息
        $info=D('manager')->find($mg_id);
        $this->assign('info',$info);

        $rinfo=$this->getRoleInfo();
        $this->assign('rinfo',$rinfo);
        $this->assign('mg_id',$mg_id);
        $this->assign('role_id',$info['mg_role_id']);
        $this->display();
        }
    }

    public function getRoleInfo()
    {
        //查询全部的角色信息
        $rrinfo=D('role')->select();//二维数组信息
        $rinfo=array();
        foreach ($rrinfo as $k => $v )
        {
            $rinfo[$v['role_id']]=$v['role_name'];
        }
        return $rinfo;
    }

    public function add()
    {

        if(!empty($_POST))
        {
            $manager=D('manager');
            $manager->create();
            $z=$manager->add();
            if($z)
            {
                echo "添加管理员成功！";
            }else{
                echo "添加管理员失败！";
            }
        }else{
            //角色信息
            $info=$this->getRoleInfo();
            $this->assign('info',$info);

            $this->display();
        }

    }

    public  function del()
    {
        //判断是否为超级管理员
        // ①若是mg_id=1，删除失败
        // ②当mg_id !=1时，继续删除

        $mg_id=$_GET['mg_id'];
        if($mg_id != 1)
        {
           // var_dump($mg_id);
          $info=D('manager');
          //var_dump($info);
          $z=$info->where("mg_id = $mg_id")->delete();
          if($z)
          {
            echo "删除成功！";
          }else{
              echo "删除失败";
          }

        }else
            {
             echo "当前用户为超级管理员，不可删除";
            }

    }


}