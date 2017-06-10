<h1>Songs</h1>
@foreach($artist->songs as $song)
	<p>{{ $song->name }}</p>
@endforeach