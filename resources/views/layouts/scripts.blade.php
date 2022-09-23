@yield('java')
<!-- jQuery -->
<script src="./www.inadwaresoft.com_files/jquery.min.js.descarga"></script>
<script src="./www.inadwaresoft.com_files/toastr.min.js.descarga"></script>
<link href="./www.inadwaresoft.com_files/toastr.min.css" rel="stylesheet">
<script src="./www.inadwaresoft.com_files/intlTelInput.js.descarga"></script>
<!-- Modal -->
<script src="./www.inadwaresoft.com_files/PacientesModal.js.descarga"></script>
<!-- Pacientes -->
<script src="./www.inadwaresoft.com_files/Pacientes.js.descarga"></script>


<script>
    $(document).ready(function () {
        //Se posiciona y marca el primer campo disponible.
        $('input:visible:enabled:first').focus();
        $('input:visible:enabled:first').select();

        $("#Pacientes").select2({
            placeholder: "Buscar Paciente...",
            minimumInputLength: 3,
            theme: "bootstrap-5",
            allowClear: true,
            width: '100%',
            ajax: {
                url: '../WebService/DropNombrePacientes',
                contentType: "application/json; charset=utf-8",
                data: function (params) {
                    var query =
                    {
                        filtro: params.term,
                    };
                    return query;
                },
                processResults: function (result) {
                    return {
                        results: $.map(result, function (item) {
                            return {
                                id: item.id,
                                text: item.text
                            };
                        }),
                    };
                }
            }
        });

        ActivarFiltro();
    });

    function ActivarFiltro() {
        if (document.getElementById('opcion1').checked) {
            document.getElementById("FechaInicio").disabled = true;
            document.getElementById("FechaFin").disabled = true;
            document.getElementById("Pacientes").disabled = false;
            $('#Pacientes').focus();
            $('#Pacientes').select();
        }

        if (document.getElementById('opcion2').checked) {
            document.getElementById("FechaInicio").disabled = false;
            document.getElementById("FechaFin").disabled = false;
            document.getElementById("Pacientes").disabled = true;
            $('#Pacientes').focus();
            $('#Pacientes').select();
        }

    }

</script>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Versión</b> a.0.0.0.20210310</div>
            <strong>©2022 <a href="https://www.inadware.com.mx/">Inadware de México, S. de R.L.</a></strong>
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>
    <div id="sidebar-overlay"></div></div>

    <div id="loading-screen" style="display:none">
        <img src="./www.inadwaresoft.com_files/bars.svg" width="70">
    </div>

    <!-- jQuery -->
    <script src="./www.inadwaresoft.com_files/jquery.min.js(1).descarga"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./www.inadwaresoft.com_files/jquery-ui.min.js.descarga"></script>
    <!-- Bootstrap 4 -->
    <script src="./www.inadwaresoft.com_files/bootstrap.bundle.min.js.descarga"></script>
    <!-- AdminLTE App -->
    <script src="./www.inadwaresoft.com_files/adminlte.js.descarga"></script>
    <!-- DataTables  & Plugins -->
    <script src="./www.inadwaresoft.com_files/jquery.dataTables.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/dataTables.bootstrap4.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/dataTables.responsive.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/responsive.bootstrap4.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/dataTables.buttons.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/buttons.bootstrap4.min.js.descarga"></script>
    <script src="./www.inadwaresoft.com_files/tables.js.descarga"></script>
    <!-- Sweet Alert -->
    <script src="./www.inadwaresoft.com_files/sweetalert2.all.min.js.descarga"></script>
    <!-- Select2 -->
    <script src="./www.inadwaresoft.com_files/select2.min.js.descarga"></script>
    
    <script src="./www.inadwaresoft.com_files/select2.min.js.descarga"></script>