<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function tryRegister($data) {
		//get all data
		//data to validate
		//rules
		$rules = array(
			'username' => 'required|unique:users,username|alpha_num',
			'password' => 'required|confirmed',
			'firstname' => 'required',
			'lastname' => 'required',
			'password_confirmation' => 'required'
		);

		//create validation instance
		$validation = Validator::make(Input::all(), $rules);

		//check if validation successful
		if($validation->fails()) {
			return Redirect::back()
				->withErrors($validation)->withInput();
			//return var_dump($validation->messages());
		} else {
			$user = new User;
			$user->username = $data['username'];
			$user->password = Hash::make($data['password']);
			$user->firstname = $data['firstname'];
			$user->lastname = $data['lastname'];

			$user->save();

			$users_username = $user->username;
			$user_name = $user->firstname ." ". $user->lastname;
			//if (Auditdate::select('date_created')->whereNull('date_created')->get()) {
			
			$audits = new Audit;
			$audits->history = " A new account was created. Username: " . $users_username .".";
			$audits->save();

			return Redirect::to('login');
			}
		}

	public static function validateLogin($data) {
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$validation =  Validator::make(Input::all(),$rules);

		if($validation->fails()) {
			$failed = $validation->failed();
			return  Redirect::to('login')->with('error_index', $failed)->withErrors($validation)->withInput();
		} else {
			$credentials = array(
			  'username' => Input::get('username'),
			  'password' => Input::get('password')
			);
			if (Auth::attempt($credentials)) {
					return Redirect::to('Mainpage');
			} else {
				return Redirect::to('login')
				->with('flash_error', 'Your username/password was incorrect.')
				->withInput();
			}
		}
	}

	public static function updateInfo($id, $data) {
		$applicant_information = Applicant::find($id);
		
		#Applicant Informations:
		$applicant_information->positiondesired_1 	= $data['positiondesired_1'];
		$applicant_information->expectedsalary 		= $data['expectedsalary'];
		$applicant_information->cemployed_1 		= $data['cemployed'];
		$applicant_information->positiondesired_2 	= $data['positiondesired_2'];
		$applicant_information->previouslyApp_1 	= $data['previouslyApp'];

		if ( Input::get('stateDate') == "" ) 
			{ $applicant_information->stateDate = ""; } 
		else {
			//Check first previouslyApp value. if value = no
			//empty column stateDate.
			if ($data['previouslyApp'] == 'No') {
				
			}
			else 
			{ $applicant->stateDate = $data['stateDate']; }
		}

		$applicant_information->nprequired = $data['nprequired'];
		$applicant_information->source = $data['source'];
		$applicant_information->referred = $data['referred'];

		// PERSONAL INFORMATION SECTION
		$applicant_information->lastname 		= $data['lastname'];
		$applicant_information->firstname 		= $data['firstname'];
		$applicant_information->middle 			= $data['middle'];
		$applicant_information->nickname 		= $data['nickname'];
		$applicant_information->hometel 		= $data['hometel'];
		$applicant_information->mobiletel 		= $data['mobiletel'];
		$applicant_information->address 		= $data['address'];
		$applicant_information->religion 		= $data['religion'];
		$applicant_information->gender 			= $data['gender'];
		$applicant_information->civilstatus 	= $data['civilstatus'];
		$applicant_information->email 			= $data['email'];
		$applicant_information->dateofbirth 	= $data['dateofbirth'];
		$applicant_information->age 			= $data['age'];
		$applicant_information->placeofbirth 	= $data['placeofbirth'];
		$applicant_information->sss 			= $data['sss'];
		$applicant_information->tin 			= $data['tin'];

		// EDUCATION INFORMATION SECTION
		$applicant_information->hsname 			= $data['hsname'];
		$applicant_information->hseductitle 	= $data['hseductitle'];
		$applicant_information->hsschooladdress = $data['hsschooladdress'];
		$applicant_information->hsdateattended 	= $data['hsdateattended'];
		$applicant_information->hsgraduate 		= $data['hsgraduate'];
		$applicant_information->collegename 	= $data['collegename'];
		$applicant_information->collegeeductitle 		= $data['collegeeductitle'];
		$applicant_information->collegeschooladdress 	= $data['collegeschooladdress'];
		$applicant_information->collegedateattended 	= $data['collegedateattended'];
		$applicant_information->collegegraduate 		= $data['collegegraduate'];
		$applicant_information->gradschoolname 			= $data['gradschoolname'];
		$applicant_information->gradeductitle 			= $data['gradeductitle'];
		$applicant_information->gradschooladdress 		= $data['gradschooladdress'];
		$applicant_information->graddateattended 		= $data['graddateattended'];
		$applicant_information->gradgraduate_1			= $data['gradgraduate_1'];

		#FAMILY INFORMATION SECTION
		$applicant_information->famname1 = $data['famname1'];
		$applicant_information->famname2 = $data['famname2'];
		$applicant_information->famname3 = $data['famname3'];
		$applicant_information->famname4 = $data['famname4'];
		$applicant_information->famname5 = $data['famname5'];

		$applicant_information->famrel1 = $data['famrel1'];
		$applicant_information->famrel2 = $data['famrel2'];
		$applicant_information->famrel3 = $data['famrel3'];
		$applicant_information->famrel4 = $data['famrel4'];
		$applicant_information->famrel5 = $data['famrel5'];

		$applicant_information->famsch1 = $data['famsch1'];
		$applicant_information->famsch2 = $data['famsch2'];
		$applicant_information->famsch3 = $data['famsch3'];
		$applicant_information->famsch4 = $data['famsch4'];
		$applicant_information->famsch5 = $data['famsch5'];

		$applicant_information->fampos1 = $data['fampos1'];
		$applicant_information->fampos2 = $data['fampos2'];
		$applicant_information->fampos3 = $data['fampos3'];
		$applicant_information->fampos4 = $data['fampos4'];
		$applicant_information->fampos5 = $data['fampos5'];

		$applicant_information->famphn1 = $data['famphn1'];
		$applicant_information->famphn2 = $data['famphn2'];
		$applicant_information->famphn3 = $data['famphn3'];
		$applicant_information->famphn4 = $data['famphn4'];
		$applicant_information->famphn5 = $data['famphn5'];
		
		$applicant_information->chkbx_1 = $data['chkbx'];
		if ( Input::get('rsn') == "" ) 
			{ $applicant_information->rsn = ""; } 
		else 
			{ $applicant_information->rsn = $data['rsn']; }

		$applicant_information->chkbx_2 = $data['chkbx_2'];
		if ( Input::get('rsn_2') == "" ) 
			{ $applicant_information->reason_2 = ""; } 
		else 
			{ $applicant_information->reason_2 = $data['rsn_2']; }

		#CHARACTER REFERENCE SECTION
		$applicant_information->nme1 = $data['nme1'];
		$applicant_information->nme2 = $data['nme2'];
		$applicant_information->nme3 = $data['nme3'];
		$applicant_information->rel1 = $data['rel1'];
		$applicant_information->rel2 = $data['rel2'];
		$applicant_information->rel3 = $data['rel3'];
		$applicant_information->addcon1 = $data['addcon1'];
		$applicant_information->addcon2 = $data['addcon2'];
		$applicant_information->addcon3 = $data['addcon3'];
		$applicant_information->state_1 = $data['state_1'];

		#EMPLOYMENT INFORMATION SECTION
		if ( Input::get('reason_2') == "" ) 
			{ $applicant_information->rsn_2 = ""; } 
		else 
			{ $applicant_information->rsn_2 = $data['reason_2']; }

		$applicant_information->cemployer 			= $data['cemployer'];
		$applicant_information->position 			= $data['position'];
		$applicant_information->incdates 			= $data['incdates'];
		$applicant_information->bsalarymonth 		= $data['bsalarymonth'];
		$applicant_information->employeraddress_1 	= $data['employeraddress_1'];
		$applicant_information->cashcompensation_1 	= $data['cashcompensation_1'];
		$applicant_information->pemployer_1			= $data['pemployer_1'];
		$applicant_information->pempposition 		= $data['pempposition'];
		$applicant_information->pempincdates 		= $data['pempincdates'];
		$applicant_information->pempbsalarymonth 	= $data['pempbsalarymonth'];
		$applicant_information->supervisor 			= $data['supervisor'];
		$applicant_information->phonenumber 		= $data['phonenumber'];
		$applicant_information->pempemployeraddress = $data['pempemployeraddress'];
		$applicant_information->pempcashcompensation 	= $data['pempcashcompensation'];
		$applicant_information->pemployer_2 			= $data['pemployer_2'];
		$applicant_information->pempposition_2 			= $data['pempposition_2'];
		$applicant_information->pempincdates_2 			= $data['pempincdates_2'];
		$applicant_information->pempbsalarymonth_2 		= $data['pempbsalarymonth_2'];
		$applicant_information->supervisor_2 			= $data['supervisor_2'];
		$applicant_information->phonenumber_2 			= $data['phonenumber_2'];
		$applicant_information->pempemployeraddress_2 	= $data['pempemployeraddress_2'];
		$applicant_information->pempcashcompensation_2 	= $data['pempcashcompensation_2'];
		$applicant_information->visited					= '1';

		$applicant_information->save();

		return Redirect::back();
	}
}
