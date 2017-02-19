<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/30
 * Time: 19:19
 */
namespace Admin\Controller;
use Component\AdminController;
//角色控制器
class RoleController extends AdminController
{
   //显示角色列表
    public function showlist()
    {

        $info=D()->table('role')->select();

        $this->assign('info',$info);
        $this->display();
    }

    //进行权限分配
    public function distribute($role_id)
    {
        if(!empty($_POST))
        {
          //print_r($_POST);
          //利用RoleModel模型里面的一个专门的方法实现权限分配
            $role= new \Admin\Model\RoleModel();
            //saveAuth接受到一维数组信息
           $z= $role->saveAuth($_POST['authname'],$role_id);
           if($z)
           {
             echo "权限分配成功！";
           }else{
              echo "权限分配失败！";
           }
        }else{

        //根据role_id查询对应的角色名字
        $rinfo=D('role')->getByrole_id($role_id);
        $this->assign('role_name',$rinfo['role_name']);

        //查询全部的权限信息，放入模板显示并进行权限分配
        $pauth_info=D('auth')->where('auth_level=0')->select();   //父级权限
        $sauth_info=D('auth')->where('auth_level=1')->select();   //次父级权限
        $tauth_info=D('auth')->where('auth_level=2')->select();   //次次父级权限

        //把当前角色对应的权限信息查询出来
        $authinfo=D('role')->getByRole_id($role_id);
        $auth_ids=$authinfo['role_auth_ids'];
        $auth_ids_arr=explode(',',$auth_ids);  //数组auth_ids信息

        $this->assign('auth_ids_arr',$auth_ids_arr);
        $this->assign('pauth_info',$pauth_info);
        $this->assign('sauth_info',$sauth_info);
        $this->assign('tauth_info',$tauth_info);

        $this->display();

        }
    }
    public function add()
    {
        if(!empty($_POST))
        {
            $info=D('role');
            $info->create();
            $z=$info->add();
            if($z)
            {
                echo "添加角色成功！";
            }else{
                echo "添加角色失败！";
            }

        }else
            {
                $this->display();
            }

    }

    public function del()
    {
            $role_id=$_GET['role_id'];
            // var_dump($mg_id);
            $info=D('role');
            //var_dump($info);
            $z=$info->where("role_id = $role_id")->delete();
            if($z)
            {
                echo "删除成功！";
            }else{
                echo "删除失败";
            }
    }

    public function upd()
    {
        if(!empty($_POST))
        {
            $info=D('role');
            $info->create();
            $z=$info->save();
            if($z)
            {
                echo "修改角色成功！";
            }else{
                echo "修改角色失败！";
            }

        }else
        {
            $role_id=$_GET['role_id'];
            $role=D('role');
            $info= $role->find($role_id);
            $this->assign('info',$info);
            $this->display();
        }

    }
}