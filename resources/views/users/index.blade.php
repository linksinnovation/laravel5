<h1>Hello </h1>
<a href="{{ URL::to('blog/create') }}">Add New</a>
<ul>
@if (Session::has('success')) 
	<h2>{{ Session::get('success') }}<h2>
@endif
@foreach($data as $item)
	<li>
		<a href="{{ URL::to('blog', $item->id)}}">{{ $item->name }} 

			<a href="{{ URL::to('blog/'.$item->id.'/edit')}}">|| Edit</a>

		</li></a>
@endforeach
</ul>