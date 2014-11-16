<?php

class UserController extends BaseController {

	public function registerUser() {
		$register = User::tryRegister(Input::all());
		return $register;
	}

	public function getApplicantInfo($applicant_id) {
		$applicants = Applicant::where('applicant_id', $applicant_id)->first();

		if ($applicants == true) {
			return View::make('ApplicantProfile')->with('applicant_info', $applicants);
		} else {
			return View::make('Fields.MainpageFields.Mainpage-Error.webPageError');
		}
		
	}
}