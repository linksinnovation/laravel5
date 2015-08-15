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
                	<h1>
                		<a href="{{ URL::to('blog') }}">Blog Lists</a>
                	</h1> 
                	<h2>Name : {{ $data->name }}</h2>
                	<h2>Email : {{ $data->email }}</h2>
                </div>
            </div>
        </div>
    </body>
</html>
