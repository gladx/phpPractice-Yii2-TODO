<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<div class="todo-view">
<div class="panel panel-default col-md-3" style="padding:0px;">
  <div class="panel-heading" style="background-color: <?= $model->color?>">
    <h3 class="panel-title"><?= $model->title ?>
        <span style="float:right">
            <span class="glyphicon glyphicon-th-list" onclick="optionShow(this)"> </span>
            <span id="option" style="display:none; background: white;">
                <?= Html::a('<span style="color:red" class="glyphicon glyphicon-trash" aria-hidden="true"></span>', ['delete', 'id' => $model->id], [
                    'class' => 'btn',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
                <?= Html::a('<span style="color:black" class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['update', 'id' => $model->id], ['class' => 'btn']) ?>
            </span>
         </span
    </h3>
  </div>
  <div class="panel-body">
     <?= \yii\helpers\Html::encode($model->detail) ?>
  </div>
</div>
</div>