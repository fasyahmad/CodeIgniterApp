<!-- <?php var_dump($mahasiswa); ?> -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md6">   
            <h3>Daftar Mahasiswa</h3>   
            <ul class="list-group">
            <?php foreach($mahasiswa as $mhs) : ?>
            <li class="list-group-item"><?= $mhs['Nama']; ?></li>
            <?php endforeach ; ?>
            </ul>
        </div>
    </div>
</div>