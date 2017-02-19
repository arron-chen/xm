<?php
namespace Admin\Controller;
use Component\AdminController;
class IndexController extends AdminController {
    public function index()
    {
        $this->display();
    }

    public function head()
    {
        $this->display();

    }
    public function left()
    {

        //根据session用户id信息查询角色id信息
        $sql="select * from manager where mg_id=".$_SESSION['mg_id'];
        $minfo=D()->query($sql);
        $role_id=$minfo[0]['mg_role_id'];

        //根据角色信息获得权限信息ids的信息
        $sql="select * from role where role_id=".$role_id;
        $rinfo=D()->query($sql);
        $auth_ids=$rinfo[0]['role_auth_ids'];

        //根据auth_ids查询全部拥有的权限信息
        // ① 获得顶级权限
        $sql="select * from auth where auth_level=0 ";
        //如果是admin管理员要实现全部权限
        if($_SESSION[mg_id] != 1)
        {
          $sql.=" and auth_id in ($auth_ids) ";
        }
        $p_info=D()->query($sql);


        // ② 获得次顶级权限
        $sql="select * from auth where auth_level=1 ";
        //如果是admin管理员要实现全部权限
        if($_SESSION[mg_id] != 1)
        {
            $sql.=" and auth_id in ($auth_ids) ";
        }
        $s_info=D()->query($sql);


        $this->assign('pauth_info',$p_info);
        $this->assign('sauth_info',$s_info);
        $this->display();
    }

    public function right()
    {
      $this->display();
    }


}