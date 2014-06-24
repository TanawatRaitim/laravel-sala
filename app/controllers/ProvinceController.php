<?php

class ProvinceController extends BaseController {

	public function getProvinces()
	{
		
		$provinces = Province::all();
		$members = Member::all();
		// return 'Route2';
		
		/*
		return View::make('provinces')
				->with('provinces',$provinces)
				->with('members',$members);
		 * 
		 * 
		 */
		 
		 return View::make('provinces', array(
		 			'provinces'=>$provinces,
		 			'members'=>$members
		 
		 ));
		 
		 
	}
	
	public function showProvince($id)
	{
		return $id;
	}
	

}
