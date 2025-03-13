@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<div class="p-4">
    <h1 class="text-2xl font-bold mb-4 text-center">Hubungi Kami</h1>
    <form>
        <div class="mb-2">
            <label class="block text-gray-700">Nama Lengkap</label>
            <input type="text" placeholder="Masukkan nama lengkap Anda" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-2">
            <label class="block text-gray-700">Email</label>
            <input type="email" placeholder="Masukkan email Anda" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-2">
            <label class="block text-gray-700">Telepon</label>
            <input type="tel" placeholder="Masukkan nomor telepon Anda" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-2">
            <label for="subject" class="block text-gray-700">Subjek</label>
            <select class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih subjek pesan</option>
                <option value="pertanyaan">Pertanyaan</option>
                <option value="masukan">Masukan</option>
                <option value="kerjasama">Kerjasama</option>
            </select>
        </div>
        <div class="mb-2">
            <label class="block text-gray-700">Pesan</label>
            <textarea placeholder="Tulis pesan Anda di sini..." class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <div class="mb-2">
            <label class="block text-gray-700">Lampiran</label>
            <input type="file" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-2">
            <label class="block text-gray-700">Jenis Kelamin</label>
            <div class="flex items-center">
                <input type="radio" name="gender" id="male" class="mr-1">
                <label for="male" class="mr-2">Pria</label>
                <input type="radio" name="gender" id="female" class="mr-1">
                <label for="female">Wanita</label>
            </div>
        </div>
        <div class="mb-2">
            <input type="checkbox" id="terms" class="mr-1">
            <label for="terms">Saya menyetujui syarat dan ketentuan</label>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Kirim Pesan</button>
        </div>
    </form>
</div>

@endsection