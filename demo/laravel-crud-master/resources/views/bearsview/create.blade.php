@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>Create Bear <a href="{{ url('bearsview') }}" style="float: right;font-size: 18px;">Bears List</a></h2>

                @include('bearsview.errors')

                {!! Form::open(['url' => 'bearsview']) !!}

                @include('bearsview.form', ['submitButtonName' => 'Add Bear'])

                {!! Form::close() !!}


            </div>

        </div>
    </div>
@endsection

