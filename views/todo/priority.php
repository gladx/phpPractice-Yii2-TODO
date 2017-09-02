<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helper\BaseHtml;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Todo */

$this->title = 'Priority';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Todos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-priority">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="customer-form">
    <?php 

        echo Html::dropDownList(
            'priority-dropdown',
            'dd',
            [
                '1' => 'High',
                '2' => 'Normal',
                '3' => 'Low',
            ],
            ['class' => 'dropdown', 'id' => 'priority-dropdown']
        );

    ?>

    </div>



    <div class="priority-table col-md-6">
        <table class="table table-bordered table-striped">
            <thead><tr><th> Title</th></tr></thead>
            <tbody>
                <?php
                foreach ($list as $item) {
                    echo "<tr><td>", $item['title'], "</td></tr>";
                }
                ?>
            <tbody>
        </table>
    </div>

</div>
<?php 
$url = Url::to('todo/priority', true);
$this->registerJs( <<< EOT_JS

    $(document).on('change', '#priority-dropdown', function(ev) {

        // $('#detail').hide(); 
                
        var Id = $(this).val();    
        
        $.get(
            '{$url}',
            { 'id' : Id },
            function(data) {
                // $.(html) = data;
                $("html").html(data);
                //data = '<option value="">--- choose</option>'+data;
                //$('#reservation-id').html(data);
            }
        )
        ev.preventDefault();
    });

EOT_JS
);

?>
