<?php

class Province extends Eloquent {
	
	public $timestamps = false;
	
	
	public function geo()
	{
		return $this->hasOne('Geography','id');
	}
	
	
	
}