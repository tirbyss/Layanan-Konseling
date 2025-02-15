@extends('layouts.mainLayout')

@section('title')
    Kelas - DeepTalk
@endsection

@section('sub_title')
    Kelas
@endsection

@section('content')
@if (Auth::user()->role == 'admin')
<div class="my-12 mx-auto bg-white sm:w-11/12 w-4/5 rounded-2xl h-fit p-5 shadow-md">
    <div class="flex justify-between">
        <p class="text-lg font-bold">Kelas</p>
        <a href="{{ route('kelas.create') }}" class="btn-primary">Tambah Kelas</a>
    </div>
    {{-- table --}}
    <div class="mt-5 overflow-auto">
        <table class="w-full" cellpadding='10' cellspacing='0'>
            <thead class="text-non-active border-b border-non-active">
                <th>
                    <p>No</p>
                </th>
                <th>
                    <p class="sm:min-w-0 min-w-15">Dibuat</p>
                </th>
                <th>
                    <p class="sm:min-w-0 min-w-15">Nama Kelas</p>
                </th>
                <th>
                    <p class="sm:min-w-0 min-w-15">Diubah</p>
                </th>
                <th>
                    <p class="sm:min-w-0 min-w-10">Aksi</p>
                </th>
            </thead>
            <tbody>
                @foreach ($datas as $i => $data)
                    <tr class="border-b border-non-active">
                        <td>{{ $i + $datas->firstItem() }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>{{ $data->updated_at->diffForHumans() }}</td>
                        <td>
                            <div class="flex gap-2 items-center">
                                <a href="{{ route('kelas.show', $data->id) }}" class="text-dark-primary">
                                    <span class="material-symbols-outlined">
                                        info
                                    </span>
                                </a>
                                <a href="{{ route('kelas.edit', $data->id) }}" class="text-warning">
                                    <span class="material-symbols-outlined">
                                        discover_tune
                                        </span>
                                </a>
                                <form action="{{ route('kelas.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="text-danger">
                                        <span class="material-symbols-outlined">
                                            delete
                                            </span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $datas->links() }}
    </div>
</div>
@endif

@if (Auth::user()->role == 'guru')
<div class="my-12 mx-auto sm:w-11/12 w-4/5 grid grid-cols-2 gap-4">
    @foreach ($kelas as $datakelas)
    <div class="w-full bg-white p-5 flex items-center rounded-xl shadow-card justify-between">
        <div class="flex flex-col">
            <p class="text-[13px] text-non-active font-semibold">
                Kelas
            </p>
            <p class="text-[20px] font-semibold">
                {{ $datakelas->kelas->nama }}
            </p>
        </div>
        <div>
            <a href="{{ route('kelas.show', $datakelas->kelas_id) }}" class="btn-primary-form">Detail</a>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
