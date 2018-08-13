<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\LinkPager;
?>
<h1>Candidate Quick Search</h1>

<p>
    select all filters and hit submit
</p>
<div class="row">
    <div class="col-lg-2">
        <?php echo $this->render(
                '_form', ['model'=>$model, 'fields'=>$fields])?>
    </div>
    <div class="col-lg-10 border border-primary">
        <?php echo ListView::widget([
            'dataProvider' => $dataProvider,

            'itemOptions' => ['class' => 'item'],
            'layout' => '{items}{pager}{summary}',
            'layout' => "{summary}\n{items}\n<div class='col-lg-12'>{pager}</div>",
            'itemView' => function ($model, $key, $index, $widget) {
                return '<div class="col-lg-3 well" style="padding: 10px;">
                            <p>'.Html::a(Html::encode('Download'), ['download', 'id' => $model->id, ]).'</p>
                            
                            <p>'.$model['fName'].'</p>
                            <div class="pre-scrollable">
                            <p>'.$model['experience'].'</p>
                        </div>                
                            <a href="http://localhost/yii2shared/web/candidate-search/download" class="btn btn-primary" role="button">Download</a>
                        </div>';
            },

            'pager' => [
                'firstPageLabel' => 'first',
                'lastPageLabel' => 'last',
                'nextPageLabel' => '>>',
                'prevPageLabel' => '<<',
                'maxButtonCount' => 5,
            ],
        ]);
        ?>
    </div>
</div>

