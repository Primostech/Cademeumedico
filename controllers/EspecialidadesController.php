<?php

namespace app\controllers;

class EspecialidadesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model= new especialidades();
        
        return $this->render('index');
    }

}
