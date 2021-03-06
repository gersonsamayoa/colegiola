<h1>Factura</h1>

<table class="table table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Nit</th>
          <th>Número de Documento</th>
          <th>Mes</th>
          <th>Monto</th>
          <th>Descripción</th>
          <th>Nombre</th>
          <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{$colegiaturas->id}}</td>
          <td>{{date("d-m-Y", strtotime($colegiaturas->fecha))}}</td>
          <td>{{$colegiaturas->nit}}</td>
          <td>{{$colegiaturas->numerodocumento}}</td>
          <td>{{$colegiaturas->mes->nombre}}</td>
          <td>Q{{number_format($colegiaturas->monto, '2','.' , ',')}}</td>
          <td>{{$colegiaturas->descripcion}}</td>
          <td>{{$colegiaturas->alumno->nombres}}</td>
          <td>{{$colegiaturas->alumno->apellidos}}</td>
        </tr>
    </tbody>
</table>
