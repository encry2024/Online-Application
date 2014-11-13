<?php

class ApplicantController extends BaseController {

	public function registerApplicant() {
		$register = Applicant::registerApplicant(Input::all());
		return $register;
	}

	public function getInfo($id) {
		$get_info = Applicant::where('applicant_id', $id)->first();
		return View::make('confirmRegistration')->with('applicant_info', $get_info);
	}

	public function updateApplicant($id) {
		$updateApplicantInformation = Applicant::updateInfo($id, Input::all());

		return $updateApplicantInformation;
	}
}