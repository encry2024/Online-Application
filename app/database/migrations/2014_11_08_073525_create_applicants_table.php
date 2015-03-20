<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//code...
		Schema::create('applicants', function($table) {
			$table->increments('id');
			$table->string('applicant_id');
			$table->string('employee_id');
			$table->string('status');
			$table->string('dateofapplication');
			$table->string('positiondesired_1');
			$table->integer('expectedsalary');
			$table->string('cemployed_1');
			$table->string('positiondesired_2');
			$table->string('previouslyApp_1');
			$table->string('stateDate');
			$table->string('nprequired');
			$table->string('source');
			$table->string('referred');
			$table->string('lastname');
			$table->string('firstname');
			$table->string('middle');
			$table->string('nickname');
			$table->integer('hometel');
			$table->string('mobiletel');
			$table->string('address');
			$table->string('religion');
			$table->text('gender');
			$table->string('civilstatus');
			$table->string('email');
			$table->string('dateofbirth');
			$table->integer('age');
			$table->string('placeofbirth');
			$table->string('sss');
			$table->string('tin');
			$table->string('collegename');
			$table->string('collegeeductitle');
			$table->string('collegeschooladdress');
			$table->string('collegedateattended');
			$table->string('collegegraduate');
			$table->string('gradschoolname');
			$table->string('gradeductitle');
			$table->string('gradschooladdress');
			$table->string('graddateattended');
			$table->string('gradgraduate_1');
			$table->string('hsname');
			$table->string('hseductitle');
			$table->string('hsschooladdress');
			$table->string('hsdateattended');
			$table->string('hsgraduate');
			$table->text('famname1');
			$table->text('famname2');
			$table->text('famname3');
			$table->text('famname4');
			$table->text('famname5');
			$table->text('famrel1');
			$table->text('famrel2');
			$table->text('famrel3');
			$table->text('famrel4');
			$table->text('famrel5');
			$table->text('famsch1');
			$table->text('famsch2');
			$table->text('famsch3');
			$table->text('famsch4');
			$table->text('famsch5');
			$table->string('fampos1');
			$table->string('fampos2');
			$table->string('fampos3');
			$table->string('fampos4');
			$table->string('fampos5');
			$table->string('famphn1');
			$table->string('famphn2');
			$table->string('famphn3');
			$table->string('famphn4');
			$table->string('famphn5');
			$table->text('cemployer');
			$table->string('position');
			$table->string('incdates');
			$table->integer('bsalarymonth');
			$table->string('employeraddress_1');
			$table->integer('cashcompensation_1');
			$table->string('chkbx_1');
			$table->string('rsn');
			$table->string('chkbx_2');
			$table->string('reason_2');
			$table->text('nme1');
			$table->text('nme2');
			$table->text('nme3');
			$table->string('rel1');
			$table->string('rel2');
			$table->string('rel3');
			$table->string('addcon1');
			$table->string('addcon2');
			$table->string('addcon3');
			$table->string('state_1');
			$table->string('rsn_2');
			$table->string('pemployer_1');
			$table->string('pempposition');
			$table->string('pempincdates');
			$table->integer('pempbsalarymonth');
			$table->string('supervisor');
			$table->string('phonenumber');
			$table->string('pempemployeraddress');
			$table->string('pempcashcompensation');
			$table->string('pemployer_2');
			$table->string('pempposition_2');
			$table->string('pempincdates_2');
			$table->integer('pempbsalarymonth_2');
			$table->string('supervisor_2');
			$table->integer('phonenumber_2');
			$table->string('pempemployeraddress_2');
			$table->integer('pempcashcompensation_2');
			$table->index('seen');
			$table->integer('Visited');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
