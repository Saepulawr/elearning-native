<div class="content-wrapper">
<h4> <b>Tugas Guru</b> <small class="text-muted">/</small>
</h4>
<hr>

<div class="row">
  	<div class="col-md-12">
      	<div class="card">
	      <div class="card-body">

          <h4 class="card-title">Data Tugas Guru</h4>
        
				  <div class="table-responsive"> 
                  <table class="table table-dark" id="data">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nik Guru</th>
                        <th>Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Judul Tugas</th>
                        <th>Jenis Tugas</th>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th>Tanggal Tugas</th>
                      </tr>
                    </thead>
                    <tbody style="color: black;">
                    	<?php 
                    	$no=1;
                    	$sql = mysqli_query($con,"SELECT * FROM v_tugas_dari_guru ");
                    	foreach ($sql as $d) {?>
                      <tr>
                        <td><?=$no++; ?>. </td>
                        <td> <?=$d['nik'] ?></td>
                        <td> <?=$d['nama_guru'] ?></td>
                        <td> <?=$d['mapel'] ?></td>
                        <td> <?=$d['judul_tugas'] ?></td>
                        <td><?=$d['jenis_tugas'] ?></td>
                        <td><?=$d['kelas'] ?></td>
                        <td><?=$d['semester'] ?></td>
                        <td><?=$d['tanggal'] ?></td>
                      </tr>
                  <?php } ?>
                    </tbody>
                  </table>
           
</div>

</div>
</div>
</div>
</div>
