<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 7/29/2018
 * Time: 3:44 PM
 */
//$this->params['breadcrumbs'][] = ['label' => 'Candidate List', 'url' => ['index']];
//
//$this->params['breadcrumbs'][] = 'Download';
use yii\helpers\Html;
use yii\widgets\DetailView;
?>
<?= '<h1 style="color: darkblue">This is the Download Page</h1>
<h2 style="color: darkblue">This is the Download Page</h2>
<p style="color: darkblue; font-size: ">This is the Download Page</p>' ?>

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