<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elz Ride Showroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root { --c-60: #f1f5f9; --c-30: #1e293b; --c-10: #e11d48; }
        body { background-color: var(--c-60); font-family: 'Segoe UI', system-ui, sans-serif; color: var(--c-30); }
        .navbar-custom { background-color: var(--c-30); padding: 15px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .navbar-brand { color: #ffffff; font-weight: 900; font-size: 1.6rem; font-style: italic; letter-spacing: 1px; }
        .navbar-brand span { color: var(--c-10); }
        .hero-section { background: linear-gradient(135deg, var(--c-30) 0%, #0f172a 100%); padding: 50px 0 80px; color: white; border-radius: 0 0 30px 30px; margin-bottom: -50px; box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
        .card-custom { background: #ffffff; border-radius: 16px; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.08); overflow: hidden; }
        .card-header-custom { background-color: #ffffff; padding: 25px 30px; border-bottom: 2px solid var(--c-60); }
        .btn-accent { background-color: var(--c-10); color: #ffffff; border: none; font-weight: 700; padding: 10px 24px; border-radius: 8px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.3); transition: all 0.3s; text-decoration: none; }
        .btn-accent:hover { background-color: #be123c; color: #ffffff; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4); }
        .table thead th { background-color: var(--c-30); color: #ffffff; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; padding: 18px 15px; border: none; }
        .table tbody td { padding: 18px 15px; vertical-align: middle; border-bottom: 1px solid var(--c-60); }
        .badge-stok { background-color: var(--c-10); color: #ffffff; font-weight: 600; padding: 6px 12px; border-radius: 6px; box-shadow: 0 2px 8px rgba(225, 29, 72, 0.25); }
        .btn-edit { background-color: var(--c-30); color: #ffffff; border-radius: 6px; font-weight: 600; padding: 8px 14px; text-decoration: none; }
        .btn-delete { background-color: transparent; border: 2px solid var(--c-10); color: var(--c-10); border-radius: 6px; font-weight: 600; padding: 6px 14px; }
        .btn-delete:hover { background-color: var(--c-10); color: #ffffff; }
    </style>
</head>
<body>

<nav class="navbar navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand text-decoration-none" href="{{ route('motor.index') }}">ELZ<span>RIDE</span>.</a>
    </div>
</nav>

<div class="hero-section text-center">
    <div class="container">
        <h2 class="fw-bold display-6 mb-2">Inventaris Eksklusif</h2>
        <p class="opacity-75 mb-0">Kendali penuh atas koleksi premium Anda.</p>
    </div>
</div>

<div class="container pb-5">
    <div class="card-custom position-relative">
        <div class="card-header-custom d-flex justify-content-between align-items-center">
            <h5 class="fw-bold m-0 text-dark"><i class="bi bi-box-seam-fill me-2" style="color: var(--c-10);"></i>Daftar Kendaraan</h5>
            <a href="{{ route('motor.create') }}" class="btn-accent"><i class="bi bi-plus-circle me-1"></i> Tambah Motor</a>
        </div>
        <div class="table-responsive">
            <table class="table mb-0 text-center">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%" class="text-start">Model Motor</th>
                        <th width="30%" class="text-start">Spesifikasi Detail</th>
                        <th width="10%">Sisa Stok</th>
                        <th width="15%">Harga Jual</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($motors as $index => $data)
                        <tr>
                            <td class="fw-bold text-muted">{{ $index + 1 }}</td>
                            <td class="text-start fw-bold text-dark" style="font-size: 1.05rem;">{{ $data->nama_produk }}</td>
                            <td class="text-start text-muted" style="font-size: 0.9rem;">{{ $data->spesifikasi }}</td>
                            <td><span class="badge-stok">{{ $data->jumlah_produk }} Unit</span></td>
                            <td class="fw-bold" style="color: var(--c-10); font-size: 1.05rem;">Rp {{ number_format($data->harga_produk, 0, ',', '.') }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('motor.edit', $data->id) }}" class="btn-edit"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('motor.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete"><i class="bi bi-trash3-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 fw-bold text-muted">
                                <i class="bi bi-inbox fs-1 d-block mb-3 opacity-50"></i>
                                Data inventaris masih kosong.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>