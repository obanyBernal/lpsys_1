<?php
    $idcliente = 'CL-1245';
    $nombrecom = 'la vaquita ';
    $nombreleg = ' AMAYA';
    $nit = '1235647 ';
    $dui = ' AMAYA';
    $registro = '1235678-4';
    $dirempresa = ' calle de la sirena';
    $fechacrea = ' ';
    $estadoclie = '';
    $punit = 10.00;
    $pretot = 10.00;
    $cantidad = 1;
    $nreg = 1;
    $totalreg = 1;

?>













<div class="container-fluid" style="padding-bottom: 20px;">


    <!--menu-->

    <div class="aui-core-notification-embeded-container"></div>
    <div class="aui-core-notification-list-container"></div>

    <div class="aui-application-list-generic-header">
        <div class="aui-application-list-generic-header-button">
            <div style="display: flex;">
                <div tabindex="-1" data-href="clientes-data" class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                    <i class="zmdi zmdi-collection-plus zmdi-hc-2x" title="Nuevo"></i>
                   
                    <div class="aui-kit-actionbutton-text"></div>
                </div>
            </div>
            <div style="display: flex;">
                <div tabindex="-1"
                    class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                    <i class="zmdi zmdi-email zmdi-hc-2x"></i>

                    <div class="aui-kit-actionbutton-text"></div>
                </div>
            </div>
            <div style="display: flex;">
                <div tabindex="-1"
                    class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                    <i class="zmdi zmdi-delete zmdi-hc-2x" title="Eliminar"></i>

                    <div class="aui-kit-actionbutton-text"></div>
                </div>
            </div>
            <div style="display: flex;">
                <div tabindex="-1"
                    class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                    <i class="zmdi zmdi-print zmdi-hc-2x" title="Imprimir"></i>
                    <div class="aui-kit-actionbutton-text"></div>
                </div>
            </div>
            <div style="display: flex;">
                <div tabindex="-1" data-href="clientes-copy"
                    class="aui-kit-actionbutton aui-kit-actionbutton-dropdown aui-kit-actionbutton-dropdown-template-action-bar aui-kit-actionbutton-dropdown-version-V1">
                    <i class="zmdi zmdi-copy zmdi-hc-2x"></i>
                    <div class="aui-kit-actionbutton-text"></div>

                </div>
            </div>



        </div>

    </div>



    <div class="container-flat-form">

            <form id='oForm-clientes' autocomplete="off" enctype="multipart/form-data" class="form-paddin AjaxForm"
                data-form="update" style="height: 100%;width:100%">

                <div class="container-fluid" style="padding-bottom: 20px;">

                    <div class="row">


                        <!-- data-block -->

                        <table id="dtVta" class="display nowrap responsive-table" cellspacing="0" width="100%"
                            style="font-size: 0.775em;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id_cliente</th>
                                    <th>Nombre_comercial</th>
                                    <th>Nombre_legal</th>
                                    <th>NRC</th>
                                    <th>NIT</th>
                                    <th>DUI</th>
                                    <th>Ultima_factura</th>
                                    <th>Monto_ultimo_factura</th>
                                    <th>Estado</th>
                                    <th>Mod.</th>
                                    <th>Elim.</th>
                                    <th>Proc.</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td data-label="No">1</td>
                                    <td data-label="Id_cliente">15-03-2025</td>
                                    <td data-label="Nombre_comercial">145454-add457-erere4878-78787drere</td>
                                    <td data-label="Nombre_legal">LP SOFTWARE</td>
                                    <td data-label="NRC">LP,S.A. DE C.V.</td>
                                    <td data-label="NIT">01-FACTURA</td>
                                    <td data-label="DUI">PROCESADA</td>
                                    <td data-label="Ultima_factura">LP,S.A. DE C.V.</td>
                                    <td data-label="Monto_ultimo_factura">01-FACTURA</td>
                                    <td data-label="Estado">PROCESADA</td>
                                    <td data-label="Mod.">...</td>
                                    <td data-label="Elim.">...</td>
                                    <td data-label="Proc.">...</td>

                                </tr>
                            </tbody>
                        </table>

                      

                    </div>  <!-- row -->

                </div> <!-- container-fluid -->


    </form> <!-- form -->

</div> <!-- container-fluid -->
   

<script lang="javascript">


    $("textarea").keyup(function () {
        var height = $(this).prop("scrollHeight") + 2 + "px";
        $(this).css({ "height": height });
    })


    $(document).ready(function () {
        $("#dtVta").DataTable({
            "lengthMenu": [[100, 500, 1000, -1], [100, 500, 1000, "Todos"]],
            "paging": false,
            "ordering": true,
            "info": true,
            "rowspan": true,
            "colspan": true,

        });
    });


</script>