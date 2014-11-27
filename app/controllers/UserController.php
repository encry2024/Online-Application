<?php

class UserController extends BaseController {

	public function registerUser() {
		$register = User::tryRegister(Input::all());
		return $register;
	}

	public function getApplicantInfo($applicant_id) {
		$applicants = Applicant::where('applicant_id', $applicant_id)->first();

		if ($applicants == true) {
			return View::make('Container.ApplicantProfile')->with('applicant_info', $applicants);
		} else {
			return View::make('Fields.MainpageFields.Mainpage-Error.webPageError');
		}
	}

	public function updateApplicantInfo($id) {
		$updateApplicantInformation = User::updateInfo($id, Input::all());

		return $updateApplicantInformation;
	}

	public function getNotif() {
		Applicant::where('seen', '0')->update(array('seen' => 1));
	}
}


