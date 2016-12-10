$.fn.editable.defaults.mode='inline';
$.fn.editable.defaults.ajaxOptions={type:'PUT',dataType:'json'};
$(document).ready(function(){
	
/*****************************************************************/
// Edicion de cantidad de productos (qty) en el carrito 
	$('.set-qty').editable({
			dataType:'json',
			type:'PUT',
			success: function(response, newValue) {
		    	if(!response.success)
		    	{
		    		return 'Excede las existencias';
		    	}
			}
		});
/***************************************************************/
//Datos de las ordenes , como administrador... modificaciones dashboard
	$('.set-guide-number').editable(
		{
			dataType:'json',
			success: function(response, newValue) {
		    	if(!response.success)
		    		alert('revasa las existencias');
			}
		});
	$('.select-status').editable({
		source:[
			{value:'creado',text:'Creado'},
			{value:'enviado',text:'Enviado'},
			{value:'recibido',text:'Recibido'}
		]
	});
/**************************************************************/

});