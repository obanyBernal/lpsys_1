       <?php
       $idcliente ='CL-1245';
       $nombrecom='la vaquita ';
       $nombreleg=' AMAYA';
       $nit='1235647 ';
       $dui=' AMAYA';
       $registro='1235678-4';
       $dirempresa=' calle de la sirena';
       $fechacrea=' ';
       $estadoclie='';  
       $punit = 10.00;
        $pretot = 10.00;
        $cantidad = 1;
        $nreg = 1;
        $totalreg = 1;



        ?>
       <div class="container-fluid" style="padding-bottom: 20px;">


           <!-- 
                    menu
                    -->

           <div class="aui-core-notification-embeded-container"></div>
           <div class="aui-core-notification-list-container"></div>


           <!-----------------menu superior------------------------>

           <div class="aui-application-list-generic-header">
               <div class="aui-application-list-generic-header-button">
                   <div style="display: flex;">
                       <div tabindex="-1" data-href="articulo-data" class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1"  > 
                            <i class="zmdi zmdi-collection-plus zmdi-hc-2x" title="Nuevo" style="color: black;"></i>
                        </div>
                   </div>
                   <div style="display: flex;">
                       <div tabindex="-1" class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1"> <i class="zmdi zmdi-email zmdi-hc-2x"></i>
                          
                           <div class="aui-kit-actionbutton-text"></div>
                       </div>
                   </div>
                   <div style="display: flex;">
                       <div tabindex="-1" class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                             <i class="zmdi zmdi-delete zmdi-hc-2x" title="Eliminar"></i>
                          
                           <div class="aui-kit-actionbutton-text"></div>
                       </div>
                   </div>
                   <div style="display: flex;">
                       <div tabindex="-1" class="aui-kit-actionbutton aui-kit-actionbutton-only-icon aui-kit-actionbutton-template-action-bar aui-kit-actionbutton-version-V1">
                         <i class="zmdi zmdi-print zmdi-hc-2x" title="Imprimir"></i>
                        
                       </div>
                   </div>
                   <div style="display: flex;">
                       <div tabindex="-1" class="aui-kit-actionbutton aui-kit-actionbutton-dropdown aui-kit-actionbutton-dropdown-template-action-bar aui-kit-actionbutton-dropdown-version-V1"><i class="zmdi zmdi-copy zmdi-hc-2x"></i>
                         
                       </div>
                   </div>



               </div>


            
           </div>

           <div class="container-flat-form">
              
               <form id='oForm-clientes' autocomplete="off" enctype="multipart/form-data" class="form-paddin AjaxForm" data-form="update" style="height: 100%;width:100%">

                   <div class="container-fluid" style="padding-bottom: 20px;">

                       <div class="row">


                        <!-- data-block -->

                        <h1>Lista de articulos</h1>

                       <table id="dtVta" class="display nowrap responsive-table" cellspacing="0" width="100%" style="font-size: 0.775em;">
                       
                            <thead>
                                                    
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Medida</th>
                                    <th>Cant. x unidad</th>
                                    <th>P. unitario </th>
                                    <th>Existencia total</th>
                                    <th>Mod.</th>
                                    <th>Elim.</th>
                                    <th>Proc.</th>
                            
                                </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                                    <td  data-label="Codigo">1</td>
                                    <td  data-label="Descripcion">15-03-2025</td>
                                    <td  data-label="Medida">145454-add457-erere4878-78787drere</td>
                                    <td  data-label="Cant. x unidad">LP SOFTWARE</td>
                                    <td  data-label="P. unitario">LP,S.A. DE C.V.</td>
                                    <td  data-label="Existencia">01-FACTURA</td>
                                    <td  data-label="Mod.">...</td>
                                    <td  data-label="Elim.">...</td>
                                    <td  data-label="Proc.">...</td>
                            
                                </tr>
                            </tbody>
                    </table>

<style>

    .responsive-table {
          width: 100%;
          overflow-x: auto;
    }

    .responsive-table th, .responsive-table td {
          padding: 8px;
          text-align: left;
          border-top: 1px solid #ddd;
    }


     

    @media (max-width: 767px) {
    .responsive-table thead {
          display: none; /* Oculta los encabezados en dispositivos móviles */
    }

    .responsive-table tr {
          margin-bottom: 0.625em;
          display: block;
          border-bottom: 2px solid #ddd;
    }

    .responsive-table td {
         display: block;
         text-align: right;
         position: relative;
         padding-left: 50%;
    }

    .responsive-table td::before {
         content: attr(data-label);
         position: absolute;
         left: 0;
         width: 50%;
         padding-left: 15px;
         font-weight: bold;
         text-align: left;
    }
    }


</style>


                <script>
                
                $(document).ready(function() {
                   $("#dtVta").DataTable( {
                       "lengthMenu": [[100,500,1000,-1], [100, 500, 1000,"Todos"]],
                       "paging":   false,
                       "ordering": true,
                       "info":     true,
                       "rowspan": true,
                       "colspan": true,
                 
                   } );
               } );

           </script>



                        <!-- aqui bloque de datos-->
                     
                    
                   
                      
                       </div>

                   </div>


               </form>
           </div>
       </div>

       </div>
       <p class="text-center">
           <button type="submit" class="btn btn-success"><i class="zmdi zmdi-refresh"></i> &nbsp;&nbsp; Actualizar</button>
       </p>

        
       <script lang="javascript">
            $("textarea").keyup(function(){  
  var height = $(this).prop("scrollHeight")+2+"px";
  $(this).css({"height":height});
})
       </script>