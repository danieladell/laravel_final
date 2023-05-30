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

                    <?php
                        $con = new mysqli("192.168.1.133","laravel_user","Hola01","laravel");

                        $sql = "select * from alumnos";

                        $query = $con->query($sql);

                        if($query){
                            while($r  = $query->fetch_object()){
                                echo $r->id.",";
                                echo $r->username.",";
                                echo $r->firstname.",";
                                echo $r->lastname.",";
                                echo $r->email.",";
                                echo $r->password.",";
                                echo $r->course1.",";
                                echo $r->institution."\n";
                            }
                        }

                        header('Content-Type: application/csv');
                        header('Content-Disposition: attachment; filename=/home/admin01/alumnos.csv;');

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
