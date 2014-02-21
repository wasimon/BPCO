<style type="text/css">

#fotter {
	background: #e3e3e3;
	border-top: 1px solid white;
	position: fixed;
	bottom: 0;
    text-align: center;
	width: 100%;
	padding: .7em .7em .7em 2em;
}

#manolo{
    width: 900px;margin: 0 auto;text-align: left;
}
A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

</style>
<link href="<?=base_url()?>js/dataTables/demo_table.css" rel="stylesheet" type="text/css" />
  

 <div id="manolo">
<table border="1" id="example" class="risultati">
    <thead>
    	<tr>
    		<th>Nome esercizio</th>
            <th>Tipo</th>
            <th>Numero</th>
    		<th>Parte corpo</th>
            <th>Posizione</th>
            <th>Difficoltà cognitiva</th>
    		<th>Difficoltà motoria</th>
            
         
           	
    	</tr>
     </thead>
     <tbody>
    	<? if(isset($esercizi) && is_array($esercizi) AND count($esercizi)>0):?>
    		<? foreach($esercizi as $es):?>
    			<tr>
    				<td><?= $es->NOME_ESERCIZIO?></td>
                    <td><?= $es->CATEGORIA?></td>
                    <td><?= $es->NumEsercizio?></td>
                    <td><?= $es->CARATTERISTICA_1?></td>
                    <td><?= $es->CARATTERISTICA_2?></td>
                    <td><?= $es->DIFF_COGNITIVA?></td>
                    <td><?= $es->DIFF_MOTORIA?></td>
                    
                    </tr>    
    			
    		<? endforeach?>
    	<? else:?>
    		<tr>
    			<td colspan="3">NESSUN ESERCIZIO INSERITO </td>
    		</tr>
    	<? endif?>
     </tbody>
</table>

</div>
<br /><br /><br /><br /><br /><br />




<div id="fotter">
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>js/dataTables/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
<script>

/* Formating function for row details */
function fnFormatDetails ( oTable, nTr )
{
    var aData = oTable.fnGetData( nTr );
    var sOut = '<table cellspacing="0" border="0" style="padding-left:50px;">';
    sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' ciao'+aData[4]+'</td></tr>';
    sOut += '</table>';
     
    return sOut;
}
 
$(document).ready(function() {
    /*
     * Insert a 'details' column to the table
     */
    var nCloneTh = document.createElement( 'th' );
    var nCloneTd = document.createElement( 'td' );
    nCloneTd.innerHTML = '<img src="http://datatables.net/release-datatables/examples/examples_support/details_open.png">';
    nCloneTd.className = "center";
     
    $('#example thead tr').each( function () {
        this.insertBefore( nCloneTh, this.childNodes[0] );
    } );
     
    $('#example tbody tr').each( function () {
        this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
    } );
     
    /*
     * Initialse DataTables, with no sorting on the 'details' column
     */
    var oTable = $('#example').dataTable( {
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0 ] }
        ],
        "aaSorting": [[1, 'asc']]
    });
     
    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $('#example tbody td img').live('click', function () {
        var nTr = $(this).parents('tr')[0];
        if ( oTable.fnIsOpen(nTr) )
        {
            /* This row is already open - close it */
            this.src = "http://datatables.net/release-datatables/examples/examples_support/details_close.png";
            oTable.fnClose( nTr );
        }
        else
        {
            /* Open this row */
            this.src = "http://datatables.net/release-datatables/examples/examples_support/details_close.png";
            oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
        }
    } );
} );
 </script>