<div class="col-md-10 content">
	<br/>
	<button class="btn btn-success" id="view_modal_pem_matkul"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</button>
	<hr/>
	<br/>
	<div class="table-responsive">
	<table class="table table-striped t">
		<thead>
			<tr>
				<th>
					No.
				</th>
				<th>
					Kode Matakuliah
				</th>
				<th>
					Nama Matakuliah
				</th>
				</th>
				<th>
					Dosen Pengampu
				</th>
				<th>
					
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
			foreach($isi as $data){
		?>
			<tr>
				<td>
					<?=$no++?>.
				</td>
				<td>
					<?=$data->kode_matkul?>
				</td>
				<td>
					<?=$data->nama_mk?>
				</td>	
				<td>
					<?=$data->nama_dosen?>
				</td>			
				<td align="center">
					<a href="#" data-toggle="tooltip" data-placement="bottom" title="Hapus" id="<?=$data->pem_id?>" class="hapus_pem_matkul" style="color:red"><i class="fa fa-trash" aria-hidden="true"></i>
					</a> | 
					<a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit" id="<?=$data->pem_id?>" class="edit_pem_matkul" style="color:green"><i class="fa fa-pencil" aria-hidden="true"></i>
					</a> <!--| 
					<a href="#" data-toggle="tooltip" data-placement="bottom" title="Lihat" id="<?=$data->id?>" class="lihat_admin" style="color:brown"><i class="fa fa-eye" aria-hidden="true"></i>
					</a>-->
				</td>
			</tr>
		<?php
			}
		?>
			
		</tbody>
	</table>
</div>
	<br/>
</div>

<!-- Modal -->
<div id="modal_pem_matkul" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengampu Matakuliah</h4>
      </div>
      <div class="modal-body">
        <div id="notif_pem_matkul"></div>
        <form class="form-inline" role="form" id="form_pem_matkul">
		  <div class="form-group">
		    <label for="email">Kode Matakuliah:</label><br/>
		    <input type="text" class="form-control" id="matkul" name="matkul" placeholder="matkuliah" required>
		    <input type="text" name="aksi_pem_matkul" id="aksi_pem_matkul" style="display:none" />
	        <input type="text" name="id_pem_matkul" id="id_pem_matkul" style="display:none" />
		  </div>
		  <div class="form-group">
		    <label for="pwd">Dosen:</label><br/>
		    <select class="form-control" id="dosen" name="dosen">
		    	<option>--pilih--</option>
		    	<?php
		    	foreach ($dosen as $dosen) {
		    	?>
		    	<option value="<?=$dosen->no_dosen?>"><?=$dosen->nama_dosen?></option>
		    	<?php
		    	}
		    	?>
		    </select>
		  </div>
		  <div class="form-group">
		    <label style="color:#fff" for="pwd">Password:</label><br/>
		  	<button type="submit" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Submit</button>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal Hapus -->
<div id="modal_hapus_pem_matkul" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengampu Matakuliah</h4>
      </div>
      <div class="modal-body">
      	<div id="notif_hapus_pem_matkul"></div>
      	<p>
      		Apakah anda yakin akan menghapus data ini ?
      	</p>
      	<p>
      		<button type="button" class="btn btn-danger" id="proses_hapus_pem_matkul" >Ya</button>
      		<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      	</p>
      </div>
      <!--<div class="modal-footer">
        
      </div>-->
    </div>

  </div>
</div>