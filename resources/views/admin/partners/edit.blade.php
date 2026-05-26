@extends('layouts.admin', ['title' => 'Edit Partner'])

@section('content')
<div class="max-w-xl">
    <div class="mb-8">
        <a href="{{ route('admin.partners.index') }}"
            class="text-sm text-indigo-600 font-semibold hover:underline">← Kembali ke Daftar Partner</a>
        <h1 class="text-3xl font-black mt-3">Edit Partner</h1>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm p-8">
        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-5">
                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Partner <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name', $partner->name) }}" required
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('name') border-red-400 @enderror">
                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-slate-600 mb-2">URL Logo <span class="text-slate-400 font-normal">(opsional)</span></label>
                @if($partner->logo_url)
                <div class="mb-3 flex items-center gap-3">
                    <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                        class="w-16 h-16 rounded-xl object-contain border border-slate-200 bg-slate-50 p-2">
                    <span class="text-xs text-slate-400">Logo saat ini</span>
                </div>
                @endif
                <input type="url" name="logo_url" value="{{ old('logo_url', $partner->logo_url) }}"
                    placeholder="https://example.com/logo.png"
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('logo_url') border-red-400 @enderror">
                @error('logo_url')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.partners.index') }}"
                    class="px-5 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-semibold hover:bg-slate-200 transition">Batal</a>
                <button type="submit"
                    class="px-6 py-2.5 bg-amber-500 text-white rounded-xl font-bold hover:bg-amber-600 transition">Update Partner</button>
            </div>
        </form>
    </div>
</div>
@endsection