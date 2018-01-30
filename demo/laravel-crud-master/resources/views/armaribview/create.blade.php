@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Crear Armario <a href="{{ url('armaribview') }}" style="float: right;font-size: 18px;">Lista de Armarios</a></h2>

                @include('armaribview.errors')

                {!! Form::open(['url' => 'armaribview']) !!}

                @include('armaribview.form', ['submitButtonName' => 'Añadir Armario'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

