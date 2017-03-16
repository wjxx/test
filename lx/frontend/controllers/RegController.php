<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Reg controller
 */
class RegController extends Controller
{
	//注册
    public function actionReg()
    {
        return $this->renderPartial('register');
    }
    
}


?>