<?php
$_SESSION['PAGINA'] ='profile';
if (isset($_POST['tipo'])){
    //Insercao ou update dos campos
    $dml = "update or insert into usuarios (codigo,a_nome,endereco,email) values (?, ?, ?, ?) matching (codigo) returning codigo";
    $data = array($_POST['USU_INDICE'], $_POST['USU_NOME'], $_POST['USU_ENDERECO'], $_POST['USU_EMAIL']); 
    $dmlcmd = $fatura->prepare($dml);
    $dmlcmd->execute($data);



    while ($rowdml = $dmlcmd->fetch(PDO::FETCH_ASSOC)) {
            $sql = "SELECT * FROM usuarios where codigo =".$rowdml['CODIGO'] ; //consulta do registro inserido
    }
    }
else {
    $sql = "SELECT * FROM usuarios where codigo =".$_SESSION['ID_CPC'] ; // consulta do registro atual

}

    foreach ($fatura->query($sql) as $row) {} //Abre a consulta uma linha só
?>

<script>
  $( function() {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            classes: {
              "ui-tooltip": "ui-state-highlight"
            }
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .on( "mousedown", function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .on( "click", function() {
            input.trigger( "focus" );
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
 
    $( "#combobox" ).combobox();
    $( "#toggle" ).on( "click", function() {
      $( "#combobox" ).toggle();
    });
  } );
  </script>


<!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="btn-group"> 
                                        <a class="btn btn-primary" href="pt-list.html"> 
                                            <i class="fa fa-list"></i>  Listagem de Usuários </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                    <form action="index.php" method="POST" class="col-sm-6">
                                        <input type="hidden" name="tipo" value="U">
                                        <input type="hidden" name="USU_INDICE" value="<? print $row['CODIGO'] ?>">
                                        <div class="form-group">
                                                <label>Nome Completo</label>
                                                <input type="text" name="USU_NOME" value="<? print $row['A_NOME'] ?>" class="form-control" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="text" name="USU_EMAIL" value="<? print $row['EMAIL'] ?>" class="form-control" placeholder="Enter last Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" name="USU_ENDERECO" value="<? print $row['ENDERECO'] ?>" class="form-control" placeholder="Enter Mobile" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Picture upload</label>
                                                <input type="file" name="picture">
                                                <input type="hidden" name="old_picture">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Nascimento</label>
                                                <input name="date_of_birth" value="<? print $row['NASCIMENTO'] ?>" id="datepicker"  type="text" placeholder="Nascimento">
                                            </div>
                                            <div class="form-group">
                                                <label>Blood group</label>
                                                <select id="combobox">
                                                    <option>A+</option>
                                                    <option>AB+</option>
                                                    <option>O+</option>
                                                    <option>AB-</option>
                                                    <option>B+</option>
                                                    <option>A-</option>
                                                    <option>B-</option>
                                                    <option>O-</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                             <label>Sex</label><br>
                                             <label class="radio-inline"><input name="sex" value="1" checked="checked" type="radio">Male</label> 
                                             <label class="radio-inline"><input name="sex" value="0" type="radio">Female</label>

                                         </div>
                                         <div class="form-check">
                                          <label>Status</label><br>
                                          <label class="radio-inline"><input type="radio" name="status" value="1" checked="checked">Active</label> <label class="radio-inline"><input type="radio" name="status" value="0" >Inctive</label>
                                      </div>                                       

                                      <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="3" required></textarea>
                                    </div>
                                    <div class="reset-button">
                                     <a href="#" class="btn btn-warning">Cancelar</a>
                                     <button class="btn btn-primary">Salvar</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             
         </section> <!-- /.content -->
     </div> <!-- /.content-wrapper -->
