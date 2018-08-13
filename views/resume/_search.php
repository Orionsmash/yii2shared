<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ResumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-search" style="border-color: darkblue; border: solid; padding: 10px;">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'field')->dropDownList($fieldsArray); ?>
    <div style="border: solid; border-color: darkblue; ">
    <?= "
        <input type=\"radio\" name=\"activeClub\" value=\"noClub\"> N/A<br>
        <input type=\"radio\" name=\"activeClub\" value=\"club\"> Active in Club<br>
        
    " ?>
    </div>

    <div class="dropdown">
        <select class="form-control">
            <option value="one" class="dropdown-header">Active Student</option>
            <option value="one">Freshman</option>
            <option value="one">Sophmore</option>
            <option value="one">Junior</option>
            <option value="one">Senior</option>
            <option value="one" class="divider"></option>
            <option value="one" class="dropdown-header">Graduation term/year</option>
            <option value="one">Fall 2018</option>
            <option value="one">Spring 2019</option>
            <option value="one">Summer 2019</option>
            <option value="one">Fall 2019</option>
        </select>
    </div>


    <div class="form-group" style="padding-top: 10px;">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
