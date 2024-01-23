<!-- project.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('genshin.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Project</title>

</head>
<style>
    body {
        background-image: url('images/bg.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .container {
        background-color: #ffffff;
        padding: 20px;
        margin: 20px auto;
        /* Ditengah secara horizontal */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    .project-list {
        list-style: none;
        padding: 0;
    }

    .project-item {
        border: 1px solid #ddd;
        margin-bottom: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .project-details {
        padding: 20px;
    }

    .project-name {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .project-description {
        color: #555;
        margin-bottom: 10px;
    }

    .project-category {
        color: blue;
        margin-bottom: 10px;
    }

    .project-start,
    .project-deadline,
    .project-budget,
    .project-payment {
        margin-bottom: 5px;
    }

    .project-budget {
        font-size: 18px;
        color: #28a745;
    }

    .project-payment {
        font-weight: bold;
    }
</style>




<body>

    <div class="container">
        <h1 class="mb-4 text-center">Proyek Freelance</h1>
        <ul class="project-list">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <li class="project-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="project-details">
                                    <p class="project-name">
                                        <?= $project['projectName']; ?>
                                    </p>
                                    <p class="project-description">
                                        <?= $project['description']; ?>
                                    </p>
                                    <p class="project-category">
                                        <?= $project['category']; ?>
                                    </p>
                                    <p class="project-start"><strong>Waktu Mulai:</strong>
                                        <?= $project['startDate']; ?>
                                    </p>
                                    <p class="project-deadline"><strong>Deadline:</strong>
                                        <?= $project['deadline']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="project-details">
                                    <p class="project-budget">Rp
                                        <?= number_format($project['budget'], 0, ',', '.'); ?>
                                    </p>
                                    <p class="project-payment"><strong>Pembayaran:</strong>
                                        <?= $project['payment']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Tidak ada proyek yang ditemukan.</p>
            <?php endif; ?>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>