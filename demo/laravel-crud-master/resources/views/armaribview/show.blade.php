@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <h2>{{$armarib1->name}} <a href="{{ url('armaribview') }}" style="float: right;font-size: 18px;">Armaris List</a></h2>

                <article>
                    {{ $armarib1->type }}
                </article>

            </div>

        </div>
    </div>
@endsection

