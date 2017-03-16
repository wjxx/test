<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Jobs controller
 */
class JobsController extends Controller
{
    //发布职位、添加职位
    public function actionCre()
    {
        return $this->renderPartial('jobs_cre');
    }
	//待定简历
    public function actionUndetermined()
    {
        return $this->renderPartial('jobs_undeterminedResumes');
    }
	//面试通知
    public function actionNotice()
    {
        return $this->renderPartial('jobs_noticeResumes');
    }
   //不合适简历
    public function actionRefuse()
    {
        return $this->renderPartial('jobs_refuseResumes');
    }
    //自动过滤简历
    public function actionAutofilter()
    {
    	return $this->renderPartial('jobs_autoFilterResumes');
    }
    //有效上线职位
     public function actionOnline()
    {
    	return $this->renderPartial('jobs_onlineprositionsResumes');
    }
    //已下线职位
    public function actionDownline()
    {
    	return $this->renderPartial('jobs_downlinepositionsResumes');
    }
     //预览展示
    public function actionPreview()
    {
        return $this->renderPartial('jobs_preview');
    }
}


?>