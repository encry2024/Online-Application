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
		 	'hsname' => 'alpha_space_dash',
		 	'hseductitle' => 'alpha_space_dash',
		 	'hsdateattended' => 'date:m/d/Y',
		 	'hsgraduate' => 'date:m/d/Y',
			'collegename' => 'alpha_space_dash',
			'collegeeductitle' => 'alpha_space_dash',
			'collegedateattended' => 'date:m/d/Y',
			'collegegraduate' => 'date:m/d/Y',
			'gradschoolname' => 'alpha_space_dash',
			'gradeductitle' => 'alpha_space_dash',
			'graddateattended' => 'date:m/d/Y',
			'gradgraduate_1' => 'date:m/d/Y',
		 	'famname1' => 'required|alpha_space',
		 	'famname2' => 'alpha_space',
		 	'famname3' => 'alpha_space',
		 	'famname4' => 'alpha_space',
		 	'famname5' => 'alpha_space',
		 	'famsch1' => 'required|alpha_space',
		 	'famsch2' => 'alpha_space_dash',
		 	'famsch3' => 'alpha_space_dash',
		 	'famsch4' => 'alpha_space_dash',
		 	'famsch5' => 'alpha_space_dash',
		 	'famrel1' => 'required|alpha_space',
		 	'famrel2' => 'alpha_space',
		 	'famrel3' => 'alpha_space',
		 	'famrel4' => 'alpha_space',
		 	'famrel5' => 'alpha_space',
		 	'fampos1' => 'required|alpha_space',
		 	'fampos2' => 'alpha_space_dash',
		 	'fampos3' => 'alpha_space_dash',
		 	'fampos4' => 'alpha_space_dash',
		 	'fampos5' => 'alpha_space_dash',
		 	'famphn1' => 'required|numeric',
		 	'famphn2' => 'numeric',
		 	'famphn3' => 'numeric',
		 	'famphn4' => 'numeric',
		 	'famphn5' => 'numeric',
		 	'chkbx' => 'required',
		 	'chkbx_2' => 'required',
		 	'nme1' => 'alpha_space',
		 	'nme2' => 'alpha_space',
		 	'nme3' => 'alpha_space',
		 	'rel1' => 'alpha_space',
		 	'rel2' => 'alpha_space',
		 	'rel3' => 'alpha_space',
		 	'state_1' => 'required',
		 	'bsalarymonth' => 'numeric',
		 	'cashcompensation_1' => 'numeric',
		 	'pemployer_1' => 'alpha_space',
		 	'pempposition' => 'alpha_space_dash',
		 	'pempbsalarymonth' => 'numeric',
		 	'supervisor' => 'alpha_space',
		 	'phonenumber' => 'numeric',
		 	'pempcashcompensation' => 'numeric',
		 	'pemployer_2' => 'alpha_space',
		 	'pempposition_2' => 'alpha_space_dash',
		 	'pempbsalarymonth_2' => 'numeric',
		 	'supervisor_2' => 'alpha_space',
		 	'phonenumber_2' => 'numeric',
		 	'pempcashcompensation_2' => 'numeric'
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

			// BASIC DETAILS SECTION

			$applicant->positiondesired_1 = $data['positiondesired_1'];
			$applicant->expectedsalary = $data['expectedsalary'];
			$applicant->cemployed_1 = $data['cemployed'];
			$applicant->positiondesired_2 = $data['positiondesired_2'];
			$applicant->previouslyApp_1 = $data['previouslyApp'];

			if ( Input::get('stateDate') == "" ) 
				{ $applicant->stateDate = ""; } 
			else 
				{ $applicant->stateDate = $data['stateDate']; }

			$applicant->nprequired = date('m/d/Y', strtotime($_POST["from-date"])) . " to " . date('m/d/Y', strtotime($_POST["to-date"]));
			$applicant->source = $data['source'];
			$applicant->referred = $data['referred'];

			// PERSONAL INFORMATION SECTION

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

			// EDUCATION INFORMATION SECTION

			$applicant->hsname = $data['hsname'];
			$applicant->hseductitle = $data['hseductitle'];
			$applicant->hsschooladdress = $data['hsschooladdress'];
			$applicant->hsdateattended = $data['hsdateattended'];
			$applicant->hsgraduate = $data['hsgraduate'];
			$applicant->collegename = $data['collegename'];
			$applicant->collegeeductitle = $data['collegeeductitle'];
			$applicant->collegeschooladdress = $data['collegeschooladdress'];
			$applicant->collegedateattended = $data['collegedateattended'];
			$applicant->collegegraduate = $data['collegegraduate'];
			$applicant->gradschoolname = $data['gradschoolname'];
			$applicant->gradeductitle = $data['gradeductitle'];
			$applicant->gradschooladdress = $data['gradschooladdress'];
			$applicant->graddateattended = $data['graddateattended'];
			$applicant->gradgraduate_1 = $data['gradgraduate_1'];

			// FAMILY INFORMATION SECTION

			$applicant->famname1 = $data['famname1'];
			$applicant->famname2 = $data['famname2'];
			$applicant->famname3 = $data['famname3'];
			$applicant->famname4 = $data['famname4'];
			$applicant->famname5 = $data['famname5'];

			$applicant->famrel1 = $data['famrel1'];
			$applicant->famrel2= $data['famrel2'];
			$applicant->famrel3 = $data['famrel3'];
			$applicant->famrel4 = $data['famrel4'];
			$applicant->famrel5 = $data['famrel5'];

			$applicant->famsch1 = $data['famsch1'];
			$applicant->famsch2 = $data['famsch2'];
			$applicant->famsch3 = $data['famsch3'];
			$applicant->famsch4 = $data['famsch4'];
			$applicant->famsch5 = $data['famsch5'];

			$applicant->fampos1 = $data['fampos1'];
			$applicant->fampos2 = $data['fampos2'];
			$applicant->fampos3 = $data['fampos3'];
			$applicant->fampos4 = $data['fampos4'];
			$applicant->fampos5 = $data['fampos5'];

			$applicant->famphn1 = $data['famphn1'];
			$applicant->famphn2 = $data['famphn2'];
			$applicant->famphn3 = $data['famphn3'];
			$applicant->famphn4 = $data['famphn4'];
			$applicant->famphn5 = $data['famphn5'];
			
			$applicant->chkbx_1 = $data['chkbx'];
			if ( Input::get('rsn') == "" ) 
				{ $applicant->rsn = ""; } 
			else 
				{ $applicant->rsn = $data['rsn']; }

			$applicant->chkbx_2 = $data['chkbx_2'];
			if ( Input::get('rsn_2') == "" ) 
				{ $applicant->rsn_2 = ""; } 
			else 
				{ $applicant->rsn_2 = $data['rsn_2']; }

			// CHARACTER REFERENCE SECTION

			$applicant->nme1 = $data['nme1'];
			$applicant->nme2 = $data['nme2'];
			$applicant->nme3 = $data['nme3'];
			$applicant->rel1 = $data['rel1'];
			$applicant->rel2 = $data['rel2'];
			$applicant->rel3 = $data['rel3'];
			$applicant->addcon1 = $data['addcon1'];
			$applicant->addcon2 = $data['addcon2'];
			$applicant->addcon3 = $data['addcon3'];
			$applicant->state_1 = $data['state_1'];
			
			// EMPLOYMENT INFORMATION SECTION

			if ( Input::get('reason_2') == "" ) 
				{ $applicant->rsn_2 = ""; } 
			else 
				{ $applicant->rsn_2 = $data['reason_2']; }

			$applicant->cemployer = $data['cemployer'];
			$applicant->position = $data['position'];
			$applicant->incdates = $data['incdates'];
			$applicant->bsalarymonth = $data['bsalarymonth'];
			$applicant->employeraddress_1 = $data['employeraddress_1'];
			$applicant->cashcompensation_1 = $data['cashcompensation_1'];
			$applicant->pemployer_1 = $data['pemployer_1'];
			$applicant->pempposition = $data['pempposition'];
			$applicant->pempincdates = $data['pempincdates'];
			$applicant->pempbsalarymonth = $data['pempbsalarymonth'];
			$applicant->supervisor = $data['supervisor'];
			$applicant->phonenumber = $data['phonenumber'];
			$applicant->pempemployeraddress = $data['pempemployeraddress'];
			$applicant->pempcashcompensation = $data['pempcashcompensation'];
			$applicant->pemployer_2 = $data['pemployer_2'];
			$applicant->pempposition_2 = $data['pempposition_2'];
			$applicant->pempincdates_2 = $data['pempincdates_2'];
			$applicant->pempbsalarymonth_2 = $data['pempbsalarymonth_2'];
			$applicant->supervisor_2 = $data['supervisor_2'];
			$applicant->phonenumber_2 = $data['phonenumber_2'];
			$applicant->pempemployeraddress_2 = $data['pempemployeraddress_2'];
			$applicant->pempcashcompensation_2 = $data['pempcashcompensation_2'];
			$applicant->save();

			//Get Applicant id
			$applicant_id = $applicant->id;
			$dateOfApplication = $applicant->created_at;

			//Search Applicant by id
			$updateApplicant = Applicant::find($applicant_id);

			//Pass the searched ID on the function Applicant::getId
			//and update the column applicant_id
			$updateApplicant->applicant_id = Applicant::getId($applicant_id);

			//Get the value from variable $dateOfApplication
			//and format it into m/d/Y date format and update the column dateofapplication
			$updateApplicant->dateofapplication = date('m/d/Y', strtotime($dateOfApplication));
			$updateApplicant->save();

			//Get Applicants Full Name and Applicant_ID
			$applicantInfo = Applicant::find($applicant_id);
			$getApplicant_LastName = $applicantInfo->lastname;
			$getApplicant_MiddleName = $applicantInfo->middle;
			$getApplicant_FirstName = $applicantInfo->firstname;
			$getApplicant_ApplicantId = $applicantInfo->applicant_id;

			$audits = New Audit;
			$audits->history = "Applicant " . $getApplicant_LastName . " " . $getApplicant_MiddleName . " " . $getApplicant_FirstName . " has been registered successfully. (Applicant ID: " . $getApplicant_ApplicantId . ") ";
			$audits->save();
		}
	}
}