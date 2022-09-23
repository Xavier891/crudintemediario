<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
		    <form>
            <div class="col-6" style="text-align:left">
                <p wire:model="sucursal">03<label>- MATRIZ -</label></p>
            </div>
            
            <div class="form-group">
                <label for="Clave"></label>
                <input wire:model="Clave" type="text" class="form-control" id="Clave" placeholder="Clave">@error('Clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Paciente"></label>
                <input wire:model="Paciente" type="text" class="form-control" id="Paciente" placeholder="Paciente">@error('Paciente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Paterno"></label>
                <input wire:model="Paterno" type="text" class="form-control" id="Paterno" placeholder="Paterno">@error('Paterno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Materno"></label>
                <input wire:model="Materno" type="text" class="form-control" id="Materno" placeholder="Materno">@error('Materno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FecNac"></label>
                <input wire:model="FecNac" type="text" class="form-control" id="FecNac" placeholder="Fecnac">@error('FecNac') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Sexo"></label>
                <input wire:model="Sexo" type="text" class="form-control" id="Sexo" placeholder="Sexo">@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Calle"></label>
                <input wire:model="Calle" type="text" class="form-control" id="Calle" placeholder="Calle">@error('Calle') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Numero"></label>
                <input wire:model="Numero" type="text" class="form-control" id="Numero" placeholder="Numero">@error('Numero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Rfc"></label>
                <input wire:model="Rfc" type="text" class="form-control" id="Rfc" placeholder="Rfc">@error('Rfc') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estudios"></label>
                <input wire:model="Estudios" type="text" class="form-control" id="Estudios" placeholder="Estudios">@error('Estudios') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Ult_solicitud"></label>
                <input wire:model="Ult_solicitud" type="text" class="form-control" id="Ult_solicitud" placeholder="Ult Solicitud">@error('Ult_solicitud') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fec_alta"></label>
                <input wire:model="Fec_alta" type="text" class="form-control" id="Fec_alta" placeholder="Fec Alta">@error('Fec_alta') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe"></label>
                <input wire:model="Importe" type="text" class="form-control" id="Importe" placeholder="Importe">@error('Importe') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe_Acum"></label>
                <input wire:model="Importe_Acum" type="text" class="form-control" id="Importe_Acum" placeholder="Importe Acum">@error('Importe_Acum') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Saldo"></label>
                <input wire:model="Saldo" type="text" class="form-control" id="Saldo" placeholder="Saldo">@error('Saldo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="EmpresaAnt"></label>
                <input wire:model="EmpresaAnt" type="text" class="form-control" id="EmpresaAnt" placeholder="Empresaant">@error('EmpresaAnt') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="suc_empresa"></label>
                <input wire:model="suc_empresa" type="text" class="form-control" id="suc_empresa" placeholder="Suc Empresa">@error('suc_empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Empresa"></label>
                <input wire:model="Empresa" type="text" class="form-control" id="Empresa" placeholder="Empresa">@error('Empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Foraneo"></label>
                <input wire:model="Foraneo" type="text" class="form-control" id="Foraneo" placeholder="Foraneo">@error('Foraneo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Descuento"></label>
                <input wire:model="Descuento" type="text" class="form-control" id="Descuento" placeholder="Descuento">@error('Descuento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Titular"></label>
                <input wire:model="Titular" type="text" class="form-control" id="Titular" placeholder="Titular">@error('Titular') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estado"></label>
                <input wire:model="Estado" type="text" class="form-control" id="Estado" placeholder="Estado">@error('Estado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Municipio"></label>
                <input wire:model="Municipio" type="text" class="form-control" id="Municipio" placeholder="Municipio">@error('Municipio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Localidad"></label>
                <input wire:model="Localidad" type="text" class="form-control" id="Localidad" placeholder="Localidad">@error('Localidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Cp"></label>
                <input wire:model="Cp" type="text" class="form-control" id="Cp" placeholder="Cp">@error('Cp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Colonia"></label>
                <input wire:model="Colonia" type="text" class="form-control" id="Colonia" placeholder="Colonia">@error('Colonia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Credencial"></label>
                <input wire:model="Credencial" type="text" class="form-control" id="Credencial" placeholder="Credencial">@error('Credencial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NumCredencial"></label>
                <input wire:model="NumCredencial" type="text" class="form-control" id="NumCredencial" placeholder="Numcredencial">@error('NumCredencial') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Telefono"></label>
                <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NumEmpleado"></label>
                <input wire:model="NumEmpleado" type="text" class="form-control" id="NumEmpleado" placeholder="Numempleado">@error('NumEmpleado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Pais"></label>
                <input wire:model="Pais" type="text" class="form-control" id="Pais" placeholder="Pais">@error('Pais') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cliente"></label>
                <input wire:model="cliente" type="text" class="form-control" id="cliente" placeholder="Cliente">@error('cliente') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_act"></label>
                <input wire:model="fecha_act" type="text" class="form-control" id="fecha_act" placeholder="Fecha Act">@error('fecha_act') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_sync"></label>
                <input wire:model="fecha_sync" type="text" class="form-control" id="fecha_sync" placeholder="Fecha Sync">@error('fecha_sync') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="flag_sucursales"></label>
                <input wire:model="flag_sucursales" type="text" class="form-control" id="flag_sucursales" placeholder="Flag Sucursales">@error('flag_sucursales') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="eliminar"></label>
                <input wire:model="eliminar" type="text" class="form-control" id="eliminar" placeholder="Eliminar">@error('eliminar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="enviarwhatsapp"></label>
                <input wire:model="enviarwhatsapp" type="text" class="form-control" id="enviarwhatsapp" placeholder="Enviarwhatsapp">@error('enviarwhatsapp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Paciente</h4>
                <button type="button" href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarDialogo()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="EditaContainer">
                   <form class="frmPacientes" id="frmPacientes">
                       <div id="frm-pacientes" class="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="#General" aria-controls="" data-toggle="tab" role="tab" aria-selected="true">Datos Personales</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#Facturacion" aria-controls="" data-toggle="tab" role="tab" aria-selected="false">Datos de facturación (Opcional)</a>
                                </li>
                           </ul>

                           <div class="tab-content">
                               <div role="tabpanel" class="tab-pane active" id="General">
                                   <div class="card">
                                   <input name="__RequestVerificationToken" type="hidden" value="EBoihkmTSyGPkFROmVZy_rXhOXFjPU_axAcU39qQez5F81mlXol-hRLiA2T6dwCLV6nKcYs4dcAqlrUr5Zv135VzQsA1">
                                   <input value="00" id="sucursal" name="sucursal" type="hidden">
                    
                                   <div class="card-body">
                                       <div class="row">
                                            <div class="col-6" style="text-align:right">
                                                <label class="control-label" for="sucursal">Sucursal:</label>
                                            </div>
                                            <div class="col-6" style="text-align:left">
                                                <p wire:model="sucursual">00<strong>- MATRIZ</strong></p>
                                            </div>                            
                                        </div>
                                        <!--Clave del paciente-->
                                        <div class="form-group" hidden>
                                            <label for="Clave"></label>
                                            <p wire:model="Clave" class="form-control" id="Clave">000000</p>
                                        </div>
                                        <!--Paciente-->
                                        <div class="form-group" hidden>
                                            <label for="Paciente"></label>
                                            <p wire:model="Paciente" class="form-control" id="Paciente">000000</p>
                                        </div>
                                        <!--------------------Nombre------------------->
                                        <div class="form-group">
                                           <label class="control-label">Nombre:</label><b class="obligatorio">(*)</b>
                                           <input class="form-control text-box single-line" id="Nombre" maxlength="50" name="Nombre" type="text" value="" wire:model="Nombre">
                                           <p style="color:#ce2323" id="warning_Nombre"></p>
                                        </div>
                                        <!--------------------Nombre------------------->
                                        <div class="form-group">
                                            <label class="control-label">Apellido Paterno:</label><b class="obligatorio">(*)</b>
                                            <input class="form-control text-box single-line" id="Paterno" maxlength="50" name="Paterno" type="text" value="" wire:model="Paterno">
                                            <p style="color:#ce2323" id="warning_Paterno"></p>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label">Apellido Materno:</label>
                                           <input class="form-control text-box single-line" id="Materno" maxlength="50" name="Materno" type="text" value="" wire:model="Materno">
                                           <p class="warnings" id="warning_Materno"></p>
                                        </div>
                                        <div class="form-group">
                                           <label class="control-label" for="FecNac">Fecha de nacimiento:</label><b class="obligatorio">(*)</b>
                                           <input value="2022-09-22" class="form-control text-box single-line" id="FecNac" maxlength="10" name="FecNac" type="date">
                                           <p style="color:#ce2323" id="warning_FecNac"></p>
                                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Sexo">Género:</label><b class="obligatorio">(*)</b>
                            <div class="form-check">
                                <input checked="True" class="form-check-input" id="Sexo" name="Sexo" type="radio" value="1"><label class="form-check-label" for="Hombre">Hombre</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="Sexo" name="Sexo" type="radio" value="0"><label class="form-check-label" for="Mujer">Mujer</label>
                            </div>
                            <p style="color:#ce2323" id="warning_Sexo"></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="EmpresaPaciente">Empresa:</label><b class="obligatorio">(*)</b>
                            <select class="form-control select2-hidden-accessible" id="EmpresaPaciente" name="EmpresaPaciente" data-select2-id="EmpresaPaciente" tabindex="-1" aria-hidden="true"><option selected="selected" value="00|999" data-select2-id="21">PÚBLICO EN GENERAL</option>
</select><span class="select2 select2-container select2-container--classic" dir="ltr" data-select2-id="20" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-EmpresaPaciente-container"><span class="select2-selection__rendered" id="select2-EmpresaPaciente-container" role="textbox" aria-readonly="true" title="PÚBLICO EN GENERAL"><span class="select2-selection__clear" title="Remove all items" data-select2-id="22">×</span>PÚBLICO EN GENERAL</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <p style="color:#ce2323" id="warning_EmpresaPaciente"></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Telefono">Teléfono:</label><br>
                            <input class="form-control text-box single-line" id="Telefono" maxlength="10" name="Telefono" type="tel" value="">
                            <p style="color:#ce2323" id="warning_Telefono"></p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email:</label>
                            <input class="form-control text-box single-line" id="email" maxlength="70" name="email" type="email" value="">
                            <p style="color:#ce2323" id="warning_email"></p>
                        </div>
                        <div class="form-group">
                            <input data-val="true" data-val-required="The Enviar Whatsapp field is required." id="enviarwhatsapp" name="enviarwhatsapp" type="checkbox" value="true"><input name="enviarwhatsapp" type="hidden" value="false">
                            <label class="form-check-label" for="Enviar_por_Whatsapp">Enviar por Whatsapp</label>
                        </div>
                        <div class="form-group">
                            <p style="color:#ce2323" id="aviso"></p>
                        </div>
                    </div>                                                               
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="Facturacion">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">                           
                            <label class="control-label" for="cliente">Cliente:</label>                                                       
                            <input class="form-control text-box single-line" id="cliente" maxlength="30" name="cliente" type="text" value="">                         
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Rfc">RFC:</label>                                                        
                            <input class="form-control text-box single-line" id="Rfc" maxlength="30" name="Rfc" type="text" value="">
                            <p style="color:#ce2323" id="warning_Rfc"></p>                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Calle">Calle:</label>
                            <input class="form-control text-box single-line" id="Calle" maxlength="50" name="Calle" type="text" value="">                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Numero">Número:</label>
                            <input class="form-control text-box single-line" id="Numero" maxlength="10" name="Numero" type="text" value="">                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Colonia">Colonia:</label>                            
                            <input class="form-control text-box single-line" id="Colonia" maxlength="25" name="Colonia" type="text" value="">                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Cp">Código Postal:</label>
                            <input class="form-control text-box single-line" id="Cp" maxlength="10" name="Cp" type="text" value="">                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Pais">País:</label>
                            <input class="form-control text-box single-line" id="Pais" maxlength="25" name="Pais" type="text" value="">                            
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Estado">Estado:</label>
                            <input class="form-control text-box single-line" id="Estado" maxlength="25" name="Estado" type="text" value="">          
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Municipio">Municipio:</label>
                            <input class="form-control text-box single-line" id="Municipio" name="Municipio" type="text" value="">                            
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:right">
                <button type="button" class="btn btn-info" onclick="btnCreate()"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                <button type="button" class="btn btn-secondary" onclick="cerrarDialogo()"><i class="fa fa-reply" aria-hidden="true"></i> Regresar</button>                
            </div>
        </div>
    </div>
</form>

</div>
            </div>
        </div>
    </div>
</div>

