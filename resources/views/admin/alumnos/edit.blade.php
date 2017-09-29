@extends ('admin.template.main')
@section('title', 'Editar '. $alumno->nombres)
@section('content')

{!! Form::open(['route'=>['admin.alumnos.update', $alumno], 'method'=>'PUT']) !!}

<div class="form-group">
	{!!Form::label('nombres', 'Nombres')!!}
	{!!Form::text('nombres',$alumno->nombres,['class'=>'form-control','placeholder'=> 'Nombres', 'required'])!!}
	</div>
	<div class="form-group">
	{!!Form::label('apellidos', 'Apellidos')!!}
	{!!Form::text('apellidos',$alumno->apellidos,['class'=>'form-control','placeholder'=> 'Apellidos', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('carnet', 'Carnet')!!}
	{!!Form::text('carnet',$alumno->carnet,['class'=>'form-control','placeholder'=> 'Carnet', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('encargado', 'Encargado')!!}
	{!!Form::text('encargado',$alumno->encargado,['class'=>'form-control','placeholder'=> 'Encargado', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('telefono', 'Telefono')!!}
	{!!Form::text('telefono',$alumno->telefono,['class'=>'form-control','placeholder'=> 'Telefono', 'required'])!!}
	</div>



	<div class="form-group">
	{!!Form::label('carrera_id', 'Carrera')!!}
	{!!Form::select('carrera_id', $carreras, $alumno->carrera_id, ['class'=>'form-control', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	<a class="btn btn-danger" href="{{route('admin.alumnos.index')}}" role="button">Cancelar</a>
	</div>



{!!Form::close()!!}



@endsection
