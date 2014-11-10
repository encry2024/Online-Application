<?php

class ApplicantController extends BaseController {

	public function registerApplicant() {
		$register = Applicant::registerApplicant(Input::all());
		return $register;
	}
}