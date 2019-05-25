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
					  <li class="active"><a data-toggle="tab" href="#home">Update Health Information</a></li>
					  
					</ul>
					
					<div class="tab-content">
					  <div id="vm" class="tab-pane fade ">
						<h3>Select Patients To Add Health Information</h3>
						
					  </div>
					  
					  <div id="home" class="tab-pane fade in active">
						<h3>New Patient</h3>
						@forelse($healthinfos as $healthinfo)
						<div class="panel-group">
						 <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse{{$healthinfo->id}}">Report On : {{$healthinfo->created_at}}</a>
						  </h4>
						</div>
						<div id="collapse{{$healthinfo->id}}" class="panel-collapse collapse">
						
							<ul class="list-group">
								<li class="list-group-item">Symptoms:
								{{$healthinfo->symptoms}}
								</li>
								
								<li class="list-group-item">Blood Group:
								{{$healthinfo->bg}}
								</li>
								
								<li class="list-group-item">Genotype:
								{{$healthinfo->genotype}}
								</li>
								
								<li class="list-group-item">Date Collected:
									{{$healthinfo->created_at}}
								</li>
							  </ul>
						
						  </div>
						</div> 
						@empty
						<p class="alert alert-info">No Health Record Found</p>
						@endforelse
					</div>
					  
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
