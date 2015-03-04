<?php $this->load->view('struct/header_v'); ?>
<div class="container">
<div class="row">
	<h1>Alta de Evento</h1>
	<form action="index.php/evento_c/altaEvento" method="post" accept-charset="utf-8">
		<div class="form-group">
			<label for="nom">Nombre: </label>
			<input name="nom" type="text" class="form-control" placeholder="Nombre del Evento" required>
		</div>
		<div class="form-group">
			<label for="fecha">Fecha: </label>
			<input name="fecha" type="date" class="form-control" placeholder="dd/mm/aaaa" required>
		</div>
		<div class="form-group">
			<label for="lugar">Lugar: </label>
			<input name="lugar" type="text" class="form-control" placeholder="Lugar" required>
		</div>
		<div class="form-group">
			<label for="hora">Hora: </label>
			<input name="hora" type="text" class="form-control" placeholder="00:00" required>
		</div>
		<div class="form-group">
			<label for="costo">Costo: </label>
			<input name="costo" type="text" class="form-control" placeholder="9999.99" required>
		</div>
		<button type="submit">Enviar</button>

	</form>
	
</div>
</div>
<?php $this->load->view('struct/footer_v'); ?>