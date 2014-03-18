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
  <div align="center" style="border: solid black ;">
  
	<h2>Bentornato Dott. <?php echo $this->session->userdata('nome'); ?></h2>
    
	
	
	<? //print_r ($this->session->userdata);?>
    
	
	
	
	 <p>Questa sezione rappresenta l'area visibile solo al medico che ha effettuato il login.</p>
	<h4>
    
  </br></br>
    
 <a href='#'id="select">VISUALIZZA I PAZIENTI</a>
  
  </br></br>
  <?php echo anchor('pz/aggiungi/'.$this->session->userdata('idmedico'), 'AGGIUNGI UN PAZIENTE'); ?>
  </br></br>
   <a href='#'id="select2">RIMUOVI UN PAZIENTE</a></br></br>
 
  <?php echo anchor ('esercizi', 'VISUALIZZA GLI ESERCIZI'); ?>
  </br></br>                
    </h4>
  </div>
  
  <br /><br />
  
  <div id="main" class="lista">
<table border="1" id="risultati_table" class="risultati">
    <thead>
    	<tr>
    		<th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
    		<th>CF</th>
            <th>Visualizza</th>
           	
    	</tr>
     </thead>
     <tbody>
    	<? if(isset($pazienti) && is_array($pazienti) AND count($pazienti)>0):?>
    		<? foreach($pazienti as $pz):?>
    			<tr>
    				<td><?= $pz->nome?></td>
                    <td><?= $pz->cognome?></td>
                    <td><?= $pz->datanascita?></td>
                    <td><?= $pz->codfis?></td>
         <td><a href='<?=base_url()?>/pz/crea_index/<?=$pz->codfis?>'>Visualizza</a></td> 
     
    			</tr>
    		<? endforeach?>
    	<? else:?>
    		<tr>
    			<td colspan="3">NESSUN UTENTE INSERITO </td>
    		</tr>
    	<? endif?>
     </tbody>
</table>
</div>

<div id="main2" class="lista">
<table border="1" class="risultati">
    <thead>
    	<tr>
    		<th>Nome</th>
            <th>Cognome</th>
            <th>Data di nascita</th>
    		<th>CF</th>
            <th>Rimuovi</th>
           	
    	</tr>
    </thead>
    <tbody>
    	<? if(isset($pazienti) && is_array($pazienti) AND count($pazienti)>0):?>
    		<? foreach($pazienti as $pz):?>
    			<tr>
    				<td><?= $pz->nome?></td>
                    <td><?= $pz->cognome?></td>
                    <td><?= $pz->datanascita?></td>
                    <td><?= $pz->codfis?></td>
         <td><a href='<?=base_url()?>pz/carica_delete/<?=$pz->codfis?>'>Rimuovi</a></td> 
     
    			</tr>
    		<? endforeach?>
    	<? else:?>
    		<tr>
    			<td colspan="3">NESSUN UTENTE INSERITO </td>
    		</tr>
    	<? endif?>
     </tbody>
</table>
</div>




<div id="fotter">
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if(!empty($logged) && $logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>js/dataTables/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $("#select").live('click', function(){
        $('#main').slideToggle();
        $('#main2').slideUp();
    });
    $("#select2").live('click', function(){
        $('#main2').slideToggle();
        $('#main').slideUp();
    });
    
    $(document).ready(function(){
        $('#risultati_table').dataTable();
    });
    
 </script>