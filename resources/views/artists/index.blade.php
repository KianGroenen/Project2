@foreach($artists as $a)
	<a href="artists/{{$a->id}}">{{ $a->name }}</a><br>
@endforeach