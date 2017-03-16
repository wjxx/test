<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Resumes controller
 */
class ResumesController extends Controller
{
	//简历管理
	public function actionResumesmanage()
    {
        return $this->renderPartial('resumes_manage');
    }
   
}


?>