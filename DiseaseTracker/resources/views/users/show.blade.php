@extends('layout')

@section('content')
<h1>Welcome {{$User->first_name}}</h1>
<p>You have reported {{$User->cases->count()}} cases</p>

<h2>Your Network</h2>
<p>There have been a total of {{$Reports}} reported cases from 
  contacts in your network.
</p>
<h3>Contacts</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Contact name</th>
      <th>Status</th>
      <th>Last login</th>
      <th>Reported cases</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Network as $Contact)
    <tr class="active">
      <td>{{$Contact->first_name}}</td>
      <td>{{$Contact->status}}</td>
      <td>{{$Contact->last_login}}</td>
      <td>{{$Contact->cases->count()}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<h3>Organizations</h3>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Organization Name</th>
      <th>Owner</th>
    </tr>
  </thead>
  <tbody>
  @foreach($NetworkOrg as $Organization)
    <tr class="active">
      <td>{{$Organization->organization_name}}</td>
      <td>{{$Organization->owner->first_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


<a class="btn btn-primary" href="{{route('reports.create')}}">Make Report</a>


@endsection