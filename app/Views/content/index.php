<div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
                        <a href="<?= base_url('content/create') ?>" class="btn btn-primary mb-3">Tambah Konten</a>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contents as $content) : ?>
                                        <tr>
                                            <td><?= $content['judul'] ?></td>
                                            <td><?= $content['deskripsi'] ?></td>
                                            <td><?= $content['tanggal'] ?></td>
                                            <td>
                                                <img src="<?= base_url('uploads/content/' . $content['foto']) ?>" alt="<?= $content['judul'] ?>" class="img-thumbnail" width="100">
                                            </td>
                                            <td>
                                                <a href="<?= base_url('content/read/' . $content['id']) ?>" class="btn btn-sm btn-success">Read</a>
                                                <a href="<?= base_url('content/edit/' . $content['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="<?= base_url('content/delete/' . $content['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#dataTable').DataTable();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>