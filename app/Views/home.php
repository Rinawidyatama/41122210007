<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>

<body>
    <h1>Notes Rapat</h1>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Peserta</th>

                </tr>

            </thead>
            <tbody>
                <?php
                $nomor = 1;
                //foreach ($kat as $katlist) :
                ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $katlist['judul'] ?></td>
                    <td>
                        <a href="<?= base_url('kategori_add/' . $katlist['id'] . '/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="<?= base_url('home/' . $katlist['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php
                $nomor++;
                //endforeach;
                ?>
            </tbody>

        </table>
    </div>


    <!-- /.card-body -->

</body>

</html>