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

                    <ul class="nav navbar-nav">
						<li><a href="{{route('patient.index')}}">Patients</a></li>
						<li><a href="{{route('healthinfo.index')}}">Getting Patient Health Information</a></li>
						<li><a href="{{route('doctor.index')}}">Consulting With The Doctor</a></li>
						<li><a href="{{route('report.index')}}">Reporting</a></li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
