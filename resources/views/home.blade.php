@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 class="text-center">UNIVERSIDAD GERARDO BARRIOS</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="container">
                                <img src="{{asset('images/banner1.jpg')}}" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
