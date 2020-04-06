<thead>
					<tr>
					<th>No</th>
						<th>No Induk</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>No Hp</th>
						<th>Email</th>
						<th>Tempat Tanggal Lahir</th>
						<th>Tanggal Lahir</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 0;
						$querysiswa = mysqli_query ($connect, "SELECT no_induk, nama, kelas, jenis_kelamin, agama,
						alamat, no_hp, email, tempat, tanggal_lahir FROM tbl_siswa");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($siswa = mysqli_fetch_array ($querysiswa)){
							$no++;
							
							echo "
								<tr>
									<td>$no</td>
									<td>$siswa[no_induk]</td>
									<td>$siswa[nama]</td>
									<td>$siswa[kelas]</td>
									<td>$siswa[jenis_kelamin]</td>
									<td>$siswa[agama]</td>
									<td>$siswa[alamat]</td>
									<td>$siswa[no_hp]</td>
									<td>$siswa[email]</td>
									<td>$siswa[tempat]</td>
									<td>$siswa[tanggal_lahir]</td>
									<td>
										<a href='#' class='open_modal btn btn-primary' id_siswa='$siswa[id_siswa]'>Edit</a> 
										<a href='#' class='btn btn-danger' onClick='confirm_delete(\"siswa_delete.php?id_siswa=$siswa[id_siswa]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>



			 