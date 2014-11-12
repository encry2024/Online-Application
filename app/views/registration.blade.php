@extends('Templates.Outside')

@section('head')
<div class="large-5 columns">
	<div class="row">
		<div class="large-8 columns img-margin">
			{{HTML::image('packages/imgs/nsi-background.png')}}
		</div>
	</div>
</div>
<div class="large-12 columns backcolor">
	{{ Form::label('', 'Application Form', array('class'=>'label-style-header font-style-segoe right')) }}
</div>
@endsection

@section('setScript')
	onLoad="defaultValues()"
@endsection

@section('body')
	{{ Form::open(array('url'=>'register')) }}

	<!-- ERROR CONTAINER START -->
	@include('Container.Container-Registration-Page.errorContainer')
	<!-- ERROR CONTAINER END -->

	<!-- BASIC CONTAINER START -->
	@include('Container.Container-Registration-Page.BasicDetails')
	<!-- BASIC CONTAINER END -->

	<!-- PERSONAL CONTAINER START -->
	@include('Container.Container-Registration-Page.PersonalInformation')
	<!-- PERSONAL CONTAINER END -->

	<!-- EDUCATION CONTAINER START -->
	@include('Container.Container-Registration-Page.Education')
	<!-- EDUCATION CONTAINER END -->

	<!-- FAMILY CONTAINER START -->
	@include('Container.Container-Registration-Page.Family')
	<!-- FAMILY CONTAINER END -->

	<!-- EMPLOYMENT CONTAINER START -->
	@include('Container.Container-Registration-Page.EmploymentHistory')
	<!-- EMPLOYMENT CONTAINER END -->

	<!-- INTERVIEW CONTAINER START -->
	@include('Container.Container-Registration-Page.Interview')
	<!-- INTERVIEW CONTAINER END -->

	
	<div class="large-12 columns">
		<div class="row">
		<br><br><br>
			{{ Form::submit('Register', ['class'=>'large-2 success button radius right', 'id'=>'register']) }}
		</div>
	</div>
	<div class="drp-overlay"></div>
	{{ Form::close() }}
@endsection

@section('scripts')
	<script type="text/javascript">
		// Get the locale date
		function defaultValues() {
			var elem = document.getElementById("applicationdate");
			var dte = new Date();
			elem.value = dte.toLocaleDateString();
		}

		$('#dp1').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp2').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp3').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp4').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp5').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp6').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp7').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp8').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		//Compute Age
		function getAge() {
			var date1 = new Date();
			var dob = document.getElementById("dp1").value
			var date2 = new Date(dob);
			var pattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
			//Regex to validate date format (dd/mm/yyyy)       
			if (pattern.test(dob) ) {
				var y1 = date1.getFullYear();
				//getting current year
				var y2 = date2.getFullYear();
				//getting dob year            
				var age = y1 - y2;
				//calculating age                       
				document.getElementById("age").value = age;

				if (age < 18) {
					alert("Invalid age. Legal age is only 18 and above.");
					document.getElementsByName("dateofbirth").focus();
					return false;
				} else {
					return true;
				}

			} else {
				alert("Invalid date format. Please Input in (mm/dd/yyyy) format.");
				document.getElementById("age").value = "";
				return false;
			}
		}
		
		$(document).ready(function() {
			$('#npDate').DateRangePicker({
				startDate: '2014-11-11',
				endDate: '2015-12-31'
			});
		});


		function enableTbReason() {
			if(document.getElementById('y_id').checked) {
				document.getElementById('dp2').disabled = false;
			} else {
				document.getElementById('dp2').disabled = true;
				document.getElementById('dp2').value = null;
			}
		}

		function disableTbReason() {
			if(document.getElementById('n_id').checked) {
				document.getElementById('dp2').disabled = true;
				document.getElementById('dp2').value = null;
			}
		}

		function enableTbReason_2() {
			if(document.getElementById('y_state').checked) {
				document.getElementById('reason_2').disabled = false;
			} else {
				document.getElementById('reason_2').disabled = true;
				document.getElementById('reason_2').value = null;
			}
		}

		function disableTbReason_2() {
			if(document.getElementById('n_state').checked) {
				document.getElementById('reason_2').disabled = true;
				document.getElementById('reason_2').value = null;
			} 
		}

		function enableTbRsn() {
			if(document.getElementById('chkbx_y_state').checked) {
				document.getElementById('rsn').disabled = false;
			} else {
				document.getElementById('rsn').disabled = true;
				document.getElementById('rsn').value = null;
			}
		}

		function disableTbRsn() {
			if(document.getElementById('chkbx_n_state').checked) {
				document.getElementById('rsn').disabled = true;
				document.getElementById('rsn').value = null;
			} 
		}

		function enableTbRsn_2() {
			if(document.getElementById('chkbx_2_y_state').checked) {
				document.getElementById('rsn_2').disabled = false;
			} else {
				document.getElementById('rsn_2').disabled = true;
				document.getElementById('rsn_2').value = null;
			}
		}

		function disableTbRsn_2() {
			if(document.getElementById('chkbx_2_n_state').checked) {
				document.getElementById('rsn_2').disabled = true;
				document.getElementById('rsn_2').value = null;
			} 
		}

		$("input:checkbox").on('click', function() {
			// in the handler, 'this' refers to the box clicked on
			var $box = $(this);
			if ($box.is(":checked")) {
				// the name of the box is retrieved using the .attr() method
				// as it is assumed and expected to be immutable
				var group = "input:checkbox[name='" + $box.attr("name") + "']";
				// the checked state of the group/box on the other hand will change
				// and the current value is retrieved using .prop() method
				$(group).prop("checked", false);
				$box.prop("checked", true);
			} else {
				$box.prop("checked", false);
			}
		});
	</script>
@endsection