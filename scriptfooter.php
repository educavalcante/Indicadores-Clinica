<!-- Scripts CPC -->

<script type="text/javascript" src="assets/js/cpc.js"></script>

<script type="text/javascript" src="assets/jquery/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="assets/jquery.mobile/jquery.mobile-1.4.5.min.js"></script>

<script type="text/javascript" src="assets/DataTables/dataTables.min.js"></script>
<script type="text/javascript" src="assets/DataTables/Buttons-2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/DataTables/Buttons-2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/DataTables/Buttons-2.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="assets/DataTables/pdfmake-0.1.36/pdfmake.js"></script>
<script type="text/javascript" src="assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script>
  function relatorio(str) {
    
    $(document).ready(function() {
      $(str+' thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo(str+' thead');
        $(str).DataTable( {
            dom: 'rtiplB',
            orderCellsTop: true,
            fixedHeader: {
            header: true,
            headerOffset: $('#fixed').height()
            },
            autoWidth: false,
            paging: true,
            lengthMenu: [ [25, 50, 100, 200, -1], [25, 50, 100, 200, "Todas"] ],
            language: {
                url: 'assets/DataTables/pt_br.json'
            },        
            initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" style="width:100%" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
 
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
        buttons: [
          'copy', 'csv',  {
              extend: 'excel',
              messageTop: 'Modelo de Relatório da CPC',
              title: 'CPC SAPI WEB',
              messageBottom: 'CPC SAPI WEB'
          },
          {
              extend: 'pdf',
              messageTop: 'Modelo de Relatório da CPC',
              title: 'CPC SAPI WEB',
              messageBottom: 'CPC SAPI WEB'
          },
          {
              extend: 'print',
              messageTop: 'Modelo de Relatório da CPC',
              title: 'CPC SAPI WEB',
              messageBottom: 'CPC SAPI WEB'
          },
        ]
      } );
      table.columns.adjust().draw();
    } );




  }
</script>

<script>
  function tab(pagina) {
    document.getElementById('cpcMain').style.display = "none";
    document.getElementById('tab1').style.display = "none";
    document.getElementById('tab2').style.display = "none";
    document.getElementById('tab3').style.display = "none";
    document.getElementById('tab4').style.display = "none";
    document.getElementById(pagina).style.display = "block";

  }
  function showMain(str,txtdiv,url, tabelanome) {
    if (str == "") str = " ";
    if (str != undefined)
      carregando(true);
    if (txtdiv === undefined)
      txtdiv = "cpcMain";
    if (url === undefined)
      url = "main.php?tela=";
    if (str.length == 0) { 
      document.getElementById(txtdiv).innerHTML = "";    
      return;
    }
    if ((txtdiv == 'tab1') || (txtdiv == 'tab2') ||
        (txtdiv == 'tab3') || (txtdiv == 'tab4'))
       {
        document.getElementById('cpcMain').style.display = "none";
        document.getElementById('tab1').style.display = "none";
        document.getElementById('tab2').style.display = "none";
        document.getElementById('tab3').style.display = "none";
        document.getElementById('tab4').style.display = "none";
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById(txtdiv).innerHTML =
      this.responseText;
      carregando(false, tabelanome);
      document.getElementById(txtdiv).style.display = "block";
    }
    xhttp.open("GET", url+str);
    xhttp.send();   
  }
  function carregando(flag,tabelanome) {
 
    if ((!flag) && (tabelanome != undefined))
    relatorio(tabelanome);
    if (flag)
      $(document).ready(function(){
        $("#loader").show();
      });   
    else 
      $(document).ready(function(){
        $("#loader").hide();
      });   
  }


  function formulario2(formnome){
    // Variable to hold request
    var request;
    // Bind to the submit event of our form
    $(formnome).submit(function(event){
      // Prevent default posting of form - put here to work in case of errors
      event.preventDefault();
      // Abort any pending request
      if (request) {
        request.abort();
      }
      // setup some local variables
      var $form = $(this);
      // Let's select and cache all the fields
      var $inputs = $form.find("input, select, button, textarea");
      // Serialize the data in the form
      //var serializedData = $form.serializeArray();
      var serializedData = $form.serialize();
      if (serializedData.indexOf("tipodml") >=0) {
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        carregando(true);
        // Fire off the request to /form.php
        request = $.ajax({
          url: "dml.php",
          type: "post",
          //    data: $.param(serializedData)
          data: serializedData
        });
        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
          // Log a message to the console
          console.log("Hooray, it worked!");
        });
        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
          // Log the error to the console
          console.error(
            "The following error occurred: "+
            textStatus, errorThrown
          );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
          // Reenable the inputs
          $inputs.prop("disabled", false);
        });

        // Put the results in a div
        request.done(function( data ) {
          $( "#result" ).empty().append( data );
          var modal = document.getElementById("myModal");
          modal.style.display = "block";
          var span = document.getElementsByClassName("close")[0];
          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }   
          carregando(false);
        });
      }
      carregando(false);
    }); //formsubmit
  }

  function enviardados(){
    alert('Envia.');
  }
</script>