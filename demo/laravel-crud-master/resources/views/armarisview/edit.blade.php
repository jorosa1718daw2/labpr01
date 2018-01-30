@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Edit : {{ $armaris->title }} <a href="{{ url('armarisview') }}" style="float: right;font-size: 18px;">Lista de Armario A</a></h2>

                @include('armarisview.errors')


                {!! Form::model($armaris, ['method' => 'PATCH', 'action' => ['ArmariController@update', $armaris->id]]) !!}

                @include('armarisview.form', ['submitButtonName' => 'Editar Armario A'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

