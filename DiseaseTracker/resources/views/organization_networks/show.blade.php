@extends('layout')
<h1>Network: {{$Network->network_name}}</h1>

<h2>Network Members</h2>
@foreach($Network->members as $Member)
<p>{{$Member->user->first_name}}</p>
@endforeach

@section('content')
@endsection