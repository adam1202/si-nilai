<?php

include "../include/connect.php";

$id_guru	= $_GET["id_guru"];

$queryguru = mysqli_query($connect, "SELECT * FROM tbl_guru WHERE id_guru='$id_guru'");
if($queryguru == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($guru = mysqli_fetch_array($queryguru)){

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
	<!-- Modal Popup guru Edit -->
		<div id="ModalEditGuru" class="modal fade" tabindex="-1" role="dialog"></div>
<!-- Modal Popup guru -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">EDIT DATA GURU/h4>
					</div>
					<div class="modal-body">
						<form action="guru_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nip" type="text" class="form-control" value="" />
									</div>
							</div>
							<div class="form-group">
								<label>tempat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="tempat" type="text" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>tgl lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<select name="level" class="form-control">
										<option value='admin'>admin</option>
                    <option value='dokter'>dokter</option>
                    <option value='operator'>operator</option>
										</select>
									</div>
									</div>
									
									<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>