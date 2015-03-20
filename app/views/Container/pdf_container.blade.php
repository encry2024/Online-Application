<!DOCTYPE html>

<html lang="en">
<meta http-equiv="Content-Type" content="text/html/css; charset=utf-8"/>
	<head>
		<!-- CUSTOM STYLE -->
		<style type="text/css">
			.panel {
				border-style 	: solid;
				border-width 	: 1px;
				border-color 	: #d8d8d8;
				margin-bottom	: 0.5rem;
				padding			: 0.5rem;
				background 	 	: #f2f2f2;
				color 			: #333333; 
			}

			.right {
				float 			: right;
			}

			.large-12 {
				width 			: 100%; 
			}

			.size-14 {
				font-size 		: 14px;
			}

			.size-16 {
				font-size 		: 16px;
			}

			body {
			margin: 0;
			padding: 0;
			/*background-color: #f4726d;
			/*background: linear-gradient(to bottom, #ff6935, #4e1400);*/
			background-repeat:no-repeat;
			background-attachment:fixed;
			margin: 0;
			background-size:contain;
			padding: 0;
			height: 100%;
			width: 100%;
			position:relative;
			bottom:0px;
			top:0px;
			line-height: 1.5rem;
			margin-top:0px;
			margin-bottom:0px;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			max-height:100%;
			max-width:100%;
			-webkit-font-smoothing: antialiased;
			font-family:Trebuchet MS, Arial, 'Consolas', sans-serif;
			font-size:1em;
		}
	</style>
		
	</head>

	<title>
	</title>

	<body>
		
		<!-- BODY -->

		<label style='font-size: 18px; margin-left: 18rem;'>Applicant Profile</label><br><br>
		<label class='size-14 right'>Date Applied:  {{ date('F d, Y', strtotime($employee->dateofapplication)) }}</label>
		<br>
		<label class='size-14'>Employment Status: {{ $employee->status }}</label>
		<br>
		<label class='size-14'>Employee ID# {{ $employee->employee_id }} </label>
			

		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div><br>
		<br>
		<div class='panel'>
			<label class='size-18'><b>Personal Information</label>
		</div>
		<br>
		<label class='size-14 right'>Lastname: <b>{{$employee->lastname}}</label>
		<br>
		<label class='size-14 right'>Firstname: <b>{{$employee->firstname}}</label>
		<br>
		<label class='size-14 right'>Middle: <b>{{$employee->middle}}</label>
		<br>
		<label class='size-14 right'>Nickname: <b>{{$employee->nickname}}</label>
		<br>
		<label class='size-14 right'>Home Tel.: <b>{{$employee->hometel}}</label>
		<br>
		<label class='size-14 right'>Mobile No.: <b>{{$employee->mobiletel}}</label>
		<br>
		<label class='size-14 right'>Address: <b>{{$employee->address}}</label>
		<br>
		<label class='size-14 right'>Religion: <b>{{$employee->religion}}</label>
		<br>
		<label class='size-14 right'>Gender: <b>{{$employee->gender}}</label>
		<br>
		<label class='size-14 right'>Civil Status: <b>{{$employee->civilstatus}}</label>
		<br>
		<label class='size-14 right'>E-mail: <b>{{$employee->email}}</label>
		<br>
		<label class='size-14 right'>Date of Birth: <b>{{$employee->dob}}</label>
		<br>
		<label class='size-14 right'>Age: <b>{{$employee->age}}</label>
		<br>
		<label class='size-14 right'>Place of Birth: <b>{{$employee->placeofbirth}}</label>
		<br>
		<label class='size-14 right'>SSS No# <b>{{$employee->sss}}</label>
		<br>
		<label class='size-14 right'>TIN No# <b>{{$employee->tin}}</label>
		<br><br><br>
		<div class='panel'>
			<label class='size-18'><b>Basic Details</label>
		</div>
		<br>
		<label class='size-14 right'>Position Desired: <b>{{$employee->positiondesired_1}}</label>
		<br>
		<label class='size-14'>Second Choice: <b> {{$employee->positiondesired_2 }}</label>
		<br>
		<label class='size-14 right'>Expected Salary: <b> {{$employee->expectedsalary }}</label>
		<br>
		<label class='size-14'>Currently Employed: <b> {{$employee->cemployed_1 }}</label>
		<br>
		<label class='size-14'>Previously Applied Here? <b> {{$employee->previouslyApp_1  }}</label>
		<br>
		<label class='size-14'>Date Applied: <b> {{ date('F m, Y', strtotime($employee->stateDate))}}  </label>
		<br>
		<label class='size-14'>Notice Period Required: <b> {{ $employee->nprequired }}</label>
		<br>
		<label class='size-14'>Source: <b> {{ $employee->source  }}</label>
		<br>
		<label class='size-14'>Referred by: <b> {{ $employee->referred }}</label>
		<br><br><br><br>
		<div class='panel'>
			<label class='size-18'><b>Educational Background</label>
		</div>
		<br>
		<label>COLLEGE SCHOOL GRADUATED</label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>School (Graduate of Study): <b> {{$employee->gradschoolname}}  </label>
		<br>
		<label class='size-14'>Degree / Concentration / Major: <b> {{$employee->gradeductitle}}  </label>
		<br>
		<label class='size-14'>Address: <b> {{$employee->gradschooladdress}}  </label>
		<br>
		<label class='size-14'>Date Attended: <b> {{$employee->graddateattended}}  </label>
		<br>
		<label class='size-14'>Mo. & Yr. Of Graduation: <b> {{$employee->gradgraduate_1}}  </label>
		<br><br><br>
		<label>COLLEGE SCHOOL</label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>School (Graduate of Study): <b> {{$employee->collegename}}  </label>
		<br>
		<label class='size-14'>Degree / Concentration / Major: <b> {{$employee->collegeeductitle}}  </label>
		<br>
		<label class='size-14'>Address: <b> {{$employee->collegeschooladdress}}  </label>
		<br>
		<label class='size-14'>Date Attended: <b> {{$employee->collegedateattended}}  </label>
		<br>
		<label class='size-14'>Mo. & Yr. Of Graduation: <b> {{$employee->collegegraduate}}  </label>
		<br><br><br>
		<label>HIGH SCHOOL</label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>School (Graduate of Study): <b> {{$employee->hsname}}  </label>
		<br>
		<label class='size-14'>Address: <b> {{$employee->hsschooladdress}}  </label>
		<br>
		<label class='size-14'>Date Attended: <b>{{ $employee->hsdateattended }} </label>
		<br>
		<label class='size-14'>Mo. & Yr. Of Graduation: <b>{{ $employee->hsgraduate }} </label>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class='panel'>
			<label class='size-18'><b>Family Background</label>
		</div>
		<br>
		<label><i><b>Family Members</i></label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->famname1 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->famrel1 }} </label>
		<br>
		<label class='size-14'>School: <b>{{ $employee->famsch1 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->fampos1 }} </label>
		<br>
		<label class='size-14'>Contact/Address: <b> $employee->famphn1  </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->famname2 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->famrel2 }} </label>
		<br>
		<label class='size-14'>School: <b>{{ $employee->famsch2 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->fampos2 }} </label>
		<br>
		<label class='size-14'>Contact/Address: <b>{{ $employee->famphn2 }} </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->famname3 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->famrel3 }} </label>
		<br>
		<label class='size-14'>School: <b>{{ $employee->famsch3 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->fampos3 }} </label>
		<br>
		<label class='size-14'>Contact/Address: <b>{{ $employee->famphn3 }} </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->famname4 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->famrel4 }} </label>
		<br>
		<label class='size-14'>School: <b>{{ $employee->famsch4 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->fampos4 }} </label>
		<br>
		<label class='size-14'>Contact/Address: <b>{{ $employee->famphn4 }} </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->famname5 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->famrel5 }} </label>
		<br>
		<label class='size-14'>School: <b>{{ $employee->famsch5 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->fampos5 }} </label>
		<br>
		<label class='size-14'>Contact/Address: <b>{{ $employee->famphn5 }} </label>
		<br><br><br><br><br><br>
		<div class='panel'>
			<label class='size-18'><b>First Evaluation</label>
		</div>
		<br>
		<label class='size-14'>Have you ever been involved in any administrative, civil or criminal case? <b> $employee->chkbx_1  </label>
		<br>
		<label class='size-14'>Reason: <b>{{ $employee->rsn }} </label>
		<br><br>
		<label class='size-14'>Have you had any physical pre mental condition which limits your ability to perform the job applied for or pose a potential risk to other employees? <b> $employee->chkbx_2  </label>
		<br>
		<label class='size-14'>Reason: <b>{{ $employee->rsn_2 }} </label>
		<br><br>
		<div class='panel'>
			<label class='size-18'><b>Second Evaluation</label>
		</div>
		<br>
		<label class='size-14'>Have you been dismissed by any of your former employers for any administrative or just cause? <b> $employee->chkbx_1  </label>
		<br>
		<label class='size-14'>Reason: <b>{{ $employee->rsn }} </label>
		<br><br><br>
		<div class='panel'>
			<label class='size-18'><b>Character Reference</label>
		</div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->nme1 }}</label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->rel1 }}</label>
		<br>
		<label class='size-14'>Address/Contact: <b>{{ $employee->addcon1 }} </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->nme2 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->rel2 }}</label>
		<br>
		<label class='size-14'>Address/Contact: <b>{{ $employee->addcon2 }} </label>
		<br><br>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Name: <b>{{ $employee->nme3 }} </label>
		<br>
		<label class='size-14'>Relationship: <b>{{ $employee->rel3 }} </label>
		<br>
		<label class='size-14'>Address/Contact: <b>{{ $employee->addcon3 }} </label>
		<br><br><br><br><br><br><br><br><br><br>
		<div class='panel'>
			<label class='size-18'><b>Employment Background</label>
		</div>
		<br>
		<label><i><b>Current Employee</i></label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>

		<br>
		<label class='size-14'>Employer Name: <b>{{ $employee->cemployer }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->position }} </label>
		<br>
		<label class='size-14'>Inclusive Dates: <b>{{ $employee->incdates }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->position }} </label>
		<br>
		<label class='size-14'>Base Salary/Month: <b>{{ $employee->bsalarymonth }} </label>
		<br>
		<label class='size-14'>Address: <b>{{ $employee->employeraddress_1 }} </label>
		<br>
		<label class='size-14'>Cash Compensation: <b>{{ $employee->cashcompensation_1 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->position }} </label>
		<br><br>
		<label><i><b>Previous Employer</i></label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Employer Name: <b>{{ $employee->pemployer_1 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempposition }} </label>
		<br>
		<label class='size-14'>Inclusive Dates: <b>{{ $employee->pempincdates }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempposition }} </label>
		<br>
		<label class='size-14'>Base Salary/Month: <b>{{ $employee->pempbsalarymonth }} </label>
		<br>
		<label class='size-14'>Address: <b>{{ $employee->supervisor }} </label>
		<br>
		<label class='size-14'>Cash Compensation: <b>{{ $employee->phonenumber }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempemployeraddress }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempcashcompensation }} </label>
		<br><br>
		<label><i><b>Previous Employer</i></label>
		<div style='border-top-style: solid; border-top-color: #ddd; border-top-width: 2px;'></div>
		<br>
		<label class='size-14'>Employer Name: <b>{{ $employee->pemployer_2 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempposition_2 }} </label>
		<br>
		<label class='size-14'>Inclusive Dates: <b>{{ $employee->pempincdates_2 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempposition_2 }} </label>
		<br>
		<label class='size-14'>Base Salary/Month: <b>{{ $employee->pempbsalarymonth_2 }} </label>
		<br>
		<label class='size-14'>Address: <b>{{ $employee->supervisor_2 }} </label>
		<br>
		<label class='size-14'>Cash Compensation: <b>{{ $employee->phonenumber_2 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempemployeraddress_2 }} </label>
		<br>
		<label class='size-14'>Position: <b>{{ $employee->pempcashcompensation_2 }} </label>
	</body>
</html>