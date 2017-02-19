<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/1/26
 * Time: 12:23
 */
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model
{
    //制作一个方法对用户名和密码进行验证
    public function checkNamePwd($name,$pwd)
    {
        //getByxxx()函数返回一维数组
        $info=$this->getByMg_name($name);
        //$info=null 说明用户名错误
        //$info= 一维数组 说明用户名正确
      //  print_r($info);
        //$info不为null，就可以继续验证密码
        if($info !== null)
        {
            //验证密码（查询出来的密码与用户输入的密码比较）
            if($info['mg_pwd'] != $pwd)
            {
                return false;
            }else{
                return $info;
            }

        }else
            {
                return false;
            }


    }
}