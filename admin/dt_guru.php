<thead>
					<tr>
					<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Tempat Tanggal Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jabatan</th>
						<th>Pangkat Golongan</th>
						<th>Agama</th>
						<th>Pendidikan Terakhir</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;
						$queryguru = mysqli_query ($connect, "SELECT id_guru, nip, nama, tempat, tgl_lahir, jabatan, golongan, agama,
						pendidikan_terakhir FROM tbl_guru");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($guru = mysqli_fetch_array ($queryguru)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$guru[nip]</td>
									<td>$guru[nama]</td>
									<td>$guru[tempat]</td>
									<td>$guru[tgl_lahir]</td>
									<td>$guru[jabatan]</td>
									<td>$guru[golongan]</td>
									<td>$guru[agama]</td>
									<td>$guru[pendidikan_terakhir]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_guru='$guru[id_guru]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"guru_delete.php?id_guru=$guru[id_guru]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>



			 