@extends('layouts.app')

@section('content')
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    @include('inc.navbar')
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    @include('inc.sidebar')
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
              <!-- Summary Data -->
              <a href="/summaries" class="btn btn-default">Go Back</a>
              <h2>This is the Summary ID: {{$summary->id}}</h2>
              <h3>Employee ID: {{$summary->employee_id}}</h3>
              <h3>Employee Name: {{$summary->employee->user->name}}</h3>
              <div class="well"><p>{!!$summary->body!!}</p></div>
              <h4>Created on: {{$summary->created_at}}</h4>
              <h4>Updated on: {{$summary->updated_at}}</h4>
              <hr>
              @if(Auth::user()->id == $summary->employee->user->id)
                <!-- Edit button -->
                <a href="/summaries/{{$summary->id}}/edit" class="btn btn-default">Edit</a>
                <!-- Delete button -->
                {!!Form::open(['action' => ['SummariesController@destroy', $summary->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
                {!!Form::close()!!}
                <!-- End Summary Data -->
              @endif
            </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
@endsection