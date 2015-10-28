$(function() {
 //inizializza datepicker
   $.datepicker.setDefaults($.datepicker.regional['it']);
	$('#datepicker').datepicker();
             
      });
 
  
    $(document).on('click', '.delete-control', function(){
         
    var id = $(this).attr('delete-id');
    var q = confirm('Sei sicuro di voler cancellare la determina?');
     
    if (q == true){
 
        $.post('models/delete_determine_POST.php', {
            object_id: id
        }, function(data){
            location.reload();
        }).fail(function() {
            alert('Unable to delete.');
        }); 
    }  
    return false; 
    });
    
    $(document).on('click', '.detail-control', function(){ //quando clicco sul pulsante che ha classe detail-control
    //var el=$(this).text();  
    var div=$(this).closest('tr');//memorizzo la riga e il valore id della riga
    var id = $(this).attr('detail-id');
   
    if($(this).text()==='Dettagli'){ //se il pulsante che ho premuto ha la scritta dettagli
        $(this).text('Nascondi'); //cambio la scritta
         $.ajax({ //uso la function ajax di jquery per recuperare dati basandomi sull'id della riga
            // definisco il tipo della chiamata
            type: "POST",
            // specifico la URL della risorsa da contattare
            url: "recupera_dati.php",
            // passo dei dati al file che li deve elaborare, nel formato che segue
            data: {
                //nome: "gabriele",
                //cognome: "scudu",
                idRiga: id},
            // definisco il formato della risposta (può essere per esempio text
            dataType: "html",
            // imposto un'azione per il caso di successo; result è un nome a caso che do 
            // alla risposta del server, contiene tutto ciò che il server manda dopo aver elaborato il file  
            success: function (result) {
                //alert(result);
                 $(result).insertAfter(div);
            },
            // ed una per il caso di fallimento
            error: function () {
                alert("Chiamata fallita!!!");
            }
        });   
    }else{//in caso il nome sul pulsante sia dettagli, significa che le righe di dettaglio sono già state esposte, e le cancello
        $(this).text('Dettagli');
         $('.shown'+id).remove();//la classe shown viene assegnata alla riga nel file recupera_dati.php
         //per cancellare solo le righe che corrispondono alla riga cliccata, nel nome della classe (shown) aggiungo l'id della riga
    };
      
});

   
$('input#submit').click(function(){//apre una form modale prima della stampa
				$.ajax({
					type: 'POST',
					url: 'models/stampaDetermine.php',  
					data: $('form.contact').serialize(),
					success: function(msg){
						$('#stampaEseguita').append(msg);
                                                $('#stampaEseguita').show();
						$('#myModal').modal('hide');	
					},
					error: function(){
						alert('failure');
					}
				});
			});
      

$('input#submit1').click(function(){//apre una form modale prima della stampa
				$.ajax({
					type: 'POST',
					url: 'controllers/indexController.php',  
					data: $('form.contact1').serialize(), //from.contact1 seleziona la form di classe contact1
					success: function(msg){
						$('#stampaEseguita1').append('Logged in');
                                               $('#stampaEseguita1').show();
						$('#myModal1').modal('hide');	
					},
					error: function(){
						alert('failure1');
					}
				});
			});
                    

    
                $(document).ready(function() { //inizializza la datatable di nome table_id
$('#table_id').DataTable( {
        initComplete: function () {
            this.api().columns('.select-filter').every( function () {                                
                var column = this;   
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
                    },
//calcola i totali e li mette nel footer
            "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Total over this page
            pageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 7 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
//    $('#total').append("<div class='pull-right'> Tot.'+pageTotal +' ( $'+ total +' total)");  
        
        }
    } );
} );
$('#table_id').on('click', '.detail-object', function () {
alert('click $(table_id)');
});
 $(document).on('click', '.detail-object', function(){
 alert('click $(document)');
});

