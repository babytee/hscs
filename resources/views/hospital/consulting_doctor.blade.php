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
					  
					  <li class="active"><a data-toggle="tab" href="#home">Consulting Doctor</a></li>
					  <li><a href="#vm" data-toggle="tab">Patients Health History </a></li>
					</ul>
					
					<div class="tab-content">
					  
					  <div id="home" class="tab-pane fade in active">
					  
						@if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
						@endif
						<h3>Consulting Doctor</h3>
							<form method="POST" action="{{route('doctor.store')}}">
								{{ csrf_field() }}
							<p>Doctor Name:
							<input type="name" name="name"  class="form-control">
							</p>
							
							<p>Email:
							<input type="email" name="email" class="form-control">
							</p>
							
							<p>Message:
							<textarea name="content" class="form-control"></textarea>
							</p>
							
							<p>
							<input type="submit" name="submit" value="ADD" class="btn btn-sm btn-primary">
							</p>
						</form>
					  </div>
					  
					  
					  <div id="vm" class="tab-pane fade ">
						<h3>Doctor Consultation History</h3>
						@forelse($doctors as $doctor)
							<div class="panel panel-default">
							  <div class="panel-heading">Name:{{$doctor->name}} | Email:{{$doctor->email}} | Date:{{$doctor->created_at}}</div>
							  <div class="panel-body">Message Content:<br>
								{{$doctor->content}}
							  </div>
							</div>
						@empty
							<div class="panel panel-default">
							  <div class="panel-body">No doctor has been consulted<br>
							  </div>
							</div>
						@endforelse
						
					  </div>
					  
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
