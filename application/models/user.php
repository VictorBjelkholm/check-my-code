<?php

class User extends Eloquent 
{
	public function codes() {
		return $this->has_many('Code', 'author_id');
	}

	public function comments() {
		return $this->has_many('Comment', 'author_id');
	}
}