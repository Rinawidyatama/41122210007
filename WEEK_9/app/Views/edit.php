<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Note</h2>
        <form action="<?= base_url('confirebase/update_data'); ?>" method="post">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $note['judul']; ?>">
            </div>
            <div class="form-group">
                <label for="peserta">Peserta:</label>
                <input type="text" class="form-control" id="peserta" name="peserta" value="<?= $note['peserta']; ?>">
            </div>
            <input type="hidden" name="key" value="<?= $note['key']; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>