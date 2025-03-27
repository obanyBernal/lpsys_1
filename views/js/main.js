$(document).ready(function(){
    $('.tooltips-general').tooltip('hide');


    $('.aui-kit-actionbutton').on('click',function(e)
    {
        e.preventDefault();
        var urldir=$(this).attr('data-href');
   
        var oData = {"c":urldir};

        $.ajax({
            url:"index",
            type: 'POST',
            data: oData,
            success:function(data)
            {
                $('#main-desktop').html(data);
            }
        });
        return false;
        

    });

    $('.mobile-menu-button').on('click', function(e){
        e.preventDefault();
        var mobileMenu=$('.navbar-lateral');	
        if(mobileMenu.css('display')=='none'){
            mobileMenu.fadeIn(300);
        }else{
            mobileMenu.fadeOut(300);
        }
    });

    $('.desktop-menu-button').on('click', function(e){
        e.preventDefault();
        var NavLateral=$('.navbar-lateral'); 
        var ContentPage=$('.content-page-container');   
        if(NavLateral.hasClass('desktopMenu')){
            NavLateral.removeClass('desktopMenu');
            ContentPage.removeClass('desktopMenu');
        }else{
            NavLateral.addClass('desktopMenu');
            ContentPage.addClass('desktopMenu');
        }
    });
    
    $('.dropdown-menu-button').on('click', function(e){
        e.preventDefault();
        var icon=$(this).children('.icon-sub-menu');
        if(icon.hasClass('zmdi-chevron-down')){
            icon.removeClass('zmdi-chevron-down').addClass('zmdi-chevron-up');
            $(this).addClass('dropdown-menu-button-active');
        }else{
            icon.removeClass('zmdi-chevron-up').addClass('zmdi-chevron-down');
            $(this).removeClass('dropdown-menu-button-active');
        }
        
        var dropMenu=$(this).next('ul');
        dropMenu.slideToggle('slow');
    });

    $('.tile').on('click', function(e)
    {
        e.preventDefault();
        var urldir=$(this).attr('data-href');
   
        //window.location=urldir;
     
        var oData = {"c":urldir};

        /*
        swal({
            title: '¿Estás seguro?',   
            text: 'Quieres eliminar los datos de la receta',   
            type: 'question',   
            showCancelButton: true,     
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#F44336'
        }).then(function () {
            $.ajax({
                url:url,
                type: 'POST',
                data: 'formDelCode='+code,
                success:function(data){
                    $('.AddShoppingCart').html(data);
                }
            });
            return false;
        });

        */

        
        $.ajax({
                url:"index",
                type: 'POST',
                data: oData,
                success:function(data)
                {
                    $('#main-desktop').html(data);
                }
            });
            return false;
        

            /*
            request = $.ajax({
                url: "index.php",
               type: "post",
               data: data
               });
           request.done(function (response, textStatus, jqXHR)
                 {
                    var sRes = response.substr(0,2);
                    if(sRes =="OK")
                         {
                             var linePrice = price * quantity;
                             // Update line price display and recalc cart totals 
                             productRow.children('.subtotal').each(function() {
                               $(this).fadeOut(fadeTime, function() {
                                 $(this).text(linePrice.toFixed(2));
                                 recalculateCart();
                                 $(this).fadeIn(fadeTime);
                               });
                             });
                             productRow.find('.item-quantity').text(quantity);
                             updateSumItems();
                         }
                     else
                     {
                       alert('Error al procesar operacion...');
                     }
                    });


            */
      

    });

    $('.btn-nav-user-action').on('click', function(e){
        e.preventDefault();
        var urldir=$(this).attr('data-href');

        window.location=urldir;
    });

    $('.btn-prescription').on('click', function() {
        var btn=$(this).attr('data-id');
        if(btn=="anteojos"){
            var container=$("#"+btn);
            var container2=$("#lentesContacto");
        }else{
            var container=$("#"+btn);
            var container2=$("#anteojos");
        }
        container.removeClass('prescriptionHide');
        container2.addClass('prescriptionHide');
    });

    $('.btn-consultation-form').on('click', function(e){
        e.preventDefault();
        var code="1";
        var url=$(this).attr('data-url');

        swal({
            title: '¿Estás seguro?',   
            text: 'Quieres eliminar los datos de la receta',   
            type: 'question',   
            showCancelButton: true,     
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#F44336'
        }).then(function () {
            $.ajax({
                url:url,
                type: 'POST',
                data: 'formDelCode='+code,
                success:function(data){
                    $('.AddShoppingCart').html(data);
                }
            });
            return false;
        });
    });

    $('.searchForm').on('submit', function(e){
        e.preventDefault();
        var form=$(this);
        var formdata = new FormData(this);
        var respuesta=form.children('.AnswerAjax');
        var accion=form.attr('action');
        var metodo=form.attr('method');

         var msjError="<script>swal('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";

        $.ajax({
                type: metodo,
                url: accion,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    respuesta.html(data);
                },
                error: function() {
                    respuesta.html(msjError);
                }
            });
            return false;
    });

    $('.AjaxForm').submit(function(e){
        e.preventDefault();

        var form=$(this);

        var tipo=form.attr('data-form');
        var accion=form.attr('action');
        var metodo=form.attr('method');
        var respuesta=form.children('.AnswerAjax');

        var msjError="<script>swal('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
        var formdata = new FormData(this);
 

        var textoAlerta;
        if(tipo==="save"){
            textoAlerta="Los datos que enviaras quedaran almacenados en el sistema";
        }else if(tipo==="delete"){
            textoAlerta="Los datos serán eliminados completamente del sistema";
        }else if(tipo==="update"){
            textoAlerta="Los datos que enviaras serán actualizados";
        }else if(tipo==="kart"){
            textoAlerta="Quieres agregar este producto al carrito";
        }else if(tipo==="delete-cart"){
            textoAlerta="El registro que has seleccionado será eliminado del carrito de compras";
        }else if(tipo==="consultation"){
            textoAlerta="Quieres continuar llenando el formulario de la consulta";
        }else{
            textoAlerta="Quieres realizar la operación solicitada";
        }


        swal({
            title: "¿Estás seguro?",   
            text: textoAlerta,   
            type: "question",   
            showCancelButton: true,     
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar"
        }).then(function () {
            $.ajax({
                type: metodo,
                url: accion,
                data: formdata ? formdata : form.serialize(),
                cache: false,
                contentType: false,
                processData: false,
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                      if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        if(percentComplete<100){
                            respuesta.html('<p class="text-center">Procesado... ('+percentComplete+'%)</p><div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: '+percentComplete+'%;"></div></div>');
                        }else{
                            respuesta.html('<p class="text-center"></p>');
                        }
                      }
                    }, false);
                    return xhr;
                },
                success: function (data) {
                    respuesta.html(data);
                },
                error: function() {
                    respuesta.html(msjError);
                }
            });
            return false;
        });
    });

    $('.btn-go-back').on('click', function(e){
		e.preventDefault();
		window.history.back();
	});
});