@extends('layouts.admin')

@section('content')
    <div class="p-8 bg-slate-50 min-h-screen">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-800">Manajemen Kategori</h1>
                <p class="text-slate-500 mt-1">Kelola kategori event Amikom Event Hub Anda di sini.</p>
            </div>
            <button
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                + Tambah Kategori
            </button>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100 border-b border-slate-200">
                        <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase tracking-wider">No</th>
                        <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase tracking-wider">Nama Kategori</th>
                        <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase tracking-wider">Slug</th>
                        <th class="px-6 py-4 text-sm font-bold text-slate-600 uppercase tracking-wider text-center">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition duration-150">
                        <td class="px-6 py-4 text-sm text-slate-600">1</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Seminar</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">seminar</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-3">
                                <button
                                    class="text-amber-500 hover:text-amber-700 font-medium text-sm transition">Edit</button>
                                <button
                                    class="text-red-500 hover:text-red-700 font-medium text-sm transition">Hapus</button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition duration-150">
                        <td class="px-6 py-4 text-sm text-slate-600">2</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Konser</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">konser</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-3">
                                <button
                                    class="text-amber-500 hover:text-amber-700 font-medium text-sm transition">Edit</button>
                                <button
                                    class="text-red-500 hover:text-red-700 font-medium text-sm transition">Hapus</button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition duration-150">
                        <td class="px-6 py-4 text-sm text-slate-600">3</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-semibold">Workshop</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">workshop</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-3">
                                <button
                                    class="text-amber-500 hover:text-amber-700 font-medium text-sm transition">Edit</button>
                                <button
                                    class="text-red-500 hover:text-red-700 font-medium text-sm transition">Hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-sm text-slate-400 italic">
            * Ini adalah tampilan Graphical User Interface (GUI) awal untuk manajemen kategori.
        </div>
    </div>
@endsection