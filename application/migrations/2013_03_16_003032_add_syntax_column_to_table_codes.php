<?php

class Add_Syntax_Column_To_Table_Codes {    

	public function up()
    {
		Schema::table('codes', function($table) {
			$table->string('syntax');
	});

    }    

	public function down()
    {
		Schema::table('codes', function($table) {
			$table->drop_column('syntax');
	});

    }

}