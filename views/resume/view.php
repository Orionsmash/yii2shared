<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Resume */

$this->title = $model->fName;
$this->params['breadcrumbs'][] = ['label' => 'Candidate List', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Candidate Inspect';
?>
<div class="resume-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Download', ['download', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fName',
            'experience',
            'techSkills',
            'projects',
            'field',
        ],
    ]) ?>

</div>
