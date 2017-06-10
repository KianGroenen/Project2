@extends('layouts.baselayout')
@inject('Matchcontroller', '\App\Http\Controllers\MatchController')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div id="topfloatright">

                    @if (Auth::User())

                        <div class="user">
                            <a href="/logout"><span class="redspan">{{Auth::User()->username}}</span></a>
                            <img id="shirtnr" src="../images/shirtnr.png">

                        </div>
                    @endif

            <div class="clear"></div>

                    <div class="countdown">
                        <p>Volgende match in:<br/> <span class="yellowspan">{{$countdown}}</span></p>
                    </div>


            <div class="clear"></div>

                    <div class="match">
                        <div class="match{{$match->id}} matchtext">
                                <p id="team1"><img class="team-logo" src="../images/kv-logo.png"><span class="redspan team1">{{$match->team1}}</span></p>
                                <div id="divider"></div>
                                <p id="team2"><span class="yellowspan team2">{{$match->team2}}</span><img class="team-logo" src="../images/rsca-logo.png"></p>
                        </div>
                    </div>
                </div>

                

                <div class="clear"></div>

                <div id="centercontent" class="klassement">
                    <h3>Klassement:</h3>
                    <p><span class="redspan">Tooghangers</span> <span class="yellowspan">Eerste Klasse</span></p>
                        <ul>
                            <li>1. Indy Van Meldert</li>
                            <li>2. James Dean</li>
                            <li>3. Antonio Banderas</li>
                        </ul>

                        <ul class="points">
                                <li>15pt</li>
                                <li>12pt</li>
                                <li>10pt</li>
                            
                        </ul>
                        <div class="clear"></div>

                        <a href="#"><img class="arrow" src="../images/arrow.svg"></a>
                </div>
                
                <div id="centercontent" class="pronostiekGeschiedenis">
                    <h3>Pronostiek geschiedenis</h3>
                        <div id="foreachhistory">
                        @foreach($pronostieken as $pronostiek)
                            <p>{{$pronostiek->date}}</p>
                            <span class="redspan"><p>{{$pronostiek->score1}}</p></span>
                            <div id="divider"></div>
                            <span class="redspan"><p>{{$pronostiek->score2}}</p></span>
                            <p>{{$pronostiek->score}}</p>
                            <br/>
                            <br/>
                        @endforeach
                        </div>
                </div>


                <a class="smallerbutton" id="leftbutton" href="#"><span class="redspan">Bekijk</span> <span class="yellowspan"> geschiedenis</span></a>
                <div class="clear"></div>

                <a class="smallerbutton" id="rightbutton" href="#"><span class="redspan">Nodig</span> <span class="yellowspan"> een vriend uit</a>
                <br/><br/><br/><br/>

                <div class="clear"></div>
                
                <a id="bottombutton" href="/pronostiek/{{$match->id}}/create">PRONOSTIEK<br/><img class="arrow" src="../images/arrow.svg"></a>
            </div>
        </div>
    </div>
</div>
@endsection
