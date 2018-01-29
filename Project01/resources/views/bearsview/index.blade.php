@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Bears List <a href="{{ url('bearsview/create') }}" style="float: right;font-size: 18px;">Add Bear</a></h2>


                @if(count($bears))
                    <table class="table table-bordered">
                        <thead>
                        <tr>

                            <th>Name</th>
                            <th>Type</th>
                            <th>Danger Level</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($bears as $bear)
                            <tr>
                                <td><a href="{{ url('/bearsview', $bear->id) }}">{{ $bear->name }}</a></td>
                                <td>{{ $bear->type }}</td>
                                <td>{{ $bear->danger_level }}</td>
                                <td>
                                    <a href="{{ url("bearsview/$bear->id/edit")}}" class="btn btn-info" role="button">edit</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'bearsview/' . $bear->id)) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('delete', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @endif


            </div>
        </div>
    </div>
@endsection

