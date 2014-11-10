<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Applicant extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function getId($id) {
		$values = "";
		$str = substr('00000000' . $id, -6);
		$targetArray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$rand = array_rand($targetArray, 6);

		foreach ($rand as $key => $value) {
		    $values .= $targetArray[$value];
		}

		$getApp = Applicant::find($id);
		$appDteCreated = date('Ymd', strtotime($getApp->created_at));

		return $appDteCreated . $values . $str;
	}

	public static function registerApplicant($data) {
		
		//rules
		$rules = array(
			'positiondesired_1' => 'required|alpha_space_dash',
			'positiondesired_2' => 'alpha_space_dash',
		 	'expectedsalary' => 'required|numeric',
		 	'cemployed' => 'required',
		 	'lastname' => 'required|alpha_space',
		 	'firstname' => 'required|alpha_space',
		 	'middle' => 'required|alpha_space',
		 	'hometel' => 'numeric_dash|min:7',
		 	'mobiletel' => 'required|numeric|digits:11',
		 	'address' => 'required',
		 	'religion' => 'alpha_space',
		 	'civilstatus' => 'required|alpha_space',
		 	'email' => 'required|email',
		 	'dateofbirth' => 'required|before:1/1/1997',
		 	'placeofbirth' => 'required',
		 	'sss' => 'required|alpha_dash',
		 	'tin' => 'required|numeric',
		// 	'hsname' => 'required',
		// 	'hseductitle' => 'required',
		// 	'hsschooladdress' => 'required',
		// 	'hsdateattended' => 'required',
		// 	'hsgraduate' => 'required',
		// 	'nme1' => 'required',
		// 	'rel1' => 'required',
		// 	'addcon1' => 'required',
		// 	'famname1' => 'required',
		// 	'state[1]' => 'required',
		// 	'reason_2' => 'required',
		// 	'cemployer' => 'required',
		// 	'position' => 'required',
		// 	'incdates' => 'required',
		// 	'bsalarymonth' => 'required',
		// 	'employeraddress_1' => 'required',
		// 	'cashcompensation_1' => 'required',
		// 	'famrel1' => 'required',
		// 	'famsch1' => 'required',
		// 	'fampos1' => 'required',
		// 	'famphn1' => 'required',
		// 	'chkbx[1]' => 'required',
		// 	'rsn' => 'required',
		// 	'chkbx_2[1]' => 'required',
		// 	'rsn_2' => 'required',
		// 	'pemployer_1' => 'required',
		// 	'pempposition' => 'required',
		// 	'pempincdates' => 'required',
		// 	'pempbsalarymonth' => 'required',
		// 	'supervisor' => 'required',
		// 	'phonenumber' => 'required',
		// 	'pempemployeraddress' => 'required',
		// 	'pempcashcompensation' => 'required',
		// 	'pemployer_2' => 'required',
		// 	'pempposition_2' => 'required',
		// 	'pempincdates_2' => 'required',
		// 	'pempbsalarymonth_2' => 'required',
		// 	'supervisor_2' => 'required',
		// 	'phonenumber_2' => 'required',
		// 	'pempemployeraddress_2' => 'required',
		// 	'pempcashcompensation_2' => 'required'
		);
		

		//CUSTOM ERROR MESSAGES START...
		include('Validations/custom_error_messages.php');
		//CUSTOM ERROR MESSAGES END...

		//create validation instance
		$validation = Validator::make($data, $rules, $messages);

		// //check if validation successful
		if($validation->fails()) {

			$messages = $validation->messages();

			return Redirect::back()
				->withErrors($validation)->withInput();
		} else {
			$applicant = new Applicant;
			$applicant->positiondesired_1 = $data['positiondesired_1'];
			$applicant->expectedsalary = $data['expectedsalary'];
			$applicant->cemployed_1 = $data['cemployed'];
			$applicant->positiondesired_2 = $data['positiondesired_2'];
			$applicant->previouslyApp_1 = $data['previouslyApp'];

			if ( Input::get('stateDate') == "" ) { 
				$applicant->stateDate = ""; 
			} else { 
				$applicant->stateDate = $data['stateDate']; 
			}

			$applicant->nprequired = $data['nprequired'];
			$applicant->source = $data['source'];
			$applicant->referred = $data['referred'];
			$applicant->lastname = $data['lastname'];
			$applicant->firstname = $data['firstname'];
			$applicant->middle = $data['middle'];
			$applicant->nickname = $data['nickname'];
			$applicant->hometel = $data['hometel'];
			$applicant->mobiletel = $data['mobiletel'];
			$applicant->address = $data['address'];
			$applicant->religion = $data['religion'];
			$applicant->gender = $data['gender'];
			$applicant->civilstatus = $data['civilstatus'];
			$applicant->email = $data['email'];
			$applicant->dateofbirth = $data['dateofbirth'];
			$applicant->age = $data['age'];
			$applicant->placeofbirth = $data['placeofbirth'];
			$applicant->sss = $data['sss'];
			$applicant->tin = $data['tin'];
			// $applicant->hsname = $data['hsname'];
			// $applicant->hseductitle = $data['hseductitle'];
			// $applicant->hsschooladdress = $data['hsschooladdress'];
			// $applicant->hsdateattended = $data['hsdateattended'];
			// $applicant->hsgraduate = $data['hsgraduate'];
			// $applicant->nme1 = $data['nme1'];
			// $applicant->rel1 = $data['rel1'];
			// $applicant->addcon1 = $data['addcon1'];
			// $applicant->famname1 = $data['famname1'];
			// $applicant->state_1 = Input::get('state[1]');
			// $applicant->reason_2 = $data['reason_2'];
			// $applicant->cemployer = $data['cemployer'];
			// $applicant->position = $data['position'];
			// $applicant->incdates = $data['incdates'];
			// $applicant->bsalarymonth = $data['bsalarymonth'];
			// $applicant->employeraddress_1 = $data['employeraddress_1'];
			// $applicant->cashcompensation_1 = $data['cashcompensation_1'];
			// $applicant->famrel1 = $data['famrel1'];
			// $applicant->famsch1 = $data['famsch1'];
			// $applicant->fampos1 = $data['fampos1'];
			// $applicant->famphn1 = $data['famphn1'];
			// $applicant->chkbx_1 = Input::get('chkbx[1]');
			// $applicant->rsn = $data['rsn'];
			// $applicant->chkbx_2_1 = Input::get('chkbx_2[1]');
			// $applicant->rsn_2 = $data['rsn_2'];
			// $applicant->pemployer_1 = $data['pemployer_1'];
			// $applicant->pempposition = $data['pempposition'];
			// $applicant->pempincdates = $data['pempincdates'];
			// $applicant->pempbsalarymonth = $data['pempbsalarymonth'];
			// $applicant->supervisor = $data['supervisor'];
			// $applicant->phonenumber = $data['phonenumber'];
			// $applicant->pempemployeraddress = $data['pempemployeraddress'];
			// $applicant->pempcashcompensation = $data['pempcashcompensation'];
			// $applicant->pemployer_2 = $data['pemployer_2'];
			// $applicant->pempposition_2 = $data['pempposition_2'];
			// $applicant->pempincdates_2 = $data['pempincdates_2'];
			// $applicant->pempbsalarymonth_2 = $data['pempbsalarymonth_2'];
			// $applicant->supervisor_2 = $data['supervisor_2'];
			// $applicant->phonenumber_2 = $data['phonenumber_2'];
			// $applicant->pempemployeraddress_2 = $data['pempemployeraddress_2'];
			// $applicant->pempcashcompensation_2 = $data['pempcashcompensation_2'];

			$applicant->save();
			//Get Applicant id
			$applicant_id = $applicant->id;
			$dateOfApplication = $applicant->created_at;
			//Search Applicant by id
			$updateApplicant = Applicant::find($applicant_id);
			//Update Applicants applicant_id..
			//Insert date of application..
			$updateApplicant->applicant_id = Applicant::getId($applicant_id);
			$updateApplicant->dateofapplication = date('m/d/Y', strtotime($dateOfApplication));
			$updateApplicant->save();
		
			var_dump(Applicant::getId($applicant_id));
			var_dump($data['positiondesired_1']);
			var_dump($data['expectedsalary']);
			var_dump($data['cemployed']);
			var_dump($data['positiondesired_2']);
			var_dump($data['previouslyApp']);
			var_dump($data['placeofbirth']);
			var_dump($data['sss']);
			var_dump($data['tin']);

		}
	}
}