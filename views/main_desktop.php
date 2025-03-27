<section id ="main-desktop" class="full-reset text-center" style="padding: 5px 0;">
    
    <article data-href="clientes" class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
        <div class="tile-name all-tittles">clientes</div>
        <div class="tile-num full-reset"></div>
    </article>
   
    
    <article data-href="articulo" class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-eye"></i></div>
        <div class="tile-name all-tittles">acticulos</div>
        <div class="tile-num full-reset"></div>
    </article>
  
    
    <article data-href="facturacion" class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-money-box"></i></div>
        <div class="tile-name all-tittles">facturacion</div>
        <div class="tile-num full-reset"></div>
    </article>
    
        
    <article data-href="informes" class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-print"></i></div>
        <div class="tile-name all-tittles">informes</div>
        <div class="tile-num full-reset"></div>
    </article>

    <article data-href="Facturacionelectronica" class="tile">
        <div class="tile-icon full-reset"><i class="zmdi zmdi-money-box"></i></div>
        <div class="tile-name all-tittles">facturacion electronica</div>
        <div class="tile-num full-reset"></div>
    </article>

</section>

<!-- Modal Patient -->


<div class="modal fade" id="modalPatient">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> &nbsp; Agregar paciente a facturación</h4>
            </div>
            <div class="modal-body">
                <br>
                <div class="group-material">
                    <input type="text" name="input_search_patient" id="input_search_patient" class="material-control" placeholder="Nombre, apellido o número de identificación" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,25}" maxlength="25" title="Máximo 25 caracteres">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Código, Nombre, apellido o número de identificación</label>
                </div>
                <br>
                <div id="patient_result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="zmdi zmdi-close-circle-o"></i> &nbsp; Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="search_patient()"><i class="zmdi zmdi-search-for"></i> &nbsp; Buscar paciente</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Doctor -->
<div class="modal fade" id="modalDoctor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i> &nbsp; Agregar doctor a facturación</h4>
            </div>
            <div class="modal-body">
                <br>
                <div class="group-material">
                    <input type="text" name="input_search_doctor" id="input_search_doctor" class="material-control" placeholder="Nombre, apellido o código" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" maxlength="25" title="Máximo 25 caracteres">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Nombre, apellido o código</label>
                </div>
                <br>
                <div id="doctor_result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="zmdi zmdi-close-circle-o"></i> &nbsp; Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="search_doctor()"><i class="zmdi zmdi-search-for"></i> &nbsp; Buscar doctor</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Product -->
<div class="modal fade" id="modalProduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="zmdi zmdi-mall zmdi-hc-fw"></i> &nbsp; Agregar producto a facturación</h4>
            </div>
            <div class="modal-body">
                <br>
                <div class="group-material">
                    <input type="text" name="input_search_product" id="input_search_product" class="material-control" placeholder="Código o nombre" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" maxlength="25" title="Máximo 25 caracteres">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Código o nombre</label>
                </div>
                <br>
                <div id="product_result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="zmdi zmdi-close-circle-o"></i> &nbsp; Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="search_product()"><i class="zmdi zmdi-search-for"></i> &nbsp; Buscar producto</button>
            </div>
        </div>
    </div>

</div>