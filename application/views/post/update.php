<div class="container">
<div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Update Post
                </div>
                <div class="card-body">
                <?php foreach($post as $post): ?>
                <form action="<?= base_url() ?>post/Update/<?= $post['id_post'] ?>" method="POST">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="<?= $post['judul'] ?>" >
                    <?=form_error('judul', '<small class="text-danger">', '</small>')?>
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" name="isi" id="isi" placeholder="Masukkan isi" ><?= $post['isi'] ?></textarea>
                    <?=form_error('isi', '<small class="text-danger">', '</small>')?>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="<?= base_url() ?>post" class="btn btn-secondary">Batal</a>
                </form>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>