
$(document)
    .ready(
	function() {
        
          	var tab = $('#usersList').DataTable({
			 // dom: 'Bfrtip',
                          buttons: [
        {
            extend: 'pdfHtml5',
            text: 'DTPDF',
           className: 'pdfB'
        },
        {
            extend: 'csv',
            text: 'DTCSV',
           className: 'csvB'
        }
    ],
			//	buttons: [ 'pdfHtml5' ],
				paging : true,
				searching : true,
				ordering : true,
                                
			
				language : {
					// "lengthMenu": "Display _MENU_ records per page",
					"lengthMenu": "Wyświetl _MENU_ pozycji",
					"zeroRecords" : "Brak danych!",
					"info" : "Ilość pozycji: _TOTAL_ ",
					"search" : "szukaj",
					 "paginate": {
					      "previous": "Poprzednia",
					    	  "next": "Następna"
					    },
					"infoEmpty" : "Brak danych!"
						
				}
			

			});  
            
         //   $("#DD").append("<li id='AA'></li>")
          //  tab.buttons().container().appendTo($('#AA'));
          
          
          
           //  var x = document.createElement("LI"); 
              //  x.setAttribute("id", "AA");
              //  x.appendTo($('#DD'));
        //  x.appendTo($('#DD'));
       //   tab.buttons().container().appendChild(x);
          // $('#DD').appendChild(x);
          
        });