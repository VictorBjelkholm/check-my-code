<?php

class Create_Dummy_Data {

	public function up() {
		DB::table( 'users' )->insert( array(
				'name' => 'Victor Bjelkholm',
				'username' => 'victorbjelkholm',
				'password' => Hash::make( 'test' ),
				'email' => 'victorbjelkholm@gmail.com',
				'bio' => 'This is my bio.',
				'created_at' => '2013-03-16 21:31:30',
				'updated_at' => '2013-03-16 21:31:30'
			) );
		DB::table( 'users' )->insert( array(
				'name' => 'Lars Bergqvist',
				'username' => 'lasse',
				'password' => Hash::make( 'test' ),
				'email' => 'larsbergqvist@gmail.com',
				'bio' => 'My name is Lars and I love coding.',
				'created_at' => '2013-03-16 21:31:30',
				'updated_at' => '2013-03-16 21:31:30'
			) );
		DB::table( 'codes' )->insert( array(
				'title' => 'Testar Snippets',
				'slug' => 'testar-snippets',
				'syntax' => 'php',
				'user_id' => '1',
				'content' => 'Detta är bara ett simpelt test på hur en snippet kan se ut...',
				'created_at' => '2013-03-16 21:31:30',
				'updated_at' => '2013-03-16 21:31:30'
			) );
		DB::table( 'codes' )->insert( array(
				'title' => 'Lars egna snippet',
				'slug' => 'lars-egna-snippet',
				'syntax' => 'php',
				'user_id' => '2',
				'content' => 'Jag heter Lars och detta är min kod',
				'created_at' => '2013-03-16 21:31:30',
				'updated_at' => '2013-03-16 21:31:30'
			) );
		DB::table( 'comments' )->insert( array(
				'user_id' => '1',
				'code_id' => '1',
				'body' => 'Detta är en kommentar som jag testar om det fungerar.',
				'created_at' => '2013-03-16 21:31:30',
				'updated_at' => '2013-03-16 21:31:30'
			) );
		DB::table( 'comments' )->insert( array(
				'user_id' => '2',
				'code_id' => '1',
				'body' => 'Vilken fin kommentera du gjorde @victorbjelkholm, hoppas att du fortfarande mår bra!',
				'created_at' => '2013-03-16 21:32:30',
				'updated_at' => '2013-03-16 21:32:30'
			) );
	}

	public function down() {
	}

}
