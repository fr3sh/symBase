$(document)
        .ready(
                function () {

                    /* Rejestracja panela zamykanie otwieranie
                     * 
                     */


                    // zmiana sztrzałki w panelu pamietać aby przypisac właściwy #id
//                    $('#togletogle_User_list').click(function () {
//                        $(this).find('span').toggleClass('glyphicon glyphicon-triangle-bottom').toggleClass('glyphicon glyphicon-triangle-top');
//                    });




                    /* END
                     * 
                     */


$(".langChange").select2({
  templateResult: formatState
});

                });
                
 function getCSSHrefs(allhtml) {
    var Boddy = allhtml.match(/<head[^>]*>([\w|\W]*)<\/head>/g);
    var hrefs = Boddy[0].match(/(href\=\")([^\"]*(\"))/g);
    
    return hrefs;
     
 }            
    // funkcja tworzaca tabele i formatowanie na potrzeby TCPDF            
function cutoutForTCPDF(tab,defStyle) {

    var tabE = tab;
    /// lekkie posprzatanie nowych lini
 // tabE = tabE.replace(/\r?\n|\r/g, ' ');
  // posprzatanie wilu spacji
  // tabE = tabE.replace(/\s+/g, ' ');
    ////usuniecie a href
    //tabE = tabE.replace(/\<a.*\<\/a\>/g, ' '); nie działa ze wzgledu na poczatek i koniec!
   /////////////////////////////////////////////////  TO DZIAła (\<a)([^\<]*(\<\/a\>))
    ///usuniecie div
//// podmiana wygladu tabeli

if (defStyle == 'true'){

    tabE = tabE.replace(/(class\=\")([^\"]*(\"))/gi, '');  //usuniecie wszystkich styli

    tabE = tabE.replace("<table", '<table cellspacing="0"  style=" padding:10px 4px 10px 4px; border-bottom: 1px solid #dddddd;  border-top: 1px solid #dddddd; border-left: 1px solid #dddddd; border-right: 1px solid #dddddd;" cellpadding="4" border="1" ');

    tabE = tabE.replace(/\<td\>/gi, '<td style="padding: 8px 8px 8px 8px  ;  border-bottom: 1px solid #dddddd;  border-top: 1px solid #dddddd; border-left: 1px solid #dddddd; border-right: 1px solid #dddddd;">');

    /// podmiana HEDERA TABAELI I USTAWIENIE KOLOTU
    var n1 = tabE.indexOf("<thead>");
    var n2 = tabE.indexOf("</thead>");

    var tabF = tabE.slice(n1, n2 + 8);   // wartosc wycieta 
    var tabT1 = tabE.slice(0, n1);   //wartosc od poczatku do n1
    var tabT2 = tabE.slice(n2 + 8, tabE.length);  //wartosc od n2 do konca

    var count = (tabE.match(/\<tr\>/g) || []).length;
    for (i = 0; i < count; i++) {
        tabF = tabF.replace("<tr>", '<tr  style=" border-bottom: 1px solid #dddddd;  border-top: 1px solid #dddddd; border-left: 1px solid #dddddd; border-right: 1px solid #dddddd; background-color:#337ab7;color:#000000;">');
       

    }

    tabE = tabT1.concat(tabF);
    tabE = tabE.concat(tabT2);

    var tabE = tabE.replace("<thead>", "");
    tabE = tabE.replace("</thead>", "");
    ///////////////////////////////////////    

      var count = (tabE.match(/\<th\>/g) || []).length;
     
      for ( i=0; i<count; i++){
       tabE = tabE.replace("<th>", '<th style=" border-bottom: 1px solid #dddddd;  border-top: 1px solid #dddddd; border-left: 1px solid #dddddd; border-right: 1px solid #dddddd; border-color:#dddddd ;"><b>');
       tabE = tabE.replace('</th>', '</b></th >');
    }

    /// usuniecie foota 
    var n1 = tabE.indexOf("<tfoot>");
    var n2 = tabE.indexOf("</tfoot>");
    var tabF = tabE.slice(n1, n2 + 8);
    var tabT1 = tabE.slice(0, n1);
    var tabT2 = tabE.slice(n2 + 8, tabE.length);
    tabE = tabT1.concat(tabT2);
    /////////////////

    //ustawienie kolorowania <tr> dla czytelnosci tabeli
    var n1 = tabE.indexOf("<tbody>");
    var n2 = tabE.indexOf("</tbody>");

    var tabF = tabE.slice(n1, n2 + 8);   // wartosc wycieta 
    var tabT1 = tabE.slice(0, n1);   //wartosc od poczatku do n1
    var tabT2 = tabE.slice(n2 + 8, tabE.length);  //wartosc od n2 do konca

    var count = (tabF.match(/\<tr\>/g) || []).length;
    for (i = 0; i < count; i++) {
        
        //jesli równa 
        if (i % 2 == 0){
        tabF = tabF.replace("<tr>", '<tr style="background-color:#f9f9f9" >');
        }
        if (Math.abs(i % 2) == 1)
        {
           tabF = tabF.replace("<tr>", '<tr style="background-color:#FFF" >');
        }

    }
    tabE = tabT1.concat(tabF);
    tabE = tabE.concat(tabT2);
    ////////////////////////////
  
    ///////
    tabE = tabE.replace("<tbody>", "");
    tabE = tabE.replace("</tbody>", "");
    }
    else
    {
        
        
            /// usuniecie foota 
    var n1 = tabE.indexOf("<tfoot>");
    var n2 = tabE.indexOf("</tfoot>");
    var tabF = tabE.slice(n1, n2 + 8);
    var tabT1 = tabE.slice(0, n1);
    var tabT2 = tabE.slice(n2 + 8, tabE.length);
    tabE = tabT1.concat(tabT2);
    /////////////////

    tabE = tabE.replace("<tbody>", "");
    tabE = tabE.replace("</tbody>", "");
  
    
    }
    
    return tabE;
}

function cutoutForWKHTML(tabALL, tabToShow) {
    var tabE = tabALL;
    tabE = tabE.replace(/<head[^>]*>/gi, '<!DOCTYPE html> <html lang="pl"><head> '); 
    tabE = tabE.replace(/<body[^>]*>([\w|\W]*)<\/body>/gi, '<body>' + tabToShow + '</body> </html>'); 
    

    
    return tabE;
}

//Ajax przesyłajacy tebele do conrollera 
function sendHtmlTable(path, idTable, name, defStyle ) {
    //trik z funkcją jesli nie ma defStyle to styl jest domyslny 
    defStyle = typeof defStyle !== 'undefined' ? defStyle : 'true';
    
    var opts = {
      lines: 12             // The number of lines to draw
    , length: 7             // The length of each line
    , width: 5              // The line thickness
    , radius: 10            // The radius of the inner circle
    , scale: 1.0            // Scales overall size of the spinner
    , corners: 1            // Roundness (0..1)
    , color: '#000'         // #rgb or #rrggbb
    , opacity: 1/4          // Opacity of the lines
    , rotate: 0             // Rotation offset
    , direction: 1          // 1: clockwise, -1: counterclockwise
    , speed: 1              // Rounds per second
    , trail: 100            // Afterglow percentage
    , fps: 20               // Frames per second when using setTimeout()
    , zIndex: 2e9           // Use a high z-index by default
    , className: 'spinner'  // CSS class to assign to the element
    , top: '50%'            // center vertically
    , left: '50%'           // center horizontally
    , shadow: false         // Whether to render a shadow
    , hwaccel: false        // Whether to use hardware acceleration (might be buggy)
    , position: 'absolute'  // Element positioning
    }
    
    
    var target = document.getElementById('spinerModal')
    var spinner = new Spinner(opts).spin(target);
    
     $("#exampleModal").modal('show');
    
    temp1 = '#' + idTable;
    temp4 = $(temp1).prop('outerHTML');
    temp3 = '';
    var excss = '';
    
    temp3 = document.documentElement.innerHTML;

    if (name == 'WKHTML'){
      temp3 = cutoutForWKHTML(temp3,temp4);
    }
    if (name == 'TCPDF'){
     excss = getCSSHrefs(temp3 );
     temp3 = cutoutForTCPDF(temp4,defStyle );
     
    }
    if (name == 'MPDF'){
     excss = getCSSHrefs(temp3 );
     temp3 = cutoutForTCPDF(temp4,defStyle );
     
    }
    
    if (name == 'DOPDF'){
       excss = getCSSHrefs(temp3 );
       temp3 = cutoutForTCPDF(temp4,'false' );
      
    }
    
    if (name == 'DOMPDF'){
       excss = getCSSHrefs(temp3 );
       temp3 =  temp4;
      
    }
    
    var url = path;
    var obj = {TAB: temp3, NAZWA: name, EXCSS:excss,DEFSTYLE:defStyle };
    // var obj = "temp2";
    $.ajax({
        type: "POST",
        url: url,
        data: obj,
        async: true,
        success: function (data) {
           $("#exampleModal").modal('hide');
            alert("Ciekawe ");
            
            if (data.TYP == 'DOPDF'){
            html = data.H;
            hrefs = data.HREFS;
            $(temp1).printMe({"path": hrefs, "title": 'TEST',"what" :html});
            }
            
           
            

        },
        error: function () {
             $("#exampleModal").modal('hide');
            alert("Wystąpił błąd generowania PDF ");
            return false;
        }
    });
    
    
    
}

function printerDoPDF ( obj){
    
    	// Create a random name for the iframe.
		var iframeName = ("printer-" + (new Date()).getTime());
		 
		// Create an iFrame
		var iFrame = $( "<iframe name='" + iframeName + "'>" );
		 
		// Hide the iframe and add it to the body
		iFrame
			.css( "width", "1px" )
			.css( "height", "1px" )
			.css( "position", "absolute" )
		    .css( "left", "-9999px" )
			.appendTo( $( "body:first" ) );

		var objIframe = window.frames[ iframeName ];
		var objPrint = objIframe.document;

		// Write the HTML for the document. In $this, we will
		// write out the HTML of the current element.
		objPrint.open();
		objPrint.write( "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">" );
		objPrint.write( "<html>" );
		objPrint.write( "<head>" );
		objPrint.write( "<meta charset='utf-8'>" );

		
		// Loads the external css file when not is empty
		//if (settings.path != "")
		//	objPrint.write( "<link href='" + settings.path + "' rel='stylesheet'>" );
		
		objPrint.write( "<title>" );
		objPrint.write( document.title );
		objPrint.write( "</title>" );
		objPrint.write( "</head>" );
		objPrint.write( "<body>" );
			
		// Add a header when the title not is empty
		//if (settings.title != "")
		//	objPrint.write( "<h1>" + settings.title + "<\/h1>" );

		objPrint.write(  obj );
		objPrint.write( "<\/body>" );
		objPrint.write( "<\/html>" );
		objPrint.close();
		 
		// Print the document.
		objIframe.focus();
		objIframe.print();
    
    
}

//Ajax przesyłajacy tebele do conrollera 
function sendHtmlTableTCPDF(path, idTable) {
    temp1 = '#' + idTable;
    temp4 = $(temp1).prop('outerHTML');
    temp2 = cutoutForTCPDF(temp4);
    
    temp3 = document.documentElement.innerHTML;
    temp3 = cutoutForWKHTML(temp3,temp4);

    // temp3 = escape(temp2);
   
    var url = path;
    var obj = {Htext: temp2, WKHTML: temp3 };
    // var obj = "temp2";
    $.ajax({
        type: "POST",
        url: url,
        data: obj,
        async: true,
        success: function (data) {
            alert("Ciekawe ");
            obj = JSON.parse(data);

        },
        error: function () {
            alert("Wystąpił błąd generowania PDF ");
            return false;
        }
    });

}


//Ajax przesyłajacy tebele do conrollera 
function sendHtmlTable2(path, html) {


    window.location.href = path + "/alamakota";

}



function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<span><img src="public/img/icons/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};

