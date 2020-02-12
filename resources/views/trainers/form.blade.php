<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('avatar', 'Avatar') !!}
    <div class="custom-file">
        {!! Form::file('avatar', ['class' => 'custom-file-input', 'accept' => '.png, .jpg, .jpeg']) !!}
        {!! Form::label('inputGroupFile04', 'Seleccionar archivo', ['class' => 'custom-file-label']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::textarea('descripcion', null, ['rows' => 3, 'class' => 'form-control']) !!}
</div>