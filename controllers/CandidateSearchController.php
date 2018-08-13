<?php

namespace app\controllers;

use app\models\CandidateSearchForm;
use Yii;
use yii\data\Pagination;
use app\models\Resume;
use app\models\Fields;
use app\models\User;
use app\models\ResumeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class CandidateSearchController extends \yii\web\Controller
{
    public function actionDownload($id)
    {
       return Yii::$app->response->sendFile('resumes/'.$id.'.pdf');
    }



    public function actionIndex()
    {

        $model = new CandidateSearchForm();
        $resumeModel = new ResumeSearch();
        $dataProvider = $resumeModel->search(Yii::$app->request->queryParams);

        $fields=Fields::find()->all();
        $fieldsArray=ArrayHelper::map($fields,'field', 'field');

        return $this->render('index', [
            'model' => $model,
            'fields' => $fieldsArray,
            'resumeModel' => $resumeModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
