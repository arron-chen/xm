<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/2/5
 * Time: 16:14
 */
//普通控制器的父类
//前台控制访问
namespace Component;
use Think\Controller;
class IndexController extends Controller
{
//构造方法
    public function __construct()
    {
        parent::__construct();//先执行父类的构造方法，否则系统报错


        //CONTROLLER_NAME   ---goods
        //ACTION_NAME --showlist
        //当前操作
        $now_ac=CONTROLLER_NAME."-".ACTION_NAME;
        //var_dump($now_ac);




        //过滤控制器和方法，避免用户非法请求
        //通过角色获得用户可以访问的控制器和方法信息
        $sql="select role_auth_ac from manager a join role b on a.mg_role_id=b.role_id where a.mg_id=".$_SESSION['mg_id'];
        $auth_ac=D()->query($sql);
        //var_dump($auth_ac);
        $auth_ac=$auth_ac[0]['role_auth_ac'];

        $sql1=" select mg_id from manager ";
        $mg_id=D()->query($sql1);
        //var_dump($mg_id);
        $allow_mg_id=array();
        foreach ($mg_id as $k => $v)
        {
            $allow_mg_id[]=$v['mg_id'];
        }

        //var_dump($allow_mg_id);

        //判断$now_ac是否在$anth_ac字符串中出现
        //strpos函数如果返回false是没有出现，返回 0 1 2 3 表示有出现
        //var_dump(strpos($auth_ac,$now_ac));
        //管理员不限制
        //默认以下权限没有限制
        //Index/left   Index/right  Index/head Index/index  Manager/login
        $allow_ac=array('Index-left','Index-right','Index-head ','Index-index ','Manager-login','Manager-verifyImg');
        if(!in_array($now_ac,$allow_ac) &&  !in_array($_SESSION['mg_id'] ,$allow_mg_id)  && strpos($auth_ac,$now_ac)===false)
        {
            $this->redirect('Manager/login',array(),2,"<span style='align-content: center'>没有权限访问，点击<a href='#'>这里</a>登陆</span>");
        }


    }
}