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
    <title>Buat Project</title>
</head>
<style>
    body {
        background-image: url('images/background.jpg');
        /* Warna latar belakang untuk body */
    }
</style>

<body>

    <div class="container mt-5 bg-white p-4 rounded">
        <h2 class="mb-4">Buat Project Freelance</h2>

        <form action="<?= base_url('Home/buatproject') ?>" method="post">
            <div class="form-group">
                <label for="projectName">Nama Project:</label>
                <input type="text" class="form-control" id="projectName" name="projectName" required>
            </div>

            <div class="form-group">
                <label for="category">Kategori Freelance:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="programmer">Programmer</option>
                    <option value="video_editor">Video Editor</option>
                    <option value="writer">Writer</option>
                    <option value="designer">Designer</option>
                </select>
            </div>


            <div class="form-group">
                <label for="description">Deskripsi Project:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startDate">Tanggal Mulai:</label>
                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="deadline">Tanggal Deadline:</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="budget">Anggaran (IDR):</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" id="budget" name="budget" oninput="formatCurrency(this)"
                            required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="payment">Metode Pembayaran:</label>
                    <select class="form-control" id="payment" name="payment" required>
                        <option value="bank">Transfer Bank</option>
                        <option value="paypal">PayPal</option>
                        <option value="gopay">GoPay</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script>
        function formatCurrency(input) {
            // Menghapus karakter selain angka
            let numericValue = input.value.replace(/\D/g, '');

            // Format angka dengan menambahkan titik sebagai pemisah ribuan
            let formattedValue = new Intl.NumberFormat('id-ID').format(numericValue);

            // Menampilkan nilai yang telah diformat ke dalam input
            input.value = `Rp ${formattedValue}`;
        }
    </script>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>