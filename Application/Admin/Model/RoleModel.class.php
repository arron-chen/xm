<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/30
 * Time: 20:24
 */
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model
{
    //权限分配
    //$auth是一维数组信息，给当前角色分配的权限id信息
    public function saveAuth($auth,$role_id)
    {
         //把权限id信息由数组变为中间用逗号分隔开的字符串信息
        $auth_ids=implode(',',$auth);
        //var_dump($auth_ids);

        //根据ids权限id信息查询具体操作方法信息
        $info=D('auth')->select($auth_ids);// 返回二维数组信息
        //var_dump($info);

        //拼装控制器和操作方法
        $auth_ac="";
        foreach ($info as $k =>$v)
        {
            if(!empty($v['auth_c']) && !empty($v['auth_a']))
            {
                $auth_ac.=$v['auth_c']."-".$v['auth_a'].",";
            }

        }
        $auth_ac=rtrim($auth_ac,',');  //删除最右边的逗号
        //var_dump($auth_ac);


        //更新操作
        $dt=array(
            'role_id' => $role_id,
            'role_auth_ids' => $auth_ids,
            'role_auth_ac'  => $auth_ac
        );

        return $this->save($dt);
    }
}