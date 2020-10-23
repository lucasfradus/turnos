var base_url = 'http://localhost/turnos/'

$(document).ready(function(){
 
    $('#especialidad').change(function(){
     var espe = $(this).val();
     $.ajax({
      url:base_url+'Especialidades_producto/get_productos',
      method: 'post',
      data: {espe: espe},
      dataType: 'json',
      success: function(response){
       
        console.log(response);
  
          $('#prods').text(response.producto);
 
  
        }   
    });
   });

   $(document).ready(function() {
    $('#example').DataTable();
} );
  });



