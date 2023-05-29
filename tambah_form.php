<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Tambah Data Mahasiswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .btn-space {
            margin-right: 8px
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <h3 style="margin: 20px 0px 20px 0px">Tambah Data Mahasiswa</h3>
            <form method="post" action="tambah_aksi.php" class="form-horizontal">
                <div class="mb-3">
                    <label class="form-label fw-bold">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria">
                        <label class="form-check-label">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita">
                        <label class="form-check-label">
                            Wanita
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Program Studi</label>
                    <select class="form-select" name="program_studi">
                        <option selected>--Pilih Program Studi--</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Keahlian</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Data Mining">
                        <label class="form-check-label">
                            Data Mining
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Enterprise Architecture">
                        <label class="form-check-label">
                            Enterprise Architecture
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Image Processing">
                        <label class="form-check-label">
                            Image Processing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="keahlian[]" value="Software Engineering">
                        <label class="form-check-label">
                            Software Engineering
                        </label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button type="reset" name="reset" class="btn btn-danger btn-space">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>