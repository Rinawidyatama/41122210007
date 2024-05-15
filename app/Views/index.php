<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Notes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Peserta</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notes as $note) : ?>
                    <tr>
                        <td><?= $note['judul']; ?></td>
                        <td><?= $note['peserta']; ?></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>