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
                    <a href="{{ URL::to('blog') }}">Links Innovation Co., Ltd</a>
                </div>

                <div >
                	<h1>List Photo</h1> 
                    <a href="{{ URL::to('blog/create') }}">Add New</a>
                    @if(Session::has('success'))
                        <div class="alert-box success">
                            <h2>{{ Session::get('success') }}</h2>
                        </div>
                    @endif
                	<ul>
                		@if ($data->count() > 0) 
                			@foreach($data as $item)
                				<li>
                					<a href="{{ URL::to('blog/'.$item->id)}}">
                						{{ $item->name }}
                					</a>

                                    <a href="{{ URL::to('blog/'.$item->id.'/edit')}}" class="right">
                                        Edit
                                    </a> 
                                    <a class="right">&nbsp;||&nbsp;</a>
                                    <a href="{{ URL::to('blog/'.$item->id.'/delete')}}" class="right">Del</a>
                				</li>
                			@endforeach
                		@endif
                	</ul>
                </div>
            </div>
        </div>
    </body>
</html>
