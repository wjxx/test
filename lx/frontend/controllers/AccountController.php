<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Account controller
 */
class AccountController extends Controller
{
	//账号绑定
	public function actionAccountbind()
    {
        return $this->renderPartial('accountBind');
    }
    //修改密码
	public function actionUpdatepwd()
    {
        return $this->renderPartial('updatePwd');
    }
    //绑定1
    public function actionBindstep1()
    {
        return $this->renderPartial('bindstep1');
    }
     //绑定2
    public function actionBindstep2()
    {
        return $this->renderPartial('bindstep2');
    }
     //绑定3
    public function actionBindstep3()
    {
        return $this->renderPartial('bindstep3');
    }
   
}


?>