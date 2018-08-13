<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property string $id
 * @property string $fName
 * @property string $lName
 * @property string $phone
 * @property string $email
 * @property string $experience
 * @property string $techSkills
 * @property string $projects
 * @property string $field
 */
class Resume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fName', 'lName', 'phone', 'email', 'experience', 'techSkills', 'projects', 'field'], 'required'],
            [['fName', 'lName', 'phone'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 80],
            [['experience', 'techSkills', 'projects'], 'string', 'max' => 2000],
            [['field'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fName' => 'First Name',
            'lName' => 'Last Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'experience' => 'Experience',
            'techSkills' => 'Tech Skills',
            'projects' => 'Projects',
            'field' => 'Field',
        ];
    }
}
