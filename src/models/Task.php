<?php

namespace portalium\todo\models;

use Yii;
use portalium\todo\Module;

/**
 * This is the model class for table "todo_content".
 *
 * @property int $id_todo
 * @property string $title
 * @property string $time
 * @property int $is_done
 */
class Task extends \yii\db\ActiveRecord
{
    const STATUS = [
        'passive' => 0,
        'active' => 1
    ];

    public static function getStatusList()
    {
        //return value and label
        return [
            self::STATUS['passive'] => Module::t('Passive'),
            self::STATUS['active'] => Module::t('Active')
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return Module::$tablePrefix . "task";
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_task'], 'required'],
            [['date_create'], 'safe'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_task' => 'Id Task',
            'title' => 'Title',         //text ismini değiştir title koy.
            'date_create' => 'Date Create',
            'status' => 'Status',
        ];
    }
}
