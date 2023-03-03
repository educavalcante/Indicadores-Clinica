/*Java Script CPC
* http://www.cpcbrasil.com
*/

$( function() {
    var availableTags = [
      "BA",
    ];
    $( ".uf" ).autocomplete({
      source: availableTags
    });
  } );

//Formatacao de CEP  
$( function() {
    $( ".cep" ).mask('00.000.000');
  } );


  $( function() {
    $( ".tel" ).mask('(000)0000-0000');
  } );


  $( function() {
    $( ".cel" ).mask('(000)00000-0000');
  } );

 
  $( function() {
    $( ".cpf" ).mask('000.000.000-44');
  } );

 
  $( function() {
    $( ".cnpj" ).mask('00.000.000/0000-00');
  } );

 
  $( function() {  
    $( ".convenio" ).autocomplete({
    	source: "list/lista.php?tipo=convenio",
    	minLength: 2
    });  
} );	

$( function() {
	$( ".plano" ).autocomplete({
		source: "list/lista.php?tipo=plano&convenio="+( ".convenio" ).value,
		minLength: 2
	});  
} );		


  $( function() {  
	$( ".medico" ).autocomplete({
		source: "list/lista.php?tipo=medicoo",
		minLength: 2
	});  
} );		


