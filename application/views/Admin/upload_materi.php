

          <!-- Page Heading -->

          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
       <?php echo form_open_multipart('Admin/upload_materiku');?>
        <div class="login-wrap">

          <label>Pilih Kategori</label>
          <select class="form-control" name="kategori" id="kategori" required>
            <option value="">(Pilih Kategori)</option>
            <?php
            foreach($kegiatan as $row):?>
              <option value="<?php echo $row->jenis_kegiatan;?>"><?php echo $row->jenis_kegiatan;?></option>
            <?php endforeach;?>
          </select>
          <br>
          <label>Judul</label>
          <input type="text" class="form-control" placeholder="Judul" name="judul" required>
          <br>
          Upload:
          <input type="file" name="berkas" required ><br><br>
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Post Materi</button>
          <hr>

        </div>
        <!-- modal -->
      </form>

      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
