@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Edit : {{ $armarib->title }} <a href="{{ url('armaribview') }}" style="float: right;font-size: 18px;">Lista de Armarios</a></h2>

                @include('armaribview.errors')


                {!! Form::model($armaris, ['method' => 'PATCH', 'action' => ['ArmariBController@update', $armarib->id]]) !!}

                @include('armaribview.form', ['submitButtonName' => 'Editar Armario!!'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

