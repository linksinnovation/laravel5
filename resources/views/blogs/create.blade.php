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
                	<h1>{{ $data->title }}</h1> 
                	<form action="{{ URL::to('blog') }}" method="POST" enctype="multipart/form-data">
                        <p>Images : </p>
                        <input type="file" name="images" value=""/>
						<p>First name: </p>
						<input type="text" name="name" value="">
						<br>
						<p>Last name: </p>
						<input type="text" name="email" value="">
						<p>Password: </p>
						<input type="text" name="password" value="">
						<br><br>
						<input type="hidden" name="_token" value="{{ Session::token() }}" />
						{{-- {!! csrf_field() !!} --}}
						<input type="submit" value="Submit">
					</form>
                </div>
            </div>
        </div>
    </body>
</html>
