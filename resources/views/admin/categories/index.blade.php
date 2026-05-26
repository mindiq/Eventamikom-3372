@extends('layouts.admin', ['title' => 'Manajemen Kategori'])

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Kategori</h1>
        <p class="text-slate-500 font-medium">Kelola kategori event Amikom Event Hub.</p>
    </div>
    <button onclick="document.getElementById('modalTambah').classList.remove('hidden')"
        class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
        + Tambah Kategori
    </button>
</header>

@if(session('success'))
<div class="mb-6 px-5 py-3 bg-green-100 text-green-700 rounded-2xl font-semibold">
    {{ session('success') }}
</div>
@endif

{{-- Form Search --}}
<form method="GET" action="{{ route('admin.categories.index') }}" class="mb-6 flex gap-3">
    <input type="text" name="search" value="{{ $search ?? '' }}"
        placeholder="Cari nama kategori..."
        class="flex-1 px-5 py-3 rounded-2xl border border-slate-200 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 text-sm">
    <button type="submit"
        class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">Cari</button>
    @if($search)
    <a href="{{ route('admin.categories.index') }}"
        class="px-5 py-3 bg-slate-100 text-slate-600 rounded-2xl font-semibold hover:bg-slate-200 transition">Reset</a>
    @endif
</form>

{{-- Tabel --}}
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Dibuat</th>
                    <th class="px-8 py-4">Diperbarui</th>
                    <th class="px-8 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                @forelse($categories as $index => $category)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-5 font-bold text-slate-400">{{ $index + 1 }}</td>
                    <td class="px-8 py-5 font-black text-slate-800">{{ $category->name }}</td>
                    <td class="px-8 py-5 text-sm text-slate-400">{{ $category->created_at->format('d M Y') }}</td>
                    <td class="px-8 py-5 text-sm text-slate-400">{{ $category->updated_at->format('d M Y') }}</td>
                    <td class="px-8 py-5">
                        <div class="flex justify-center gap-2">
                            <button onclick="openEditModal({{ $category->id }}, '{{ addslashes($category->name) }}')"
                                class="p-2.5 bg-amber-50 text-amber-500 rounded-xl hover:bg-amber-500 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="p-2.5 bg-rose-50 text-rose-500 rounded-xl hover:bg-rose-500 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-12 text-center text-slate-400 italic">
                        {{ $search ? 'Tidak ada kategori yang cocok dengan pencarian.' : 'Belum ada kategori. Silakan tambah kategori baru.' }}
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- Modal Tambah --}}
<div id="modalTambah" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white rounded-[2rem] shadow-2xl p-8 w-full max-w-md">
        <h2 class="text-xl font-black mb-6">Tambah Kategori Baru</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Kategori</label>
                <input type="text" name="name" required placeholder="Contoh: Seminar, Konser..."
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400">
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')"
                    class="px-5 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-semibold hover:bg-slate-200 transition">Batal</button>
                <button type="submit"
                    class="px-6 py-2.5 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit --}}
<div id="modalEdit" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white rounded-[2rem] shadow-2xl p-8 w-full max-w-md">
        <h2 class="text-xl font-black mb-6">Edit Kategori</h2>
        <form id="formEdit" method="POST">
            @csrf @method('PUT')
            <div class="mb-5">
                <label class="block text-sm font-bold text-slate-600 mb-2">Nama Kategori</label>
                <input type="text" name="name" id="editNama" required
                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-400">
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('modalEdit').classList.add('hidden')"
                    class="px-5 py-2.5 bg-slate-100 text-slate-600 rounded-xl font-semibold hover:bg-slate-200 transition">Batal</button>
                <button type="submit"
                    class="px-6 py-2.5 bg-amber-500 text-white rounded-xl font-bold hover:bg-amber-600 transition">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(id, name) {
    document.getElementById('editNama').value = name;
    document.getElementById('formEdit').action = '/admin/categories/' + id;
    document.getElementById('modalEdit').classList.remove('hidden');
}
</script>
@endsection