@extends('layout')

@section('content')



    <!-- Bagian konten utama dengan warna background -->
    <section class="bg-primary py-24">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-dark mb-4">Jasa Rental Mobil Online</h1><br>
            <a href="{{ route('cars.index') }}" class="btn btn-secondary text-lg font-semibold py-3 px-6 rounded-lg">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Bagian informasi tambahan -->
    <section class="bg-primary py-12">
        <div class="container mx-auto text-center">
            <p class="text-lg font-semibold text-dark">Nikmati Kemudahan Menyewa Mobil Dengan Layanan Kami</p>
        </div>
    </section>

@endsection
