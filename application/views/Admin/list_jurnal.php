

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
         <?= $this->session->flashdata('pesan'); ?>
         <div class="row mt">
          <div class="col-lg-12">
            <table style="margin:20px auto;" border="1" class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Judul Jurnal</th>

      <th>Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach($jurnal->result() as $u){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_jurnal ?></td>


        <td>
        <a type="button" class="btn btn-danger" href="<?= base_url('Admin/hapus_jurnal/')?><?= $u->id ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
        </td>
		</tr>
		<?php } ?>
        </table>
          </div>
          
        </div>
      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      