<?php

class Add_Title_To_Codes_Table {    

	public function up()
    {
		Schema::table('codes', function($table) {
			$table->string('title');
	});

    }    

	public function down()
    {
		Schema::table('codes', function($table) {
			$table->drop_column('title');
	});

    }

}