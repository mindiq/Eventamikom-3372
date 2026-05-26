@extends('layouts.admin', ['title' => 'Tambah Partner'])

@section('content')
<div class="max-w-xl">
    <div class="mb-8">
        <a href="{{ route('admin.partners.index') }}"
            class="text-sm text-indigo-600 font-semibold hover:underline">← Kembali ke Daftar Partner</a>
        <h1 class="text-3xl font-black mt-3">Tambah Partner Baru</h1>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm p-8">
        <form action="{{ route('admin.partners.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Partner <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" required
                    placeholder="Contoh: Google, Gojek, Tokopedia..."
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('name') border-red-400 @enderror">
                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-slate-600 mb-2">URL Logo <span class="text-slate-400 font-normal">(opsional)</span></label>
                <input type="url" name="logo_url" value="{{ old('logo_url') }}"
                    placeholder="https://example.com/logo.png"
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('logo_url') border-red-400 @enderror">
                @error('logo_url')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                <p class="text-xs text-slate-400 mt-1">Masukkan URL lengkap gambar logo partner.</p>
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.partners.index') }}"
                    class="px-5 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-semibold hover:bg-slate-200 transition">Batal</a>
                <button type="submit"
                    class="px-6 py-2.5 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">Simpan Partner</button>
            </div>
        </form>
    </div>
</div>
@endsection