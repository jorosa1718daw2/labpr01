@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Crear Armario <a href="{{ url('armarisview') }}" style="float: right;font-size: 18px;">Lista de Armarios</a></h2>

                @include('armarisview.errors')

                {!! Form::open(['url' => 'armarisview']) !!}

                @include('armarisview.form', ['submitButtonName' => 'Añadir Armario'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

