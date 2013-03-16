<?php

class Create_Table_Codes {    

	public function up()
    {
		Schema::create('codes', function($table) {
			$table->increments('id');
			$table->text('content');
			$table->integer('author_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('codes');

    }

}