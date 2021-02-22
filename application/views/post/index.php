<div class="container">
<?php if ($this->session->flashdata('pesan')):?>
<div class="row">
<div class="col-md-4 top mt-2 alert alert-<?=$this->session->flashdata('tipe');?>">Post Berhasil <?=$this->session->flashdata('pesan');?></div>
</div>
<?= unset($_SESSION['pesan']); ?>
<?php endif?>
<div class="row"> 
        <div class="col-md-4 d-flex justify-content-between top mt-2">
            <h1>Posts</h1>
            <a href="<?= base_url() ?>post/tambah" class="btn btn-primary align-self-center">Tambah Post</a>
        </div>
        
    </div>
    
    <!-- <hr> -->
    <div class="row">
        <div class="col">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <?php if (isset($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-12 mb-3">
                    <h3 class="text-truncate"><?= $post['judul']; ?></h3>
                    <p class="" style="-webkit-line-clamp:3; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;"><?= $post['isi']; ?>
                    </p>
                    <a role="button" href="<?= base_url() ?>post/lihat/<?= $post['id_post'] ?>" class="btn btn-primary">Lihat &raquo;</a>
                    <a role="button" href="<?= base_url() ?>post/hapus/<?= $post['id_post'] ?>" class="btn btn-danger float-right ml-2" onclick="return confirm('Yakin ingin menghapus post?')">Hapus</a>
                    <a role="button" href="<?= base_url() ?>post/update/<?= $post['id_post'] ?>" class="btn btn-success float-right">Update</a>
                    
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
