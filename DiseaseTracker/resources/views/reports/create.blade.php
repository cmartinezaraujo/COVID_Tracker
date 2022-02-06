@extends('layout')

@section('content')

<h1>Create a case</h1>

<form method="POST" action="{{ route('reports.store')}}">
@csrf
    <div class="form-group">
    <!--Place holder for variables when authentication is implemented -->
    <!--
    <p>Your User ID: }</p>
    <p>First Name: </p>
    <p>Last Name: </p>
    -->
      <select class="form-select" name="type">
        <option>Select report type</option>
        <option value="sick">Sick</option>
        <option value="exposed">Exposed</option>
      </select>
      
      <label class="form-label" for="notes">Notes:</label>
    <textarea class="form-input" id="notes" placeholder="Textarea" rows="3" name="notes"></textarea>

      <button type = "submit" class = "btn btn-primary">Report</button>
    </div>

</form>

@endsection