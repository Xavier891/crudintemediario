<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Estudio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="NombreU" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Clave"></label>
                <input wire:model="Clave" type="text" class="form-control" id="ClaveU" placeholder="Clave">@error('Clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="depto"></label>
                <input wire:model="depto" type="text" class="form-control" id="deptoU" placeholder="Depto">@error('depto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Abreviatura"></label>
                <input wire:model="Abreviatura" type="text" class="form-control" id="AbreviaturaU" placeholder="Abreviatura">@error('Abreviatura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tomas"></label>
                <input wire:model="Tomas" type="text" class="form-control" id="TomasU" placeholder="Tomas">@error('Tomas') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Frecuencia"></label>
                <input wire:model="Frecuencia" type="text" class="form-control" id="FrecuenciaU" placeholder="Frecuencia">@error('Frecuencia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tipoformato"></label>
                <input wire:model="Tipoformato" type="text" class="form-control" id="TipoformatoU" placeholder="Tipoformato">@error('Tipoformato') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Notas"></label>
                <input wire:model="Notas" type="text" class="form-control" id="NotasU" placeholder="Notas">@error('Notas') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TiempoProceso"></label>
                <input wire:model="TiempoProceso" type="text" class="form-control" id="TiempoProcesoU" placeholder="Tiempoproceso">@error('TiempoProceso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TipoMuestra"></label>
                <input wire:model="TipoMuestra" type="text" class="form-control" id="TipoMuestraU" placeholder="Tipomuestra">@error('TipoMuestra') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Instrucciones"></label>
                <input wire:model="Instrucciones" type="text" class="form-control" id="InstruccionesU" placeholder="Instrucciones">@error('Instrucciones') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DatosTecnicos"></label>
                <input wire:model="DatosTecnicos" type="text" class="form-control" id="DatosTecnicosU" placeholder="Datostecnicos">@error('DatosTecnicos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Encabezado"></label>
                <input wire:model="Encabezado" type="text" class="form-control" id="EncabezadoU" placeholder="Encabezado">@error('Encabezado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tubo"></label>
                <input wire:model="Tubo" type="text" class="form-control" id="TuboU" placeholder="Tubo">@error('Tubo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Noaplicadescuento"></label>
                <input wire:model="Noaplicadescuento" type="text" class="form-control" id="NoaplicadescuentoU" placeholder="Noaplicadescuento">@error('Noaplicadescuento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="esperfil"></label>
                <input wire:model="esperfil" type="text" class="form-control" id="esperfilU" placeholder="Esperfil">@error('esperfil') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursalU" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_act"></label>
                <input wire:model="fecha_act" type="text" class="form-control" id="fecha_actU" placeholder="Fecha Act">@error('fecha_act') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_sync"></label>
                <input wire:model="fecha_sync" type="text" class="form-control" id="fecha_syncU" placeholder="Fecha Sync">@error('fecha_sync') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="flag_sucursales"></label>
                <input wire:model="flag_sucursales" type="text" class="form-control" id="flag_sucursalesU" placeholder="Flag Sucursales">@error('flag_sucursales') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="eliminar"></label>
                <input wire:model="eliminar" type="text" class="form-control" id="eliminarU" placeholder="Eliminar">@error('eliminar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SucProceso"></label>
                <input wire:model="SucProceso" type="text" class="form-control" id="SucProcesoU" placeholder="Sucproceso">@error('SucProceso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
