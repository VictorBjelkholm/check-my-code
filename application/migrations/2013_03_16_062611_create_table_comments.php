<?php

class Create_Table_Comments {    

	public function up()
    {
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('code_id');
			$table->text('body');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('comments');
    }

}