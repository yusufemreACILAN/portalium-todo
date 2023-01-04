<?php

use yii\db\Schema;
use yii\db\Migration;


class m211115_010203_todo extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(Module::$tablePrefix . "task",
            
            [
                'id_task'=> $this->primaryKey(),
                'text'=> $this->string(255)->notNull(),//required is notNull() label,name,slug,title,text
                'date_create'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                //'id_category'=> $this->integer(11)->notNull(),
                'status'=>$this ->boolean('required')


                
            ],$tableOptions
        );
        /*
        $this->createTable(
            '{{%todo_category}}',
        [
                'id_category'=> $this->primaryKey(),
                'name'=> $this->string(255)->notNull(),

        ],$tableOptions

        );
        */
       

    }
    public function safeDown()
    {
        $this->dropTable(Module::$tablePrefix . "task");
        // $this->dropTable('{{%todo_category}}');
    }
}
?>