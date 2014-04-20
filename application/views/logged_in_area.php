<h2>Bentornato Dott. <?php echo $this->session->userdata('nome'); ?></h2>
	
<p>Questa sezione rappresenta l'area visibile solo al medico che ha effettuato il login.</p>
  
<section class="pazienti">
  <h3>Pazienti</h3>
  <p>Qui sotto &egrave; riportata la lista dei pazienti inseriti. &Egrave; possibile aggiungere un paziente <?= anchor('pz/aggiungi/'.$this->session->userdata('idmedico'), 'cliccando qui')?>.</p>
  
  <table border="1" id="risultati_table" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Data di nascita</th>
        <th>CF</th>
        <th>Visualizza</th>
        <!-- <th>Rimuovi</th> -->
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
          <td><a href='<?=base_url()?>pz/crea_index/<?=$pz->codfis?>'>Visualizza</a></td> 
          <!-- <td><a href='<?=base_url()?>pz/carica_delete/<?=$pz->codfis?>'>Rimuovi</a></td>  -->
        </tr>
        <? endforeach; ?>
      <? else:?>
        <tr>
          <td colspan="3">NESSUN UTENTE INSERITO </td>
        </tr>
      <? endif?>
    </tbody>
  </table>
</section>


<script src="<?=base_url()?>js/dataTables/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
<script>  
$(document).ready(function(){
$('#risultati_table').dataTable();
});
</script>