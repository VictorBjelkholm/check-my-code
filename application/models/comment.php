<?php

class Comment extends Eloquent
{
	public function user() {
		return $this->belongs_to('User');
	}

	public function code() {
		return $this->belongs_to('Code');
	}
}