<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <a href="{{ URL::to('blog') }}">{{ $company }}</a>
                </div>

                <div >
                	<form action="{{ URL::to('blog', $data->id) }}" method="POST">
						<p>First name: </p>
						<input type="text" name="name" value="{{$data->name}}">
						<br>
						<p>Last name: </p>
						<input type="text" name="email" value="{{ old('email',  $data->email) }}">
						<p>Password: </p>
						<input type="text" name="password" value="{{ Request::old('password',  $data->password) }}">
						<br><br>
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="{{ Session::token() }}" />
						{{-- {!! csrf_field() !!} --}}
						<input type="submit" value="Submit">
					</form>
                </div>
            </div>
        </div>
    </body>
</html>
