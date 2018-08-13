<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 7/29/2018
 * Time: 12:14 PM
 */
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\DetailView;

$this->title = 'Candidate Search';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $testString ?>
<div class="resume-index">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
</div >

<div class="row">

    <div class="col-lg-2">
        <?php echo $this->render('_search', ['model' => $searchModel, 'fieldsArray' => $fieldsArray]); ?>
    </div>

    <div class="col-lg-8">
        <?= '<table class="table-bordered" style="background-color: #000099; color: whitesmoke;">
                            <tr>
                                <th style="width: 40px; text-align: center">ID</th>
                                <th style="width: 150px; text-align: center">Name</th>
                                <th style="width: 600px; text-align: left; padding: 10px">Experience</th>
                            </tr></table>'?>

        <?= ListView::widget([
            'dataProvider' => $dataProvider,

            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return '<table class="table-striped; table-bordered">
                            <tr class="table-bordered">
                                <td style="width: 40px; text-align: center">'.Html::a(Html::encode($model->id), ['view', 'fName' => $model->fName, 'lName' => $model->lName, 'id' => $model->id]).'</td>
                                <td style="width: 150px; text-align: center">'.$model['fName'].'</td>
                                <td style="width: fit-content; text-align: left; padding: 10px" >'.$model['experience'].'</td>
                            </tr>
                            </table>';

            },
//            'pager' => [
//                'class' => \yii\widgets\LinkPager::className(),
//                'pagination' => [
//                    'class' => \yii\data\Pagination::className(),
//                    'route' => 'new_controller_here',
//                ],
       ]);
        ?>
    </div>
    <div class="col-lg-2">

    </div>

</div>





