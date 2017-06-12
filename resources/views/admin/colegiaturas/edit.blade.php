@extends ('admin.template.main')

@section('title', 'Editar Colegiatura de: ' . $alumno->nombres . ' '. $alumno->apellidos)

@section('content')

	@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</div>
	@endif

{!!Form::open(['route'=>['admin.colegiaturas.update', $colegiaturas], 'method'=>'PUT']) !!}

	<div class="form-group">
	{!!Form::label('fecha', 'Fecha')!!}
	{!!Form::date('fecha',$colegiaturas->fecha,['class'=>'form-control','placeholder'=> 'dd/mm/aaaa', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('nit', 'Nit')!!}
	{!!Form::text('nit',$colegiaturas->nit,['class'=>'form-control','placeholder'=> 'Nit', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('numerodocumento', 'Número de Documento')!!}
	{!!Form::text('numerodocumento',$colegiaturas->numerodocumento,['class'=>'form-control','placeholder'=> 'Número de documento', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('mes', 'Mes')!!}
	{!!Form::select('mes', [''=>'Seleccione un pago','Inscripción'=>'Inscripción','Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Graduación'=>'Graduación'],$colegiaturas->mes,['class'=>'form-control', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('monto', 'Monto')!!}
	Q{!!Form::number('monto',$colegiaturas->monto,['class'=>'form-control', 'step'=>'0.01','placeholder'=>'####.##', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::label('descripcion', 'Descripción')!!}
	{!!Form::textarea('descripcion',$colegiaturas->descripcion,['class'=>'form-control','placeholder'=> 'Descripción', 'rows'=>'2', 'required'])!!}
	</div>

	<div class="form-group">
	{!!Form::hidden('alumno_id',$alumno->id,['class'=>'form-control'])!!}
	</div>


	<div class="form-group">
	{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	<a class="btn btn-danger" href="{{route('admin.colegiaturas.detalles', $alumno->id)}}" role="button">Cancelar</a>
	</div>

{!!Form::close()!!}

@endsection