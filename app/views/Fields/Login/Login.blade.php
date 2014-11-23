



<br><br><br>
{{ Form::open(array('url'=>'authenticate')) }}
<div class="row">
<br>
	<div class="large-9 columns large-centered">
		{{ Form::text('username', '', ['class'=>'error size-18 text-center font-style-segoe text-height-3', 'placeholder'=>'Username', 'id'=>'', 'name'=>'username']) }}
		@if ($errors->has('username')) <small class="error"><i class="fi-alert"> </i>{{ $errors->first('username') }}</small> @endif
	</div>
	<br>
	<div class="large-9 columns large-centered">
		{{ Form::password('password', ['class'=>'error size-18 large-10 text-center font-style-segoe text-height-3', 'placeholder'=>'Password', 'id'=>'', 'name'=>'password']) }}
		@if ($errors->has('password')) <small class="error"><i class="fi-alert"> </i>{{ $errors->first('password') }}</small> @endif
	</div>
	<br>
	<div class="large-9 small-12 columns large-centered">
		<button class="button button-bg label-black button-bg-sb right font-style-segoe text-size-20" type="submit">
			<i class="fi-check"></i>
			<span>Login</span>
		</button>
	</div>
</div>

<div class="row">
	<div class="large-9 small-12 columns large-centered">
		{{ link_to('registration', " Create an account", ['class'=>'button-bg button label-black button-bg-sb large-4 text-size-20 small right font-style-segoe fi-torso']) }}
	</div>
</div>
<br>