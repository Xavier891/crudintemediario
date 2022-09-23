
@section('title', __('Pacientes'))
<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4>
							Cátalogo de Pacientes </h4>
						</div>
						<div class="row">
                        <div class="col-12">
                            <div class="card card-light">
                   
                          </div>
                       </div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<!--<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Pacientes">
						</div>-->
						
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.pacientes.create')
						@include('livewire.pacientes.update')
				<div class="table-responsive">
				    <div class="card-header">
                        <h3 class="card-title">Lista de Pacientes</h3>
						
                    </div>
					<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
					    <i class="fa fa-plus"></i>  Agregar Pacientes
					</div>
					<table id="pacientes" class="table table-striped" style="width:100%">
						<thead class="thead">
							<tr> 
								<th scope="col">Sucursal</th>
								<th scope="col">Paciente</th>
								<th scope="col">Fecha de Nacimiento</th>
								<td scope="col">Acciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($pacientes as $row)
							<tr>
								<td>{{ $row->sucursal }}</td>
								<td>{{ $row->Nombre }} {{ $row->Paterno }} {{ $row->Materno }}</td>
								<td>{{ $row->FecNac }}</td>
								
								<td>
								
									
									<a data-toggle="modal" data-target="#updateModal" class="btn-xs btn-primary fa fa fa-pencil" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i></a>							 
									<a class="btn-xs btn btn-danger" onclick="confirm('Confirm Delete Paciente id {{$row->id}}? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i>  </a>   
									
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $pacientes->links() }}
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
