
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/modernizr.js') }}
		{{ HTML::style('packages/foundation-5.4.7/css/foundation.css') }}
		{{ HTML::style('packages/foundation-5.4.7/css/foundation.min.css') }}
		{{ HTML::style('packages/foundation-5.4.7/css/normalize.css') }}
		{{ HTML::style('packages/foundation-icons/foundation-icons.css') }}
		{{ HTML::style('packages/foundation-icons/preview.html') }}
		{{ HTML::style('packages/custom-style/custom-style.css') }}
		{{ HTML::style('packages/foundation-icons/foundation-icons.ttf') }}
		{{ HTML::style('packages/foundation_icons_general/foundation_icons_general/stylesheets/general_foundicons.css') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/example.css') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/example.html') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/foundation-datepicker.css') }}
		{{ HTML::style('range-datepicker/css/dateRangePicker.css') }}
		{{ HTML::style('tiny-datepicker/css/jquery.datepicker.css') }}
		{{ HTML::style('assets/css/main.css') }}

		@yield('head')

	</head>

	<title>
		Northstar Solutions Inc - Registration Form
	</title>

	<body @yield('setScript')>
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/jquery.js') }}
		
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/fastclick.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/foundation.min.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/foundation/foundation.topbar.js') }}
		{{ HTML::script('assets/js/picker.js') }}
		{{ HTML::script('assets/js/foundation-datepicker.js') }}
		{{ HTML::script('assets/js/picker.date.js') }}
		{{ HTML::script('datepicker/datepicker/js/bootstrap-datepicker.js') }}
		{{ HTML::script('packages/foundation-5.4.7/datepicker/custom.modernizr.js') }}
		{{ HTML::script('packages/foundation-5.4.7/datepicker/foundation-datepicker.js') }}
		{{ HTML::script('packages/jscripts/moment.js') }}
		{{ HTML::script('range-datepicker/js/jquery.dateRangePicker.js') }}
		{{ HTML::script('range-datepicker/js/jquery.dateRangePicker.min.js') }}
		{{ HTML::script('tiny-datepicker/js/jquery.datepicker.js') }}
		{{ HTML::script('tiny-datepicker/js/jquery.datepicker.min.js') }}
		{{ HTML::script('packages/dist/js/bootstrap.js') }}
		{{ HTML::script('packages/jTables/jquery.dataTables.min.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/foundation/foundation.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/fastclick.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/jquery.cookie.js') }}
		{{ HTML::script('packages/foundation-5.4.7/js/foundation/foundation.tooltip.js') }}

		<script>
		  $(document).foundation();
		</script>	
		@yield('body')
		@yield('scripts')
	</body>
</html>