<h1>Artists</h1>

@foreach($artists as $artist)
	<div>
		<a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a>
	</div>
@endforeach
