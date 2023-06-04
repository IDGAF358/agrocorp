@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Status</th>
                    <th>Bukti</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($kerja_samas as $kerja_sama)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $kerja_sama->Mitra->name }}</td>
                        <td>
                            <div class="badge border-0 {{ $kerja_sama->transaction_status == "Belum Lunas" ? "bg-red-500" : ($kerja_sama->transaction_status == "Ditolak" ? "bg-red-500" : ($kerja_sama->transaction_status == "Disetujui" ? "bg-green-500" : "")) }}">
                                <p>{{ $kerja_sama->transaction_status == "Disetujui" ? "Lunas" : $kerja_sama->transaction_status }}</p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route("pelaku-agro.pembayaran.show", $kerja_sama->Mitra->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection