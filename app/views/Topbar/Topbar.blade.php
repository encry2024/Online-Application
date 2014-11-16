



<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<label class="label-white size-22 line-height-2 small-push-1 font-style-calibri">NorthStar Solutions Inc.</label>
		</li>
	</ul>

	<section class="top-bar-section">
	<!-- Right Nav Section -->
		<ul class="right">
			<li class="has-dropdown">
				<label class="label-white link-lineHeight small-pull-1">Welcome, {{ Auth::user()->firstname }}</label>
				<ul class="dropdown">
					<div class="separator"></div>
					<li>{{ link_to('logout', 'Logout', ['class'=>'text-center']) }}</li>
					<li>{{ link_to('changepass', 'Change Password', ['class'=>'text-center']) }}</li>
				</ul>
			</li>
		</ul>
	</section>
</nav>