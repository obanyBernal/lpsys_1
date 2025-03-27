

<div class="AddShoppingCart"></div>

<script>
    /* Modal kart */
    function modal_add_kart(modal){
        if(modal=='patient'){
            $('#modalPatient').modal('show');
        }else if(modal=='doctor'){
            $('#modalDoctor').modal('show');
        }else if(modal=='product'){
            $('#modalProduct').modal('show');
        }
    }

    /* Search Patient */
    function search_patient(){
        let input_patient=document.getElementById("input_search_patient").value;
        input_patient=input_patient.trim();

        if(input_patient!=""){
            $.ajax({
                url:'ajax/shoppingcartAjax.php?SearchPatient='+input_patient,
                success:function(data){
                    let patient_result=document.querySelector('#patient_result');
                    patient_result.innerHTML=data;
                }
            });
        }else{
            swal(
                'Ocurrió un error inesperado',
                'Debes de introducir un término de búsqueda para continuar',
                'error'
            );
        }
    }

    /* Search Doctor */
    function search_doctor(){
        let input_doctor=document.getElementById("input_search_doctor").value;
        input_doctor=input_doctor.trim();

        if(input_doctor!=""){
            $.ajax({
                url:'ajax/shoppingcartAjax.php?SearchDoctor='+input_doctor,
                success:function(data){
                    let doctor_result=document.querySelector('#doctor_result');
                    doctor_result.innerHTML=data;
                }
            });
        }else{
            swal(
                'Ocurrió un error inesperado',
                'Debes de introducir un término de búsqueda para continuar',
                'error'
            );
        }
    }

    /* Search Product */
    function search_product(){
        let input_product=document.getElementById("input_search_product").value;
        input_product=input_product.trim();

        if(input_product!=""){
            $.ajax({
                url:'ajax/shoppingcartAjax.php?SearchProduct='+input_product,
                success:function(data){
                    let product_result=document.querySelector('#product_result');
                    product_result.innerHTML=data;
                }
            });
        }else{
            swal(
                'Ocurrió un error inesperado',
                'Debes de introducir un término de búsqueda para continuar',
                'error'
            );
        }
    }

    function shop_kart(code,type){
        code=code.trim();
        type=type.trim();
        let url="ajax/shoppingcartAjax.php";

        if(type=='subsidiary'){
            var optionVar="codeSD";
            var alertText="Quieres agregar esta sucursal al carrito para realizar una consulta o venta";
        }else if(type=='patient'){
            var optionVar="codePT";
            var alertText="Quieres agregar este paciente al carrito para realizar una consulta o venta";
        }else if(type=='doctor'){
            var optionVar="codeDT";
            var alertText="Quieres agregar este doctor al carrito para realizar una consulta";
        }

        swal({
            title: '¿Estás seguro?',   
            text: alertText,   
            type: 'question',   
            showCancelButton: true,     
            confirmButtonText: '<i class="zmdi zmdi-plus-circle-o"></i> &nbsp; Agregar',
            cancelButtonText: '<i class="zmdi zmdi-close"></i> &nbsp; Cancelar',
            cancelButtonColor: '#F44336'
        }).then(function () {
            $.ajax({
                url:url,
                type: 'POST',
                data: optionVar+'='+code,
                success:function(data){
                    $('.AddShoppingCart').html(data);
                }
            });
            return false;
        });
    }

    function product_kart(code){
        code=code.trim();
        let url="ajax/shoppingcartAjax.php";

        swal({
          title: 'Agregar productos al carrito',
          confirmButtonText: '<i class="zmdi zmdi-shopping-cart"></i> &nbsp; Agregar',
          confirmButtonColor: '#03A9F4',
          showCancelButton: true,
          cancelButtonColor: '#F44336',
          cancelButtonText: '<i class="zmdi zmdi-close"></i> &nbsp; Cancelar',
          html: '<div class="group-material" style="margin-top: 30px;">'+
                    '<input type="number" id="productSum" value="1" min="1" class="material-control" placeholder="Cantidad de productos" required="" maxlength="4">'+
                    '<span class="highlight"></span>'+
                    '<span class="bar"></span>'+
                    '<label>Cantidad</label>'+
                '</div>'
        }).then(function(){
            let sum=document.getElementById("productSum").value;
            if(isNaN(sum) || sum=="" || sum%1!=0 || sum==0){
                swal(
                  "Ocurrió un error inesperado",
                  "Ha introducido un valor incorrecto que no es numérico o no es un entero",
                  "error"
                );
            }else{
                $.ajax({
                    url:url,
                    type: 'POST',
                    data: 'codeSk='+code+'&sumSk='+sum,
                    success:function(data){
                        $('.AddShoppingCart').html(data);
                    }
                });
                return false;
            }
        });

    }

    function print_invoice(url,title){
        window.open(url,title,'width=820,height=720,top=0,left=100,menubar=YES,toolbar=YES');
    }
</script><script>
	$(document).ready(function(){
		$('.btn-exit-system').on('click', function(e){
			e.preventDefault();
			var Token=$(this).attr('data-code');
			swal({
			  	title: '¿Estás seguro?',
			  	text: "La sesión actual se cerrará y deberás iniciar sesión nuevamente para acceder al sistema",
			  	type: 'question',
			  	showCancelButton: true,
			  	confirmButtonColor: '#03A9F4',
			  	cancelButtonColor: '#F44336',
			  	confirmButtonText: '<i class="zmdi zmdi-run"></i> Si, cerrar',
			  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, cancelar'
			}).then(function () 
            {
				/*$.ajax({
                    
		            url:'ajax/loginAjax.php?Token='+Token,
		            success:function(data){
		                if(data=="true" || data==="true"){
		                    window.location.href="login/";
		                }else{
							swal(
							  "Ocurrió un error inesperado",
							  "No se pudo cerrar la sesión",
							  "error"
							);
	                    }
		            }
		        });
                */

                 window.location="index?c=logout";
			});
		});
	});
</script>
</body>
</html>