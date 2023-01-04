<?php

namespace portalium\todo\models;

use Yii;
use portalium\todo\Module;

/**
 * This is the model class for table "todo_content".
 *
 * @property int $id_todo
 * @property string $text
 * @property string $time
 * @property int $is_done
 */
class Todo extends \yii\db\ActiveRecord
{
    const STATUS = [
        'passive' => 0,
        'active' => 1
    ];

    public static function getStatusList()
    {
        //return value and label
        return [
            'STATUS' => [
                self::STATUS['passive'] => Module::t('Passive'),
                self::STATUS['active'] => Module::t('Active')
            ]
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo_todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['time'], 'safe'],
            [['status'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_todo' => 'Id Todo',
            'text' => 'Text',
            'time' => 'Time',
            'status' => 'Status',
        ];
    }
}
