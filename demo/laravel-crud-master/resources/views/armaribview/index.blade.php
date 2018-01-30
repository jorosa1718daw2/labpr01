@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lista de Armario B<a href="{{ url('armaribview/create') }}" style="float: right;font-size: 18px;">Añadir Productos</a></h2>


                @if(count($armarib))
                    <table class="table table-bordered">
                        <thead>
                        <tr>

                            <th>Nombre Armario</th>
                            <th>Nombre Producto</th>
                            <th>Stock Inicial</th>
                            <th>Stock Actual</th>
                            <th>Proveedor</th>
                            <th>Referencia Proveedor</th>
                            <th>Marca Equipo</th>
                            <th>Numero Lote</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($armarib as $armarib1)
                            <tr>
                                <td>{{ $armarib1->nom_armari }}</td>
                                <td>{{ $armarib1->nom_producte }}</td>
                                <td>{{ $armarib1->stock_inicial }}</td>
                                <td>{{ $armarib1->stock_actual}}</td>
                                <td>{{ $armarib1->proveedor }}</td>
                                <td>{{ $armarib1->referencia_proveedor }}</td>
                                <td>{{ $armarib1->marca_equip }}</td>
                                <td>{{ $armarib1->num_lot }}</td>



                                <td>
                                    <a href="{{ url("armaribview/$armarib1->id/edit")}}" class="btn btn-info" role="button">edit</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'armaribview/' . $armarib1->id)) }}
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

