@extends('layouts.app')
@section('title', __('Solicitud'))
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h3>Detalle de la Orden</h3>
            </div>
        </div>
        <div class="row">
           @if($selected_id > 0)
            <div class="col-md-8">
                <div class="card card-light">
                    <div class="card-body" style="margin: 5px !important; padding: 5px !important;">
                        <div id="detalle-orden" class="container">
                            <div class="row">
                                
                                <div class="col-7 col-md-8 col-xl-9">
                                    <p style="text-align:left">{{$paciente->Nombre}}</p>
                                </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-6 col-md-1 col-xl-2" style="text-align:center">
                                                <h5>Sexo:</h5>
                                            </div>
                                            <div class="col-6 col-md-2 col-xl-2" style="text-align:center">
                                                <p>{{$paciente->Sexo}}</p>
                                            </div>
                                            <div class="col-6 col-md-3 col-xl-2" style="text-align:center">
                                                <h5>Fecha Nacimiento:</h5>
                                            </div>
                                            <div class="col-6 col-md-2 col-xl-2" style="text-align:center">
                                                <p>{{$paciente->FecNac}}</p>
                                                
                                            </div>
                                                                                   
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-4 col-md-3 col-xl-2">
                                        <h5>Empresa:</h5>
                                    </div>
                                    <div class="col-7 col-md-8 col-xl-9">
                                        <input class="col-6 col-md-2 col-xl-2" value="{{$paciente->empresa->Nombre}}" disabled>
                                    </div>
                                </div>
                                <div class="card-body">
						          <button type="button" wire:click="doAction(0)" class="btn btn-outline-secondary btn-rounded btn-icon float-right"><i class="fas fa-trash text-danger"></i></button>
					            </div>
                            </div>
                        </div>
                    </div>
            </div>    </div>
                <div class="col-md-4">
                    <div class="card card-light">
                        <div class="card-body" style="margin: 5px !important; padding: 5px !important;">
                            <div id="asignacion-orden" class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Orden:</h5>
                                    </div>
                                    <div class="col-7">
                                        <p style="text-align:left" wire:model="Solicitud">--Nuevo01--</p>
                                    </div>
                                </div>
                                
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Sucursal:</h5>
                                    </div>
                                    <div class="col-7">
                                        <p style="text-align:left" wire:model="sucursal">01</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Sucursal paciente:</h5>
                                    </div>
                                    <div class="col-7">
                                        <p style="text-align:left" wire:model="suc_paciente">01</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Sucursal doctor:</h5>
                                    </div>
                                    <div class="col-7">
                                        <p style="text-align:left" wire:model="suc_doctor">01</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>PDF:</h5>
                                    </div>
                                    <div class="col-7">
                                        <input type="text"  wire:model="SolPDF">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Procesamiento:</h5>
                                    </div>
                                    <div class="col-7">
                                        <input type="number"  wire:model="procesar">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Eliminación:</h5>
                                    </div>
                                    <div class="col-7">
                                        <input type="number"  wire:model="eliminar">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Sucursal empresa:</h5>
                                    </div>
                                    <div class="col-7">
                                        <p style="text-align:left" wire:model="suc_empresa">01</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Estatus:</h5>
                                    </div>
                                    <div class="col-7">
                                       <select class="form-control form-control-lg" wire:model="Estatus">
                                           <option value="A">A</option>
                                           <option value="D">D</option>
                                       </select>   
                                    </div>
                                </div>
                                <hr />
                                <!--Fecha-->
                               
                                <hr />
                               <!--Fecha de entrega-->
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Tipo de toma:</h5>
                                    </div>
                                    <div class="col-7">
                                       <select class="form-control form-control-lg" wire:model="Tipo_toma">
                                           <option value="Local">Local</option>
                                           <option value="Domicilio">Domicilio</option>
                                       </select>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Pase:</h5>
                                    </div>
                                    <div class="col-7">
                                       <input class="col-6 col-md-2" value="pase" wire:model="pase">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Nota:</h5>
                                    </div>
                                    <div class="col-7">
                                       <input class="col-6 col-md-2 col-xl-2" value="Notas" wire:model="Notas">
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-5">
                                        <h5>Folio:</h5>
                                        <input type="number" value="Folio" wire:model="Folio">
                                    </div>
                                   
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
               @else
               <div class="col-4 col-md-3 col-xl-2">
                    <h5>Paciente:</h5>
                    <select class="form-control form-control-lg" wire:model.lazy="selected_id">
                        <option value="Elegir">--Seleccione--</option>
                        @foreach ($pacientes as $paciente)
                        <option value="{{$paciente->id}}">{{$paciente->Nombre}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
           </div>
        </div>
        
        <div class="row">
		    <div class="col-md-5 grid-margin grid-margin-10-0">
			    <div class="form-group" wire:ignore>
				   <label><strong>Escoga el estudio:</strong></label>
				   <select class="form-control form-control-lg" wire:model="id_estudio">
					  <option value="Elegir">--Seleccione--</option>
					  @foreach ($estudios as $estudio)
					  <option value="{{$estudio->id}}">{{$estudio->Nombre}}</option>
					  @endforeach
				   </select>
			   </div>
		   </div>    
		   <div class="col-md-2">
               <div class="form-group">
				   <label><strong>Tomas:</strong></label>
				   <input type="number" wire:model="Solicitud" class="form-control" placeholder="Solicitud">
			   </div>
			   <div class="form-group">
				   <label><strong>Tomas:</strong></label>
				   <input type="number" wire:model="Tomas" class="form-control" placeholder="Tomas">
			   </div>
               <div class="form-group">
				   <label><strong>Sucursal:</strong></label>
				   <select class="form-control form-control-lg" wire:model="sucursal">
					  <option value="01">01</option>
				   </select>
			   </div>
               
		   </div>
		   <div class="col-md-1">
			<div class="form-group">
				<button class="btn btn-primary float-right mt-4 ml-2" wire:click.prevent="addProduct()" class="btn btn-primary">Agregar</button>
			</div>
		</div>
	</div>
        <!--Se asigna el estatus del recibo si esta impreso o no para enviar parametro-->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-light">
                    <div class="card-body">
                    <div class="table-responsive w-100">
							<table class="table">
								<thead>
									<tr class="bg-dark text-white">
										<th>#</th>
										<th>Descripción</th>
										<th class="text-right">Tomas</th>
										
										<th class="text-right">Acciones</th>
									</tr>
								</thead>
								<tbody>
									
									<tr class="text-center" >
										
										
										
										<td>
											<button class="btn-danger" >X</button>
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>