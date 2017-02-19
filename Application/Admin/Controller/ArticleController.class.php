<?php
/**
 * Created by PhpStorm.
 * User: arron
 * Date: 2017/2/15
 * Time: 14:44
 */
namespace Admin\Controller;
use Component\AdminController;
class ArticleController extends AdminController
{

    public function add()
    {
      if(!empty($_POST))
      {
        $cate=D('cms_content');
        $cate->create();
        $z=$cate->add();
        if($z)
        {
            echo "添加文章成功！";
        }else{
            echo "添加文章失败！";
        }

      }else{
          //栏目信息
          $posttime=date("Y-m-d H:i:s");
          $cinfo=$this->getRoleInfo();
          $this->assign('cinfo',$cinfo);
          $this->assign('posttime',$posttime);

          $this->display();
      }

    }

    public function articleshow()
    {
        $id=$_GET['id'];
        $article=D('cms_content');
        $data=$article->where("id= $id ")->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function showlist()
    {

        $con=D('cms_content');
        //1.获取当前记录总数
        $total=$con->count();
        $per=12;
        //2.实例化分类页对象
        $page=new \Component\Page($total,$per);
        //3.拼装sql语句获得每页信息
        $sql=" select * from cms_content ".$page->limit;
        $info=$con->query($sql);
        //4.获得页码列表
        $pagelist =$page->fpage();

        $rinfo=$this->getRoleInfo();
        $this->assign('info',$info);
        $this->assign('pagelist',$pagelist);
        $this->assign('rinfo',$rinfo);
        $this->display();
    }
    public function del()
    {
        $id=$_GET['id'];
        $cate=D('cms_content');
        $z=$cate-> where("id = $id ")->delete();
        if($z)
        {
            echo "删除成功！";
        }else{
            echo "删除失败！";
        }
    }
    public function upd($id)
    {

        if(!empty($_POST))
        {
            // print_r($_POST);
            $con=D('cms_content');
            $con->create();
            $z=$con->save();
            if($z)
            {
                echo "修改文章成功！";

            }else{
                echo "修改文章失败！";

            }
        }else{

            //获得被修改文章的信息
            $info=D('cms_content')->find($id);
            $this->assign('info',$info);

            $cinfo=$this->getRoleInfo();
            $this->assign('cinfo',$cinfo);
            $posttime=date("Y-m-d H:i:s");
            $this->assign('id',$id);
            $this->assign('posttime',$posttime);
            $this->assign('cid',$info['cid']);
            $this->display();
        }

    }

    public function getRoleInfo()
    {
        //查询全部的角色信息
        $rrinfo=D('cms_category')->select();//二维数组信息
        $rinfo=array();
        foreach ($rrinfo as $k => $v )
        {
            $rinfo[$v['cid']]=$v['name'];
        }
        return $rinfo;
    }

    public function cateshow()
    {
        $info=D('cms_category')->select();
        //查询全部的角色信息
        $rrinfo=D('cms_category')->select();//二维数组信息
        $rinfo=array();
        foreach ($rrinfo as $k => $v )
        {
            $rinfo[$v['pid']]=$v['pname'];
        }
        //var_dump($rinfo);
        $this->assign('rinfo',$rinfo);
        $this->assign('info',$info);
        $this->display();

    }

    public function cateadd()
    {


        if(!empty($_POST))
        {
            $cate=D('cms_category');
            $cate->create();
            $z=$cate->add();
            if($z)
            {
                echo "添加栏目成功！";
            }else{
                echo "添加栏目失败！";
            }
        }else{
            //查询全部的角色信息
            $rrinfo=D('cms_category')->select();//二维数组信息
            $pinfo=array();
            foreach ($rrinfo as $k => $v )
            {
                $pinfo[$v['pid']]=$v['pname'];
            }
            //var_dump($pinfo);

            $this->assign('pinfo',$pinfo);
            $this->display();

        }

    }
    public function catedel()
    {
         $cid=$_GET['cid'];
         $cate=D('cms_category');
         $z=$cate-> where("cid = $cid ")->delete();
         if($z)
         {
             echo "删除成功！";
         }else{
             echo "删除失败！";
         }

    }
    public function cateupd($cid)
    {

        if(!empty($_POST))
        {
            // print_r($_POST);
            $cate=D('cms_category');
            $cate->create();
            $z=$cate->save();
            if($z)
            {
                echo "修改栏目成功！";

            }else{
                echo "修改栏目失败！";

            }
        }else{

            //获得被修改管理员的信息
            $info=D('cms_category')->find($cid);
            $this->assign('info',$info);

            //查询全部的角色信息
            $rrinfo=D('cms_category')->select();//二维数组信息
            $rinfo=array();
            foreach ($rrinfo as $k => $v )
            {
                $rinfo[$v['pid']]=$v['pname'];
            }

            $this->assign('rinfo',$rinfo);
            $this->assign('cid',$cid);
            $this->assign('pid',$info['pid']);
            $this->display();
        }

    }


    public function comment()
    {

    }

}