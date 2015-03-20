




{{ Form::open(array('url'=>'authenticate')) }}
	<div class="row">
		<div class="large-9 columns large-centered">
		<br>
		<div>
			<br>
			<label class="size-38 text-center"><b>Northstar Solutions Inc.</b></label>
			<br>
			<div class="panel large-centered " style="background-color: white;">
				<div class="large-12 columns large-centered">
					<label class="size-26 large-12  "><span>{{ HTML::image('packages/imgs/logo-nsi.png') }}</span><span class="size-16" style=" margin-left: 1.2rem; ">Sign in to</span><br><span style=" margin-left: 3rem; ">Online Application</span></label>
				</div>
				<div class="separator"></div>
				<br><br>
				<div class="large-12 columns large-centered">
					{{ Form::text('username', '', ['class'=>'error radius size-18 text-center font-style-segoe text-height-3', 'placeholder'=>'Username', 'id'=>'', 'name'=>'username']) }}
					@if ($errors->has('username')) <small class="error"><i class="fi-alert"> </i>{{ $errors->first('username') }}</small> @endif
				</div>
				<br>
				<div class="large-12 columns large-centered">
					{{ Form::password('password', ['class'=>'error radius size-18 large-10 text-center font-style-segoe text-height-3', 'placeholder'=>'Password', 'id'=>'', 'name'=>'password']) }}
					@if ($errors->has('password')) <small class="error"><i class="fi-alert"> </i>{{ $errors->first('password') }}</small> @endif
				</div>
				<br>
				<div class="large-12 small-12 columns large-centered">
					{{ Form::submit('Sign in', ['class'=>'button alert ds-1 large-12']) }}
				</div>
				<div class="large-12 columns">
					{{ link_to('forgot_password', 'Forgot Password?') }}
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
