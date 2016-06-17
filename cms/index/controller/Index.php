<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	$this->assign('title', '标题');
        return $this->fetch();
    }
	public function app(){
		$this->assign('title', '标题');
        return $this->fetch();
	}
}
