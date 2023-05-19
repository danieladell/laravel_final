@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h6> Usuario identificado como {{ auth()->user()->name }}. </h6>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Formulario de matriculación de alumnos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('WIP!') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
