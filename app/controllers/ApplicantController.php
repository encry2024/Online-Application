<?php

class ApplicantController extends BaseController {

	public function registerApplicant() {
		$register = Applicant::registerApplicant(Input::all());
		return $register;
	}

	public function getInfo($id) {
		#Decrypt applicant's ID
		$get_info = Applicant::find(Crypt::decrypt($id));
		#Get the column Visited
		$visited = $get_info->Visited;

		#Check the Visited value..
		#If 0. Redirect the applicant to confirmRegistration to confirm his/her information.
		if($visited == 0)
		{ return View::make('confirmRegistration')->with('applicant_info', $get_info); }
		#Else. Display error
		else
		{return View::make('ErrorPage'); }
	}

	public function updateApplicant($id) {
		$updateApplicantInformation = Applicant::updateInfo($id, Input::all());

		return $updateApplicantInformation;
	}
}