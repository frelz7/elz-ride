<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Motor - Elz Ride Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root { --c-60: #f1f5f9; --c-30: #1e293b; --c-10: #e11d48; }
        body { background-color: var(--c-60); font-family: 'Segoe UI', system-ui, sans-serif; color: var(--c-30); }
        .navbar-custom { background-color: var(--c-30); padding: 15px 0; }
        .navbar-brand { color: #ffffff; font-weight: 900; font-size: 1.6rem; font-style: italic; }
        .navbar-brand span { color: var(--c-10); }
        .form-wrapper { max-width: 700px; margin: 40px auto; background: #ffffff; border-radius: 16px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border-top: 6px solid var(--c-10); overflow: hidden; }
        .form-header { padding: 30px; border-bottom: 2px solid var(--c-60); text-align: center; }
        .form-body { padding: 35px; }
        .form-label { font-weight: 700; color: var(--c-30); margin-bottom: 10px; }
        .form-control { border: 2px solid var(--c-60); border-radius: 8px; padding: 12px 15px; font-weight: 500; background-color: #f8fafc; }
        .form-control:focus { border-color: var(--c-10); background-color: #ffffff; box-shadow: 0 0 0 4px rgba(225, 29, 72, 0.1); }
        .input-group-text { background-color: var(--c-30); color: #ffffff; border: none; font-weight: 600; padding: 0 20px; }
        .btn-accent { background-color: var(--c-10); color: #ffffff; border: none; font-weight: 700; padding: 14px; border-radius: 8px; width: 100%; box-shadow: 0 6px 15px rgba(225, 29, 72, 0.3); }
        .btn-back { display: inline-block; text-decoration: none; color: #64748b; font-weight: 600; margin-bottom: 25px; }
    </style>
</head>
<body>

<nav class="navbar navbar-custom">
    <div class="container">
        <a class="navbar-brand text-decoration-none" href="{{ route('motor.index') }}">ELZ<span>RIDE</span>.</a>
    </div>
</nav>

<div class="container pb-5">
    <div class="form-wrapper">
        <div class="form-header">
            <h4 class="fw-bold m-0 text-dark">Tambah Kendaraan Baru</h4>
        </div>
        <div class="form-body">
            <a href="{{ route('motor.index') }}" class="btn-back"><i class="bi bi-arrow-left me-2"></i>Kembali ke Tabel Inventaris</a>
            
            <form action="{{ route('motor.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label"><i class="bi bi-tag-fill me-2" style="color: var(--c-10);"></i>Nama Model Motor</label>
                    <input type="text" class="form-control" name="nama_produk" placeholder="Contoh: Honda PCX 160 ABS" required>
                </div>
                
                <div class="mb-4">
                    <label class="form-label"><i class="bi bi-card-text me-2" style="color: var(--c-10);"></i>Spesifikasi Detail</label>
                    <textarea class="form-control" name="spesifikasi" rows="4" required></textarea>
                </div>
                
                <div class="row mb-5">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label class="form-label"><i class="bi bi-layers-fill me-2" style="color: var(--c-10);"></i>Alokasi Stok</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="jumlah_produk" required min="0">
                            <span class="input-group-text">Unit</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label"><i class="bi bi-cash-stack me-2" style="color: var(--c-10);"></i>Harga Jual</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" name="harga_produk" required min="0">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn-accent"><i class="bi bi-save-fill me-2"></i>Simpan ke Database</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>