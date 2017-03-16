<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Work controller
 */
class WorkController extends Controller
{
	//公司首页
	public function actionSearch()
    {
        return $this->renderPartial('work_search');
    }
    
	//职位详情页
    public function actionDeliver()
    {
        return $this->renderPartial('work_deliver');
    }
    //标签
     public function actionTag()
    {
        return $this->renderPartial('company_tag');
    }
    //创始团队
     public function actionFounder()
    {
        return $this->renderPartial('company_founder');
    }
    //公司产品
     public function actionProduct()
    {
        return $this->renderPartial('company_product');
    }
    //公司介绍
     public function actionIntroduce()
    {
        return $this->renderPartial('company_introduce');
    }
    //公司信息填写完成
     public function actionSuccess()
    {
        return $this->renderPartial('company_success');
    }
    //前台企业中心
      public function actionHome()
    {
        return $this->renderPartial('company_home');
    }
     //订阅职位添加
    public function actionSubscribecre()
    {
        return $this->renderPartial('subscribe_cre');
    }
}


?>