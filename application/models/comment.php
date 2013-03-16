<?php

class Comment extends Eloquent
{
	public function users() {
		$this->belongs_to('Users', 'author_id');
	}

	public function codes() {
		$this->belongs_to('Codes', 'code_id');
	}
}