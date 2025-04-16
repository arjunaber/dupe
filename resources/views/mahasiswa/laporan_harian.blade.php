@extends('partials_mahasiswa_login.template')

@section('main')
    {{-- ganti dari 'content' ke 'main' --}}
    <div class="d-flex" style="min-height: 100vh">

        {{-- Sidebar --}}
        @include('partials_mahasiswa_login.sidebar_mahasiswa')

        {{-- Konten Utama --}}
        <div class="flex-grow-1 p-4" style="margin-top: 60px;">
            <div class="d-flex gap-2">
                <button class="btn btn-outline-danger fw-semibold" style="pointer-events: none;">UPLOAD LAPORAN</button>
                <button class="btn btn-outline-secondary text-muted" disabled>STATUS LAPORAN</button>
                <button class="btn btn-outline-secondary text-muted" disabled>MINTA IZIN</button>
            </div>


            <div class="card shadow-sm mt-3">

                <div class="card-body">
                    <h5 class="fw-bold mb-3">Laporan Harian</h5>
                    <p class="text-muted">Tulis Apa Saja Yang Kamu Sudah Kerjakan Hari Ini</p>

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control"
                                value="{{ now()->format('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-semibold">Deskripsi pekerjaan</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"
                                placeholder="Tuliskan kegiatanmu hari ini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger w-100 rounded-pill mt-3">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
