<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/forum.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="icon" href="<?= base_url('genshin.ico') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('genshin.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        body {
            background-image: url('images/background.jpg');
            /* Warna latar belakang untuk body */
        }
    </style>
    <title>Forums</title>
</head>

<body>

    <div class="container custom-container">
        <h3>Forums</h3>

        <form action="<?= base_url('home/kirimPesan') ?>" method="post">
            <div class="input-group">
                <div class="input-group-prepend">
                    <input type="text" class="form-control" name="nama" value="<?= session()->get('username') ?>"
                        readonly>
                </div>
                <input type="text" class="form-control" name="pesan" placeholder="Apa yang Anda pikirkan" required autocomplete="off">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Kirim
                    </button>
                </div>
            </div>
        </form>


        <!-- Menampilkan pesan sukses/error -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Menampilkan pesan dari MySQL -->
        <div class="mt-3">
    <?php foreach ($pesanFromDB as $pesan): ?>
        <div class="mb-3 border rounded p-3">
            <div class="d-flex align-items-center mb-2">
                <strong>@<?= $pesan['nama'] ?></strong>
            </div>
            <p><?= $pesan['pesan'] ?></p>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-primary btn-sm mr-2">
                    <i class="fas fa-thumbs-up"></i> Like
                </button>

                <button class="btn btn-outline-secondary btn-sm mr-2">
                    <i class="fas fa-comment"></i> Komen
                </button>

                <button class="btn btn-outline-success btn-sm">
                    <i class="fas fa-share"></i> Share
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    </div>



    </div>

    <!-- Script Bootstrap (jQuery dan Popper.js diperlukan untuk beberapa fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>