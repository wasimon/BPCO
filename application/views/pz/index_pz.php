
<style type="text/css">
.esami {
    display:none;
    }
.dati {
    background-color: red;
    border: solid;
    width: 600px;
    }
tr:nth-child(odd) {
    background-color: #e3e3e3;
}

#t_tinetti,#t_mmse,#t_SF36,#t_SFT,#t_sgrq,#t_cicloerg{
    display:block;
    cursor:pointer;

    }


A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

#tutInfo {
	background: #e3e3e3;
	border-top: 1px solid white;
	position: absolute;
	bottom: 0;
	width: 100%;
	padding: .7em .7em .7em 2em;
}
</style>
<table  style="border: solid;" width="600">
	
	<? if(isset($pazienti) && is_array($pazienti) AND count($pazienti)>0):?>
		<? foreach($pazienti as $pz):?>
		<tr>
		<th colspan="2" align="center">&nbsp;<?= $pz->nome?>&nbsp;<?= $pz->cognome?></th>
	</tr>	
				
                <tr><th>Codice Fiscale</th><td><?= $pz->codfis?></td></tr>
                
                <tr><th>Data di nascita</th><td><?= $pz->datanascita?></td></tr>
                <tr><th>Sesso</th><td><?= $pz->sesso?></td></tr>
                <tr><th>Lougo di nascita</th><td><?= $pz->luogonascita?></td></tr>
                <tr><th>Città</th><td><?= $pz->indirizzocitta?></td></tr>
                
            </tr>        		
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="3">There are currently no users.</td>
		</tr>
	<? endif?>
</table>
<?php
//if (isset ($data['codfis'])) $CF = $data['codfis'];

$CF = $pz->codfis;

    $esami = array(
    
    
    'sf36' => 'SF36',
    'sgrq' => 'Saint George',
    'cicloerg' => 'cicloergometro',
    'SFT' => 'Senior fitness test',
    'tinetti' => 'tinetti',
    'MMSE' => 'mini mental state examination',);
    
$esamiCHECK = array(

    
    
    't_sf36' => 0,
    't_sgrq' => 0,
    't_cicloerg' => 0,
    't_SFT' => 0,
    't_tinetti' => 0,
    't_MMSE' => 0,);

?>
<div class="dati" id="anagrafica">

<table>
<tr><th colspan="2" align="center" style="border: solid;" width="600">Dati antropometrici paziente:</th></tr>
<?php 
$query = $this->db->get_where('t_antropometria', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
		<? foreach($query as $antro):?>
			<tr><th>Peso al momento</th><td><?= $antro->peso_ora?></td></tr>
            <tr><th>Peso anno scorso</th><td><?= $antro->peso_anno?></td></tr>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="4">errore non sono presenti dati sul paziente</td>
		</tr>
	<? endif?>
  </table>
</div>
<br />

<div class="esami" id="esami_SF36">

<h3>Somministrazioni del questionario sullo stato di salute SF-36:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>Totale </th></tr>
	<tr><td>FUNZIONA???</td></tr>
<?php 
$query = $this->db->get_where('t_SF36', array('codfis'=>$CF))->result();
    if(isset($query) && is_array($query) AND count($query)>0):?>
        <? $esamiCHECK['t_SF36'] = true;  ?>
		<? foreach($query as $SF):?>
			<tr>
                <td><?= $SF->data?></td>
                <td><?= $SF->idsf36?></td>
                <td><a href="<?=base_url('index.php/visualizza/sf36/'$SF->idsf36)?>">Visualizza</a></td>
			
			</tr>
            
		<? endforeach?>
	<? else:?>
    <? $esamiCHECK['t_SF36'] = false; ?>
		<tr>
			<td colspan="4">Il paziente non ha compilato il questionario SF-36</td>
		</tr>
	<? endif?>
  </table>
</div>

<div class="esami" id="esami_sgrq">
<h3>Somministrazioni del questionario Saint George:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>XXX</th><th>XXX</th><th>XXX</th></tr>
<?php 
$query = $this->db->get_where('t_sgrq', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
		<? foreach($query as $sgrq):?>
			<tr>
                <td><?= $sgrq->data?></td>
                <td><?= $sgrq->data?></td>
                <td><?= $sgrq->data?></td>
                <td><?= $sgrq->data?></td>
			</tr>
            <? $esamiCHECK['t_sgrq']++;  ?>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="4">Il paziente non ha compilato il questionario SGRQ</td>
		</tr>
	<? endif?>
  </table>
</div>


<div class="esami" id="esami_cicloerg" >
<h3>Test al cicloergometro:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>Protocollo</th><th>Fine esercizio</th><th>Motivo fine</th></tr>
<?php 
$query = $this->db->get_where('t_cicloerg', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
		<? foreach($query as $ciclo):?>
			<tr>
                <td><?= $ciclo->data?></td>
                <td><?= $ciclo->protocollo?></td>
                <td><?= $ciclo->tempofine?></td>
                <td><?= $ciclo->motivofine?></td>
			</tr>
            <? $esamiCHECK['t_cicloerg']++;  ?>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="4">Il paziente non ha effettuato il test al cicloergometro</td>
		</tr>
	<? endif?>
  </table>
</div>

<div class="esami" id="esami_SFT">
<h3>Senior Fitness test:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>6mwt</th><th>forza quadricipite</th><th>arm curl</th></tr>
<?php 
$query = $this->db->get_where('t_sft', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
		<? foreach($query as $sft):?>
			<tr>
            
                <td><?= $sft->data?></td>
                <td><?= $sft->data?></td>
                <td><?= $sft->alzate?></td>
                <td><?= $sft->motivofine?></td>
			</tr>
            <? $esamiCHECK['t_sft']++;  ?>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="4">Il paziente non ha effettuato il test al cicloergometro</td>
		</tr>
	<? endif?>
  </table>
</div>

<div class="esami" id="esami_tinetti">
<h3>Valutazioni con scala di Tinetti effettuate dal paziente:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>Totale equilibrio</th><th>Totale andatura</th><th>Totale</th><th>Visualizza</th></tr>
<?php 
$query = $this->db->get_where('t_tinetti', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
    <? $esamiCHECK['t_tinetti'] = true;  ?>
		<? foreach($query as $tin):?>
			<tr>
                <td><?= $tin->data?></td>
                <td><?= $tin->etot?></td>
                <td><?= $tin->atot?></td>
                <td><?= $tin->tinettitotale?></td>
                <td><a href="<?=base_url();?>visualizza/tinetti/<?= $tin->idtinetti?>">Visualizza</a></td>
			</tr>
		<? endforeach?>
	<? else:?>
       <? $esamiCHECK['t_tinetti'] = false;  ?>
		<tr>
			<td colspan="4">Il paziente non ha effettuato il test di Tinetti</td>
		</tr>
	<? endif?>
  </table>
</div>

<div class="esami" id="esami_mmse">
<h3>Valutazioni con questionario Mini Mental State Examination:</h3>
<table style="border: solid;" width="600"><tr><th>Data esame</th><th>Totale</th></tr>
<?php 
$query = $this->db->get_where('t_MMSE', array('codfis'=>$CF))->result();
if(isset($query) && is_array($query) AND count($query)>0):?>
		<? foreach($query as $mmse):?>
			<tr>
                <td><?= $mmse->data?></td>
                <td><?= $mmse->mmsetot?></td>
			</tr>
            <? $esamiCHECK['t_MMSE']++;  ?>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="4">Il paziente non ha effettuato il Mini Mental State Examination</td>
		</tr>
	<? endif?>
  </table>
</div>


<hr />
<table  width="100%" class="riepilogo">
<tr>
<th>sf36</th><th id="provina">sgrq</th><th>cicloerg</th><th>SFT</th><th>tinetti</th><th>MMSE</th>
</tr><? $base= base_url(); ?>
<tr><td id="t_SF36"<? if ($esamiCHECK['t_sf36']) echo'bgcolor="green">esame svolto'; else echo'bgcolor="red">esame non effettuato'; ?></td>
    <td id="t_sgrq"<? if ($esamiCHECK['t_sgrq'] != '0') echo'bgcolor="green">esame svolto'; else echo'bgcolor="red">esame non effettuato'; ?></td>
    <td id="t_cicloerg"<? if ($esamiCHECK['t_cicloerg'] != '0') echo'bgcolor="green">esame svolto'; else echo'bgcolor="red">esame non effettuato'; ?></td>
    <td id="t_SFT"<? if ($esamiCHECK['t_SFT'] != '0') echo'bgcolor="green">esame svolto'; else echo'bgcolor="red">esame non effettuato'; ?></td>
    <td id="t_tinetti"<? if ($esamiCHECK['t_tinetti']) echo'bgcolor="green" >esame svolto'; else echo'bgcolor="red">esame non effettuato'; ?></td>
    <td id="t_mmse"<? if ($esamiCHECK['t_MMSE'] != '0') echo'bgcolor="green" >esame svolto'; else echo'bgcolor="red">esame non effettuato';?></td>
    </tr>
</table>
<hr />
<a href='<?=base_url()?>esami/tinetti'>tinetti</a>
<a href='<?=base_url()?>esami/sf36'>sf36</a>
<div class="opz_pz" align="center">
                <a href='<?=base_url()?>pz/edit/<?=$pz->codfis?>'>Edit</a>
                <br />
				<a href='<?=base_url()?>pz/delete/<?=$pz->codfis?>'>Delete</a>
<br />
<?php
echo form_open('site/aggiungi_esame');
    echo form_label('tipo esame'); 
    echo form_dropdown('esame', set_value('esame',$esami,''));
	echo form_submit('submit', 'Aggiungi esame');
    echo form_hidden('codfis',$CF);
	echo form_close();
?>

</div>

<div id="tutInfo">
<a href="<?=site_url().'pz/visualizza_lista/'.$this->session->userdata('idmedico');?>">INDIETRO</a>
</div>
<hr/>
<pre><? print_r($this->session->all_userdata()); ?></pre>
<pre><? print_r($esamiCHECK); ?></pre>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
<script>
    $("#t_tinetti").live('click', function(){
        $('#esami_tinetti').slideToggle();
    });
    $("#t_mmse").live('click', function(){
        $('#esami_mmse').slideToggle();
    });
    $("#t_SF36").live('click', function(){
        $('#esami_SF36').slideToggle();
    });
    $("#t_sgrq").live('click', function(){
        $('#esami_sgrq').slideToggle();
    });
    $("#t_cicloerg").live('click', function(){
        $('#esami_cicloerg').slideToggle();
    });
    $("#t_SFT").live('click', function(){
        $('#esami_SFT').slideToggle();
    });
</script>

