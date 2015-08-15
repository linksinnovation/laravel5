<html>
 
<?php 
	echo '<pre>';
	print_r($results);
?>
	<h1>{{$company}}</h1>

	<form action=" {{ URL::to('blog') }}" method="POST">
		Name <br />
		<input type="text" name="name" value="{{ old('name') }}"><br />

		Email <br />
		<input type="text" name="email" value="{{ old('name') }}"><br />

		Password <br />
		<input type="text" name="password" value="{{ old('name') }}"><br />
		<input type="hidden" name="_token" value="{{ Session::token() }}">
		<br /><br />
		<input type="submit" name="submit" value="Submit"/>
	</form>
</html>