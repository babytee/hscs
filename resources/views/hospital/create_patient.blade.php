@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">HSC Register New Patient</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

						
						@if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
						@endif
					<form method="POST" action="{{route('patient.store')}}">
					{{ csrf_field() }}
						<p>Name:
						<input type="text" name="name" class="form-control">
						</p>
						
						<p>Email:
						<input type="email" name="email" class="form-control">
						</p>
						
						<p>Gender:
						</span><input type="radio" name="gender" value="Male">Male</span>
						</span><input type="radio" name="gender" value="Feale">Feale</span>
						</p>
						
						<p>
						<input type="submit" name="submit" value="Register" class="btn btn-sm btn-primary">
						</p>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
