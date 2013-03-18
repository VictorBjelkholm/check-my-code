<?php

class User extends Eloquent 
{
	public function codes() {
		return $this->has_many('Code');
	}

	public function comments() {
		return $this->has_many('Comment');
	}
}