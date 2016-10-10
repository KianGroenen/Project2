<h1>{{ $album->name }}</h1>
<img width="140" src="{{ $album->cover }}" alt="">

<h2>songs</h2>
@foreach( $album->songs as $s )
	{{ $s->name }}<br>
@endforeach

{{ dd($album) }}