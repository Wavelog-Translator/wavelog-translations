<div class="container">

<br>
	<?php if($this->session->flashdata('message')) { ?>
		<!-- Display Message -->
		<div class="alert-message error">
		  <p><?php echo $this->session->flashdata('message'); ?></p>
		</div>
	<?php } ?>

<h2>Satellites</h2>

<div class="card">
  <div class="card-body">

    <div class="table-responsive">

    <table style="width:100%" class="sattable table table-sm table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Export name</th>
                    <th>Orbit</th>
                    <th>Mode</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($satellites as $sat) { ?>
				<tr>
					<td style="text-align: center; vertical-align: middle;"><?php echo $sat->satname ?></td>
					<td style="text-align: center; vertical-align: middle;"><?php echo $sat->exportname ?></td>
					<td style="text-align: center; vertical-align: middle;"><?php echo $sat->orbit ?></td>
					<td style="text-align: center; vertical-align: middle;"><?php echo $sat->modename ?></td>
				</tr>

				<?php } ?>
			</tbody>
		<table>
	</div>
  <br/>
</div>
</div>
