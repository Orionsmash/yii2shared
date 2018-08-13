<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 8/6/2018
 * Time: 9:31 AM
 */

namespace app\models;

use yii\base\Model;

class CandidateSearchForm extends Model
{
    public $field;
    public $club;
    public $gradSemester;
    public $minReferences;

    public function attributeLabels()
    {
        return [
            'field' => 'Field',
            'club' => 'Active in Club',
            'gradSemester' => 'Graduation Semester',
            'minReferences' => 'Minimum Number of References',
        ];
    }
}