<?php

class Member extends Eloquent {
	
	public function personalize()
	{
		return $this->hasOne('Personalize');
	}
	
	public function history()
	{
		return $this->hasMany('History');
	}

}