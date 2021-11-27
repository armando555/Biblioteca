<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\Controller;
use app\models\FormularioForm;

class SitioController extends Controller{
    public function actionIndex(){
        $model = new FormularioForm;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            //REQUIERE PONER TODO ESO EN APRENTESIS PARA PODER HACER LA SUMA CON CASTEO
            $suma = ((int)$model->valor1+(int)$model->valor2);
            $valorT = ("El resultado es: ".$suma);
            return $this->render('index',['model'=>$model,'mensaje'=>$valorT]);
        }
        return $this->render('index',['model'=>$model,'mensaje'=>"0"]);
    } 
}


?>

