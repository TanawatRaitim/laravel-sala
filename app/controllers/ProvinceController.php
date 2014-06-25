<?php

class ProvinceController extends BaseController {
	
	protected $layout = 'template.test';

	public function getProvinces()
	{
		
		//$provinces = Province::all();
		$provinces = Province::paginate(20);
		
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
	
	public function getProvinceCreate() 	//province-create-get
	{
		
		// $provinces = Province::lists('name', 'id');
		
		$geography = Geography::lists('name','id');
		
		return View::make('province.create', array('geography'=>$geography));
	}
	
	public function postProvinceCreate()
	{
		$rules = array(
			'code'=>'required|min:3|max:3',
			'name'=>'required|min:5',
			'geo'=>'min:0'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()){
			return Redirect::route('province-create-post')->withErrors($validator);
		}
		
		$province = new Province;
		$province->code = Input::get('code');
		$province->name = Input::get('name');
		$province->geo_id = Input::get('geo');
		
		$province->save();
		
		// return province and global message
		return Redirect::route('provinces')->with('message','เพิ่มรายชื่อจังหวัดเรียบร้อยแล้วจ้ะ');
		
	}
	

}
