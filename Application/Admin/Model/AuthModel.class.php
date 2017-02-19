<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/30
 * Time: 22:11
 */
namespace Admin\Model;
use Think\Model;
class AuthModel extends Model
{
    //添加权限方法
     public function addAuth($auth){
         //$auth里面存在4个信息，还缺少两个关键信息 ：auth_path 和 auth_level
         // ①insert生成一个新记录
         // ② update把path 和 level 更新进去

         $new_id=$this->add($auth);//返回记录的主键id值

         //path的情况分两种
         //全路径：父级全路径与本身id的连接信息
         // ①当前权限是顶级权限 ，path=$new_id;
         // ② 当前权限是非顶级权限， path=父级全路径+$new_id
         if($auth['auth_pid'] == 0)
         {
             $auth_path=$new_id;
         }else{
             //查询指定父级的全路径，条件： $auth['auth_pid']
             $pinfo=$this->find($auth['auth_pid']); //查询出父级的记录信息
             $p_path=$pinfo['auth_path'];  //父级全路径
             $auth_path=$p_path."-".$new_id;

            }

             //auth_level数目；全路径里面中横线的个数
             //把全路径变为数组，计算数组的个数和减去-1，就是level的信息
             $auth_level=count(explode('-',$auth_path))-1;

             $dt=array(
                 'auth_id' =>$new_id,
                 'auth_path'=>$auth_path,
                 'auth_level'=>$auth_level
             );
             return  $this->save($dt);

     }

}