{{ $artist->name }}

<h2>Songs</h2>
@foreach($artist->songs as $s)
	{{$s->name}}<br>
	
	<em> on albums </em> 
	@foreach($s->albums as $album)
		<a href="/albums/{{ $album->id }}">{{ $album->name }}</a> 
	@endforeach

@endforeach

