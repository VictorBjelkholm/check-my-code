<?php

class Add_Column_Slug {    

	public function up()
    {
		Schema::table('codes', function($table) {
			$table->string('slug');
	});

    }    

	public function down()
    {
		Schema::table('codes', function($table) {
			$table->drop_column('slug');
	});

    }

}