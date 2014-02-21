<style type="text/css">
body{margin: 0;padding:0;}
body{font-family: arial,sans-serif;font-size: 76%;text-align: center}
#fotter {
	background: #e3e3e3;
	border-top: 1px solid white;
	position: fixed;
	bottom: 0;
    text-align: center;
	width: 100%;
	padding: .7em .7em .7em 2em;
}


#main {
    width: 800px;margin: 0 auto;text-align: left;
}
#main2 {
    width: 800px;margin: 0 auto;text-align: left;
    background-color: red;
}
A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

tr:nth-child(odd) {
    background-color: #e3e3e3;
}

table.risultati{
    width: 800px;
    border: solid;
}
.lista {
    display:none;
    width: 500px;
    }

</style>
<link href="<?=base_url()?>js/dataTables/demo_table.css" rel="stylesheet" type="text/css" />
  

 <div id="main">
<table border="1" id="risultati_table" class="risultati">
    <thead>
    	<tr>
    		<th>Nome es</th>
            <th>categoria</th>
            <th>numero</th>
    		<th>Caratt 1</th>
            <th>Caratt 2</th>
            <th>Diff cognitiva</th>
    		<th>Diff motoria</th>
            <th>descrizione</th>
         
           	
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
                    <td><?= $es->DESCRIZIONE?></td>
                    </tr>    
    			
    		<? endforeach?>
    	<? else:?>
    		<tr>
    			<td colspan="8">NESSUN ESERCIZIO INSERITO!! </td>
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

    $(document).ready(function(){
        $('#risultati_table').dataTable();
    });
    
 </script>