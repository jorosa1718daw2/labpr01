@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>{{$bears->name}} <a href="{{ url('bearsview') }}" style="float: right;font-size: 18px;">Bears List</a></h2>

                <article>
                    {{ $bears->type }}
                </article>

            </div>

        </div>
    </div>
@endsection

