<h1>Hello </h1>
<ul>
@foreach($data as $item)
	<li>
		<a href="{{ URL::to('blog', $item->id)}}">{{ $item->name }}</li></a>
@endforeach
</ul>