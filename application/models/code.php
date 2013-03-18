<?php

class Code extends Eloquent 
{
	public function user() {
		return $this->belongs_to('User');
	}

	public function comments() {
		return $this->has_many('Comment');
	}
}