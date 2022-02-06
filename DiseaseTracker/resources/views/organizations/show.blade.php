@extends('layout')
<h1>Organization {{$Organization->organization_name}}</h1>

<p>Organization admin: {{$Organization->owner->first_name}} {{$Organization->owner->last_name}}</p>

<h2>Members</h2>
@foreach($Members as $User)
<p>{{$User->user->first_name}}</p>
@endforeach

<h2>Sub Networks</h2>
@foreach($Organization->networks as $Network)
<p>{{$Network->network_name}}   {{$Network->organization->organization_name}}</p>
<a class="btn btn-primary" href="{{route('organization_networks.show', ['organization_network'=>$Network])}}">View Network</a>
@endforeach

@section('content')
@endsection