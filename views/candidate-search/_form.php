<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidateSearchForm */
/* @var $form ActiveForm */
?>
<div class="candidate-search-_form">


            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>

            <?php
            $grad = ['fall 2018', 'spring 2019'];
            echo $form->field($model, 'field')->dropDownList($fields);
            echo $form->field($model, 'gradSemester')->dropDownList($grad);
            $club = ['N/A', 'Active'];
            echo $form->field($model, 'club')->dropDownList([
                0 => 'N/A',
                1 => 'Active',

            ]);
            echo $form->field($model, 'minReferences')->dropDownList([
                0 => 'N/A',
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',

            ]);
            ?>







    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- candidate-search-_form -->
