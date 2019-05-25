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
					  
					  <li class="active"><a data-toggle="tab" href="#home">New Reporting</a></li>
					  <li><a href="#vm" data-toggle="tab">Report History</a></li>
					</ul>
					
					<div class="tab-content">
					  
					  <div id="home" class="tab-pane fade in active">
					  
						@if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
						@endif
						<h3>Consulting Doctor</h3>
							<form method="POST" action="{{route('report.store')}}">
								{{ csrf_field() }}
							
							<p>Report Title:
							<input type="text" name="report_title" class="form-control">
							</p>
							
							<p>Report Content:
							<textarea name="report_content" class="form-control"></textarea>
							</p>
							
							<p>
							<input type="submit" name="submit" value="ADD" class="btn btn-sm btn-primary">
							</p>
						</form>
					  </div>
					  
					  
					  <div id="vm" class="tab-pane fade ">
						<h3>Report History</h3>
						@forelse($reports as $report)
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse{{$report->id}}">
										{{$report->report_title}} | Date:{{$report->created_at}}</a>
									</h4>
								</div>
								<div id="collapse{{$report->id}}" class="panel-collapse collapse">
								  <div class="panel-heading">Name:{{$report->report_title}} | Date:{{$report->created_at}}</div>
								  <div class="panel-body">Message Content:<br>
									{{$report->report_content}}
								  </div>
								 </div>
							</div>
						</div>
						@empty
							<div class="panel panel-default">
							  <div class="panel-body">No Report<br>
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
