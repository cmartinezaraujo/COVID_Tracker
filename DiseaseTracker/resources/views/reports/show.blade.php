@extends('layout')

@section('content')
<h1>Case {{$caseInfo->report_id}}</h1>

<p>Reported by: {{$caseInfo->user->first_name}}</p>
<p>Report type: {{$caseInfo->type}}</p>
<p>Report time: {{$caseInfo->reported}}</p>
<p>Report description: {{$caseInfo->notes}}</p>
@endsection