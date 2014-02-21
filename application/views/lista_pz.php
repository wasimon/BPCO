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
A:link , A:visited { color: #000000; text-decoration: none; }
A:hover { text-decoration: underline; }

tr:nth-child(odd) {
    background-color: #e3e3e3;
}
table.risultati{
    width: 800px;
    border: solid;
}


</style>
<body>
<div id="main">
<table border="1" class="risultati">
	<tr>
		<th>Nome</th>
		<th>CF</th>
        <th>Visualizza</th>
       	
	</tr>
	<? if(isset($pazienti) && is_array($pazienti) AND count($pazienti)>0):?>
		<? foreach($pazienti as $pz):?>
			<tr>
				<td><?= $pz->nome?></td>
                <td><?= $pz->codfis?></td>
    <td><a href='<?=base_url()?>pz/visualizza_uno/<?=$pz->codfis?>'>Visualizza</a></td>
    <td><a href='<?=base_url()?>pz/crea_index/<?=$pz->codfis?>'>prova</a></td> 
                
			</tr>
		<? endforeach?>
	<? else:?>
		<tr>
			<td colspan="3">NESSUN UTENTE INSERITO </td>
		</tr>
	<? endif?>
</table>
</div>

<div id="fotter">
<a href="<?=site_url();?>">INDIETRO</a>&nbsp;|&nbsp;
<? $logged = $this->session->userdata('is_logged_in'); ?>
<?php if($logged) echo anchor('login/logout', 'LOG-OUT');?>
</div>
</body>