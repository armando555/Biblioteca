<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<h1 class="text-primary ">Suma de dos Numeros</h1>
<?php $formulario=ActiveForm::begin();?>

<?= $formulario->field($model,'valor1')?>
<?= $formulario->field($model,'valor2')?>

<div class="form-group">
    <?=Html::submitButton('Enviar',['class'=>'btn btn-primary'])?>
</div>
<?php ActiveForm::end();?>
<h2 class="text-info">Valor de la suma:</h2>
<?php
    if($mensaje){
        echo Html::tag('div',Html::encode($mensaje),['class'=>'alert alert-success']);
    }
?>