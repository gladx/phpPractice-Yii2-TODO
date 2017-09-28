<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<div class="todo-view">
<div class="panel panel-default col-md-3" style="padding:0px;">
  <div class="panel-heading" style="background-color: <?= $model->color?>">
    <h3 class="panel-title"><?= $model->title ?> </h3>
  </div>
  <div class="panel-body">
     <?= $model->detail ?>
  </div>
</div>
</div>
