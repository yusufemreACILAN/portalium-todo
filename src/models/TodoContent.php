<?php

namespace portalium\todo\models;

use Yii;

/**
 * This is the model class for table "todo_content".
 *
 * @property int $id_todo
 * @property string $content
 * @property string $time
 * @property int $id_category
 * @property int $is_done
 */
class TodoContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'id_category'], 'required'],
            [['time'], 'safe'],
            [['id_category', 'is_done'], 'integer'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_todo' => 'Id Todo',
            'content' => 'Content',
            'time' => 'Time',
            'id_category' => 'Id Category',
            'is_done' => 'Is Done',
        ];
    }
}
