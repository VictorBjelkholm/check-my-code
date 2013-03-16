<?php

class Comment extends Eloquent
{
	public function user() {
		$this->belongs_to('User', 'author_id');
	}

	public function code() {
		$this->belongs_to('Code', 'code_id');
	}
}