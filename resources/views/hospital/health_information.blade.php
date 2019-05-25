@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">HSC Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
					
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#vm">View Patients</a></li>
					  
					</ul>
					
					<div class="tab-content">
					  <div id="vm" class="tab-pane fade in active">
						<h3>Select Patients To Add Health Information</h3>
						<table class="table">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Gender</th>
								<th></th>
							</tr>

							@forelse($patients as $patient)
							<tr>
								<td>{{$patient->name}}</td>
								<td>{{$patient->email}}</td>
								<td>{{$patient->gender}}</td>
								<td><a href="{{route('healthinfo.edit',$patient->id)}}" class="btn btn-sm btn-info">View</a><td>
								<td><a href="{{route('addhealthinfo',$patient->id)}}" class="btn btn-sm btn-info">Add Health Info</a><td>
							</tr>
							@empty
							<tr>
								<td colspan="4">No Patient</td>
							</tr>
							@endforelse
						</table>
					  </div>
					  
					 
					  
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
