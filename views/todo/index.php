<?php

use yii\helpers\Html;
use \yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TodoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Todos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-index">
    <p>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{items}{pager}',
            'itemOptions' => ['class' => 'item'],
            'itemView' => '_view'
        ]) ?>
</div>

<script>
    function optionShow(element){
        element.nextElementSibling.style.display= "unset";
        //document.getElementById('option').innerHtml = "a";
        console.log(element);
    }
</script>