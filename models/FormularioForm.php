<?php
namespace app\models;


use yii\base\Model;
class FormularioForm extends Model
{
    public $valor1;
    public $valor2;
    public function rules(){
        return[
            [['valor1','valor2'],'required'],
            ['valor1','number'],['valor2','number']
        ];
    }
}

?>