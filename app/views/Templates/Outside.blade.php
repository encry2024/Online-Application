
<HTML lang="en">
	<HEAD>
		{{ HTML::script('packages/foundation-5.4.7/js/vendor/modernizr.js') }}
		{{ HTML::style('packages/foundation-5.4.7/css/foundation.css') }}
		{{ HTML::style('packages/foundation-5.4.7/css/foundation.min.css') }}
		{{ HTML::style('packages/foundation-5.4.7/css/normalize.css') }}
		{{ HTML::style('packages/foundation-icons/foundation-icons.css') }}
		{{ HTML::style('packages/foundation-icons/preview.html') }}
		{{ HTML::style('packages/custom-style/custom-style.css') }}
		{{ HTML::style('packages/foundation_icons_general/foundation_icons_general/stylesheets/general_foundicons.css') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/example.css') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/example.html') }}
		{{ HTML::style('packages/foundation-5.4.7/datepicker/foundation-datepicker.css') }}

		@yield('head')

	</HEAD>

	<TITLE>
		Northstar Solutions Inc.
	</TITLE>

	<body @yield('script')>
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

		@yield('body')
		@yield('scripts')

		<script>
		  $(document).foundation();
		</script>
		
	</body>
</HTML>