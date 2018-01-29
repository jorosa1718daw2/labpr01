@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lista de Armarios <a href="{{ url('armarisview/create') }}" style="float: right;font-size: 18px;">Añadir Armario</a></h2>


                @if(count($armaris))
                    <table class="table table-bordered">
                        <thead>
                        <tr>

                            <th>Nombre Armario</th>
                            <th>Nombre Producto</th>
                            <th>Stock Inicial</th>
                            <th>Stock Actual</th>
                            <th>Proveedor</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($armaris as $armari)
                            <tr>
                                <td>{{ $armari->nom_armari }}</td>
                                <td>{{ $armari->nom_producte }}</td>
                                <td>{{ $armari->stock_inical }}</td>
                                <td>{{ $armari->stock_actual}}</td>
                                <td>{{ $armari->proveedor }}</td>
                                <td>
                                    <a href="{{ url("armarisview/$armari->id/edit")}}" class="btn btn-info" role="button">edit</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'armarisview/' . $armari->id)) }}
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

