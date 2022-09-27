@extends('layouts.app')
@section('title', __('Estudios'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
				
				<div class="card-body">
						@include('livewire.estudios.create')
						@include('livewire.estudios.update')
				<div class="table-responsive">
				<div class="card-header">
                        <h3 class="card-title">Lista de Estudios</h3>
						
                    </div>
					<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
					    <i class="fa fa-plus"></i>  Agregar Pacientes
					</div>
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Clave</th>
								<th>Depto</th>
								
								<th>Tomas</th>
								<th>Frecuencia</th>
								<th>Tipoformato</th>
								<th>Notas</th>
								
								<th>Fecha Sync</th>
								<th>Flag Sucursales</th>
								<th>Eliminar</th>
								<th>Sucproceso</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($estudios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Nombre }}</td>
								<td>{{ $row->Clave }}</td>
								<td>{{ $row->depto }}</td>
								
								<td>{{ $row->Tomas }}</td>
								<td>{{ $row->Frecuencia }}</td>
								<td>{{ $row->Tipoformato }}</td>
								<td>{{ $row->Notas }}</td>
								
								<td>{{ $row->fecha_sync }}</td>
								<td>{{ $row->flag_sucursales }}</td>
								<td>{{ $row->eliminar }}</td>
								<td>{{ $row->SucProceso }}</td>
								<td width="90">
								    <a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Estudio id {{$row->id}}? \nDeleted Estudios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $estudios->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@section('css')
   <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
           $('#pacientes').DataTable({
           "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
        });
    });
</script>
@stop