$('input#submit1').click(function(){//apre una form modale prima della stampa
				$.ajax({
					type: 'POST',
					url: 'index.php',  
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
                    

    

