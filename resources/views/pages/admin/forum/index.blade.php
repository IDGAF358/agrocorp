@extends('layouts.user.app')

@section('content')
    <div class="ml-96 pt-10">
        <p class="text-4xl font-medium">AKUN PELAKU AGRO</p>
        <div class="overflow-x-auto mt-32">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Pembuat</th>
                    <th>Judul</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($forums as $forum)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $forum->title }}</td>
                        <td>{{ $forum->User->name }}</td>
                        <td>
                            <a href="#">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection