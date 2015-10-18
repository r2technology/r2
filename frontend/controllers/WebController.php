<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class WebController extends Controller
{
    public function actionIndex()
    {
        $this->layout="main-web";
        return $this->render('index');
    }
    
    public function actionContact()
    {
        var_dump($_POST);
        return "";
    }

}
