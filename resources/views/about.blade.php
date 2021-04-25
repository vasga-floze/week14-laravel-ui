
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Equipo</h1> 

                    <!--Se crean las tarjetas para mostrar el avatar y informacion de los estudiantes-->
                    <div class="card-group" style="width: 43rem;">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('images/avatarKilmar.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Estudiante</h5>
                                <p class="card-text">Roberto Kilmar Chevez Reyes</p>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('images/avatarVasti.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Estudiante</h5>
                                <p class="card-text">Vasti Gabriela Flores Zelaya</p>
                            </div>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection