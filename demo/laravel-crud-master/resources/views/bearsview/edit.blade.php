@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Edit : {{ $bear->title }} <a href="{{ url('bearsview') }}" style="float: right;font-size: 18px;">Bears List</a></h2>

                @include('bearsview.errors')


                {!! Form::model($bear, ['method' => 'PATCH', 'action' => ['BearsController@update', $bear->id]]) !!}

                @include('bearsview.form', ['submitButtonName' => 'Edit the Bear'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

