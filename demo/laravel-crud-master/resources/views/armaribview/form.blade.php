<div class="form-group">
    {!! Form::label('nom_armari', 'Nombre armario:') !!}
    {!! Form::text('nom_armari', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('nom_producte', 'Nombre Producto:') !!}
    {!! Form::text('nom_producte', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stock_inicial', 'Stock Inicial:') !!}
    {!! Form::text('stock_inicial', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('stock_actual', 'Stock Actual:') !!}
    {!! Form::text('stock_actual', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    {!! Form::text('proveedor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('referencia_proveedor', ' Referencia Proveedor:') !!}
    {!! Form::text('referencia_proveedor', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('marca_equip', ' Marca equipo:') !!}
    {!! Form::text('marca_equip', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('num_lot', ' Numero Lote:') !!}
    {!! Form::text('num_lot', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonName, ['class' => 'btn btn-primary']) !!}
</div>

