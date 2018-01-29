@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>{{$armari->name}} <a href="{{ url('armarisview') }}" style="float: right;font-size: 18px;">Armaris List</a></h2>

                <article>
                    {{ $armari->type }}
                </article>

            </div>

        </div>
    </div>
@endsection

