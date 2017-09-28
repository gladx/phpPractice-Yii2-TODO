<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Todo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="todo-form col-md-6">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= '';//$form->field($model, 'priority')->textInput() ?>
    <?= $form->field($model, 'priority')->radioList([3=> 'Normal', 2=> 'High',1=> 'Important']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_at')
        ->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => date('Y-m-d')], 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model,'done_at')
        ->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => date('Y-m-d')], 'dateFormat' => 'yyyy-MM-dd']) ?>
    
    <?= $form->field($model, 'expired_at')
        ->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => date('Y-m-d')], 'dateFormat' => 'yyyy-MM-dd']) ?>
        
    <?= $form->field($model, 'remind_at')
        ->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => date('Y-m-d')], 'dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'color')->radioList(
        ["white"=> "White", "#4F84C4"=> 'Marina', "#EDCDC2"=> 'Pale Dogwood',"#88B04B"=> 'Greenery', "#D8AE47"=> "Spicy Mustard", "#DFCFBE"=> "Sand Dollar","#F7786B"=> "Peach Echo"],
        [
            'item' => function($index, $label, $name, $checked, $value) {

                $return = '<label class="modal-radio">';
                if($checked ) $return .= '<input checked  type="radio" name="' . $name . '"value="' . $value . '" tabindex="3">';
                else  $return .= '<input  type="radio" name="' . $name . '"value="' . $value . '" tabindex="3">';
                $return .= '<i ></i>';
                $return .= '<span style="background: '. $value .'">'.  ucwords($label) . '</span>';
                $return .= '</label>';

                return $return;
            }
        ]
    ) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
