<?php

namespace portalium\todo;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'todo/default',
                ''
            ]
        ],
    ];
    public static $tablePrefix = 'todo_';
    public static function moduleInit()
    {

        self::registerTranslation('todo','@portalium/todo/messages',[
            'todo' => 'todo.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('todo', $message, $params);
    }
}