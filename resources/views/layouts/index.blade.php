<!DOCTYPE html>
<html lang="en">
	@include('layouts.head')
	<body>
		<div class="container fill">
			<div class="card-header">
				@if(session('username'))
				    @include('layouts.navbar')
				@elseif(session('admin'))
				    @include('admin.navbar')
				@endif
			</div>
			<div class="card-footer text-muted">
			{{--    @include('layouts.header')--}}
			    @yield('content')
	            <br><br><p align="center"><i>Copyright &copy;2017 Pinterin®. By using this site, you agree to the Terms of Use and Privacy Policy.</i></p>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>