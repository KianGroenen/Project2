@extends('layouts.baselayout')

@section('content')
    <h1>Overzicht gebruikers</h1>
    @if (!empty($successMessage))
        <div class="successMessage" style="background-color:forestgreen"> {{ $successMessage }} </div>
    @endif

    @if (!empty($errorMessage))
        <div class="errorMessage" style="background-color:red; color:white"> {{ $errorMessage }} </div>
    @endif
    <a href="users/create" class="btn btn-primary createUser">Nieuwe gebruiker aanmaken</a>
    <a href="{{url('/profile')}}" class="btn btn-primary createUser">Eigen profiel aanpassen</a>

    <div class="panel panel-default">
    @if( Session::has('msgUserSuccess') )
        <div class="alert alert-success" role="alert">
            {{ Session::get('msgUserSuccess') }}
        </div>
    @elseif( Session::has('msgUserError'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('msgUserError') }}
        </div>
    @endif
        <!-- List group -->
        <ul class="list-group">
            @foreach ($users as $user)
            <li class="list-group-item oneUser">
                <div class="userName">{{$user->username}}</div>
                <div class="admin">
                    @if ($user->admin == 1)
                    {{ "Admin" }}
                    @else
                    {{ "User" }}
                    @endif
                </div>
                <a href="/user/{{$user->id}}" class="btn btn-primary changeUser">Bewerken</a>
                <form action="/users/delete/{{$user->id}}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" value="Verwijder" class="btn btn-primary changeUser">
                </form>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
