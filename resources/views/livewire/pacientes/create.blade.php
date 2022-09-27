
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Paciente</h4>
                <button type="button" href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarDialogo()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="CreaContainer">
                   <form  class="frmPacientes" id="createPacientes" >
                    @csrf
                       <div id="frm-pacientes" class="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" href="#Primero" aria-controls="" data-toggle="tab" role="tab" aria-selected="true">Datos Personales</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#Opcional" aria-controls="" data-toggle="tab" role="tab" aria-selected="false">Datos de facturación (Opcional)</a>
                                </li>
                           </ul>

                           <div class="tab-content">
                               <div role="tabpanel" class="tab-pane active" id="Primero">
                                   <div class="card">
                
                                       <div class="card-body">
                                            <div class="row">
                                                <div class="col-6" style="text-align:right">
                                                   <label class="control-label" for="sucursal">Sucursal: <strong> 00-MATRIZ</strong></label>
                                                </div>
                                                <!--------------------sucursal------------------->
                                                <div class="col-6" style="text-align:left" hidden>
                                                    <input wire:model="sucursal" value="11" id="sucursal" name="sucursal" type="text" class="form-control" tabindex="1">
                                                </div>                            
                                            </div>
                                            <!--Clave del paciente-->
                                            <div class="form-group" hidden>
                                               <label for="Clave"></label>
                                               <input wire:model="Clave" value="11" class="form-control" id="Clave" name="Clave">
                                            </div>
                                           <!----------------------Paciente---------------->
                                           <div class="form-group" hidden>
                                              <label for="Paciente"></label>
                                              <input wire:model="Paciente" value="111" class="form-control" id="Paciente" name="Paciente" >
                                            </div>
                                            <!--------------------Nombre------------------->
                                            <div class="form-group">
                                               <label class="control-label">Nombre:</label><b class="obligatorio">(*)</b>
                                               <input class="form-control text-box single-line" id="Nombre" maxlength="50" name="Nombre" type="text" wire:model="Nombre">
                                            </div>
                                            <!--------------------Paterno------------------->
                                            <div class="form-group">
                                               <label class="control-label">Apellido Paterno:</label><b class="obligatorio">(*)</b>
                                               <input class="form-control text-box single-line" id="Paterno" maxlength="50" name="Paterno" type="text" wire:model="Paterno">
                                            </div>
                                            <!--------------------Materno------------------->
                                            <div class="form-group">
                                               <label class="control-label">Apellido Materno:</label>
                                               <input class="form-control text-box single-line" id="Materno" maxlength="50" name="Materno" type="text" wire:model="Materno">
                                               <p class="warnings" id="warning_Materno"></p>
                                           </div>
                                           <!--------------------Fecha------------------->
                                           <div class="form-group">
                                              <label class="control-label" for="FecNac">Fecha de nacimiento:</label><b class="obligatorio">(*)</b>
                                              <input wire:model="FecNac"  class="form-control text-box single-line" id="FecNac" maxlength="10" name="FecNac" type="date">
                                            </div>
                                            <!--------------------Fec_alta------------------->
                                           <div class="form-group" hidden>
                                            <input wire:model="Fec_alta"  class="form-control text-box single-line" id="Fec_alta"  name="Fec_alta" type="date">
                                          </div>
                                            <!------------------Sexo--------------------->
                                            <div class="form-group">
                                                <label class="control-label" for="Sexo">Género:</label><b class="obligatorio">(*)</b>
                                                <div class="form-check">
                                                   <input wire:model="Sexo" checked="True" class="form-check-input" id="Sexo" name="Sexo" type="radio" value="H"><label class="form-check-label">H</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" checked="True" id="Sexo" name="Sexo" type="radio" value="M" wire:model="Sexo"><label class="form-check-label">M</label>
                                                </div>
                                            </div>
                                            <!------------------Empresa--------------------->
                                            <div class="form-group">
                                               <label class="control-label" for="EmpresaPaciente">Empresa:</label><b class="obligatorio">(*)</b>
                                               <select class="form-control select2-hidden-accessible" wire:model="Empresa" id="Empresa" name="Empresa" tabindex="-1" aria-hidden="true">
                                                   @foreach($empresas as $empresa)
                                                   <option value="{{$empresa->Clave}}">{{$empresa->Nombre}}</option>
                                                   @endforeach
                                               </select><span class="select2 select2-container select2-container--classic" dir="ltr" data-select2-id="20" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-EmpresaPaciente-container"><span class="select2-selection__rendered" id="select2-EmpresaPaciente-container" role="textbox" aria-readonly="true" title="PÚBLICO EN GENERAL"><span class="select2-selection__clear" title="Remove all items" data-select2-id="22">×</span>PÚBLICO EN GENERAL</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                        <div class="form-group">
                            <label class="control-label" for="Telefono">Teléfono:</label><br>
                            <input class="form-control text-box single-line" wire:model="Telefono" id="Telefono" maxlength="10" name="Telefono" type="tel" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email:</label>
                            <input class="form-control text-box single-line" wire:model="email" id="email" maxlength="70" name="email" type="email" value="">
                            <p style="color:#ce2323" id="warning_email"></p>
                        </div>
                        <div class="form-group">
                            <input wire:model="eliminar" id="eliminar" name="eliminar" type="text" class="form-control" tabindex="1"><label class="form-check-label" for="Enviar_por_Whatsapp">Enviar por Whatsapp</label>
                        </div>
                        <div class="form-group">
                            <input wire:model="enviarwhatsapp" data-val="true" data-val-required="The Enviar Whatsapp field is required." id="enviarwhatsapp" name="enviarwhatsapp" type="checkbox" value="44"><input name="enviarwhatsapp" type="hidden" value="44">
                            <label class="form-check-label" for="Enviar_por_Whatsapp">Enviar por Whatsapp</label>
                        </div>
                       
                        
                    </div>                                                               
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="Opcional">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">                           
                            <label class="control-label" for="cliente">Cliente:</label>                                                       
                            <input class="form-control text-box single-line" id="cliente" maxlength="30" name="cliente" type="text" value="">                         
                        </div>
                        <div class="form-group">                           
                            <label class="control-label" for="Rfc">RFC:</label>                                                        
                            <input class="form-control text-box single-line" wire:model="Rfc" id="Rfc" maxlength="30" name="Rfc" type="text" value="">
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary" data-dismiss="modal">Save</button>
                            
                
            </div>
        </div>
    </div>
</form>

</div>
            </div>
        </div>
    </div>
</div>


