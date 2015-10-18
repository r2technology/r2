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
        $this->layout="main-web";
        $model = new \app\models\Contact;
        
        if(Yii::$app->request->post()) {
            $post = Yii::$app->request->post();
            if($model->load($post) && $model->validate()) {
                if($model->save()) {
                    Yii::$app->session->setFlash('success', 'El Contacto ha sido guardado.');
                    $model->refresh();
                }
                else
                    Yii::$app->session->setFlash('error', 'Error al guardar el Contacto.');
            }
        }
        
        return $this->render('contact', [
            'model' => $model
        ]);
    }

}
