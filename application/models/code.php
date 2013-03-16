<?php

class Code extends Eloquent 
{
	public function users() {
		return $this->belongs_to('User', 'author_id');
	}

	public function comments() {
		return $this->has_many('Comments', 'code_id');
	}
}