<div class="container">
<div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <?php foreach($post as $post): ?>
                    <h1><?= $post['judul']; ?></h1>
                    <p class="text-justify" ><?= $post['isi']; ?></p>
                  <a href="<?= base_url() ?>post" class="btn btn-secondary">Back</a>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

