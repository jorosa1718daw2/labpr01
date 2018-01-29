@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h2>Create Article <a href="{{ url('articles') }}" style="float: right;font-size: 18px;">Articles List</a></h2>

            @include('articles.errors')

            {!! Form::open(['url' => 'articles']) !!}
               
            @include('articles.form', ['submitButtonName' => 'Add Bear'])

            {!! Form::close() !!}


        </div>
        
    </div>
</div>
@endsection

