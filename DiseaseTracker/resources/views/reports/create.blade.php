@extends('layout')

@section('content')

<h1>Create a case</h1>

<form method="POST" action="{{ route('reports.store', Auth::user())}}">
@csrf
    <div class="form-group">
    <!--Place holder for variables when authentication is implemented -->
    <p>First Name: {{$user->first_name}}</p>
    <p>Last Name: {{$user->last_name}}</p>

      <select class="form-select" name="type">
        <option>Select report type</option>
        <option value="sick">Sick</option>
        <option value="exposed">Exposed</option>
      </select>

      <label class="form-switch">
        <input type="checkbox" name="anonymous">
        <i class="form-icon"></i> Make report anonymous
      </label>
      
      <label class="form-label" for="notes">Notes:</label>
    <textarea class="form-input" id="notes" placeholder="Textarea" rows="3" name="notes"></textarea>

      <button type = "submit" class = "btn btn-primary">Report</button>
    </div>

</form>

@endsection