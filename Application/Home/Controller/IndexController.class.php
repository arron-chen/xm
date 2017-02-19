<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
        $art_data=D('cms_content')->where("cid=1")->order('posttime desc')->limit(6)->select();
        $art_data1=D('cms_content')->where("cid=2")->order('posttime desc')->limit(6)->select();
        $art_data2=D('cms_content')->where("cid=3")->order('posttime desc')->limit(6)->select();
        $art_data3=D('cms_content')->where("cid=4")->order('posttime desc')->limit(5)->select();
        $art_data4=D('cms_content')->where("cid=5")->order('posttime desc')->limit(5)->select();
        $this->assign('art_data',$art_data);
        $this->assign('art_data1',$art_data1);
        $this->assign('art_data2',$art_data2);
        $this->assign('art_data3',$art_data3);
        $this->assign('art_data4',$art_data4);
        $this->display();
    }

    public function aboutus()
    {
        $this->display();
    }

    public function platform()
    {
        $this->display();
    }
    public function article()
    {
        $id=$_GET['id'];

        //连表查询
        $data=D('cms_content as a')->join('cms_category as b on a.cid=b.cid')->where("id= $id ")->select();
        //var_dump($data);
        $this->assign('data',$data);
        $this->display();
    }

    public function article_list()
    {
        //查询栏目信息
        $cate=D('cms_category');
        $cate_data=$cate->select();
        //var_dump($cate_data);


        $cid=$_GET['cid'];

       // var_dump($data);

       //获得分类信息
        $cate_m=D('cms_category')->where("cid= $cid ")->select();
        //var_dump($cate_m);


        //分页
        $con=D('cms_content')->where("cid= $cid ");
        //1.获取当前记录总数
        $total=$con->count();
        //var_dump($total);
        $per=6;
        //2.实例化分类页对象
        $page=new \Component\Page($total,$per);
        //3.拼装sql语句获得每页信息
        $sql=" select * from cms_content WHERE cid= $cid ORDER BY posttime DESC  ".$page->limit;
        $data=$con->query($sql);
        //var_dump($info);
        //4.获得页码列表
        $pagelist =$page->fpage();



        $this->assign('pagelist',$pagelist);

        $this->assign('cate_data',$cate_data);
        $this->assign('cate_m',$cate_m);
        $this->assign('data',$data);
        $this->display();
    }

}