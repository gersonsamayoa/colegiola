@extends('admin.template.main')

@section('title','Editar Usuario '. $user->name)

@section('content')
	
	{!! Form::open(['route' =>['admin.usuarios.update', $user], 'method'=>'PUT']) !!}

		<div class="form-group">
		{!!Form::label('name','Nombre')!!}
		{!!Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre Completo','required'])!!}
		</div>

		<div class="form-group">
		{!!Form::label('email','Correo Electrónico')!!}
		{!!Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'example@correo.com','required'])!!}
		</div>

		<div class="form-group">
		{!!Form::label('type','Tipo')!!}
		{!!Form::select('type', ['user'=>'Usario','admin'=>'Administrador'], $user->type, ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
			<a href="{{route('admin.usuarios.index')}}" class="btn btn-info">Regresar</a><hr>
		</div>

	{!! Form::close() !!}
@endsection