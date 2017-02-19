<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/30
 * Time: 21:18
 */
namespace Admin\Controller;
use Component\AdminController;
class AuthController extends AdminController
{
    public function showlist()
    {
        $info=$this->getInfo();
        $this->assign('info',$info);
        $this->display();
    }

    public function add()
    {
        if(!empty($_POST))
        {
            // print_r($_POST);
            //在AuthModel里面通过一个指定的方法实现权限添加
            $auth= new \Admin\Model\AuthModel();
            $z=$auth->addAuth($_POST);
            if($z)
            {
              echo  '添加权限成功！';
            }else{
             echo   '添加权限失败！';
            }

        }else{
        //获得父级权限
        $info=$this->getInfo(true);
        //var_dump($info);
        //从$info中获得信息
        //以便在sarty模板中使用{html_options}
        $authinfo=array();
        foreach ($info as $v)
        {
            $authinfo[$v['auth_id']]=$v['auth_name'];
        }
        //var_dump($authinfo);
        $this->assign('authinfo',$authinfo);
        $this->display();
        }
    }


    public function upd($auth_id)
    {
        if(!empty($_POST))
        {
            // print_r($_POST);
            //在AuthModel里面通过一个指定的方法实现权限添加
            $auth= D('auth');
            $auth->create();
            $z=$auth->save();
            if($z)
            {
                echo  '修改权限成功！';
            }else{
                echo   '修改权限失败！';
            }

        }else{
            //获得父级权限
            $info=$this->getInfo(true);
            //var_dump($info);
            //从$info中获得信息
            //以便在sarty模板中使用{html_options}
            $authinfo=array();
            foreach ($info as $v)
            {
                $authinfo[$v['auth_id']]=$v['auth_name'];
            }
            //var_dump($authinfo);

            //获取全部权限信息

            $auth=D('auth');
            $auth_info=$auth->select($auth_id);
            //var_dump($auth_info);
            $this->assign('auth_info',$auth_info);
            $this->assign('authinfo',$authinfo);
            $this->display();
        }
    }

    public function del()
    {
        $auth_id=$_GET['auth_id'];
        // var_dump($auth_id);
        $info=D('auth');
        //var_dump($info);
        $z=$info->where("auth_id = $auth_id")->delete();
        if($z)
        {
            echo "删除成功！";
        }else{
            echo "删除失败";
        }

    }

    public function getInfo($flag=false)
    {
        //如果$flag标志为false，查询全部的权限信息
        //如果$flag标志为true，只查询level=0/1 的权限信息
        $auth=D('auth');
        if($flag==true){
            $info=D('auth')->where('auth_level<2')->order('auth_path asc')->select();
        }else{
            $info=D('auth')->order('auth_path asc')->select();
        }

        foreach($info as $k =>$v)
        {
            $info[$k]['auth_name']=str_repeat( '- - >',$v['auth_level']).$info[$k]['auth_name'];
        }
        return $info;

    }


}