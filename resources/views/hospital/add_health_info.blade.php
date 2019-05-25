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
					  <li><a href="{{route('healthinfo.index')}}">Patients Health History </a></li>
					  <li class="active"><a data-toggle="tab" href="#home">Add Health Information</a></li>
					  
					</ul>
					
					<div class="tab-content">
					  <div id="vm" class="tab-pane fade ">
						<h3>Select Patients To Add Health Information</h3>
						
					  </div>
					  
					  <div id="home" class="tab-pane fade in active">
					  
						@if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
							
                        </div>
						@endif
						<h3>New Patient</h3>
							<form method="POST" action="{{route('healthinfo.store')}}">
								{{ csrf_field() }}
							<p>Patient ID:
							<input type="text" name="patient_id" value="{{$id}}" class="form-control">
							</p>
							
							<p>Symptoms:
							<input type="text" name="symptoms" class="form-control">
							</p>
							
							<p>Blood Group:
								<select name="bg" class="form-control">
									<option value="O">O</option>
									<option value="A">A</option>
									<option value="AB">AB</option>
								</select>
							</p>
							
							<p>Genotype:
								<select name="genotype" class="form-control">
									<option value="AA">AA</option>
									<option value="AC">AC</option>
									<option value="AS">AS</option>
									<option value="SC">SC</option>
									<option value="SS">SS</option>
								</select>
							</p>
							
							<p>
							<input type="submit" name="submit" value="ADD" class="btn btn-sm btn-primary">
							</p>
						</form>
					  </div>
					  
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
