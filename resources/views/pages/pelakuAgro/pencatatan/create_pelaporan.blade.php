@extends('layouts.user.app')

@section('content')
<div class="mt-10 flex w-full h-[100vh] justify-center items-center">
    <form action="{{ route("pelaku-agro.pelaporan.store") }}" method="POST">
        @csrf
        <div class="input-field flex gap-40 pt-5 pl-10">
            <div class="field-1">
                <div class="flex flex-col gap-3">
                    <label class="font-medium text-[#159895]">Tanggal Produksi</label>
                    <input type="date" name="production_date" class="input w-full border-[#159895]">
                </div>

                <div class="flex flex-col gap-3 mt-5">
                    <label class="font-medium text-[#159895]">Produksi Awal</label>
                    <input type="number" name="start_production" class="input w-full border-[#159895]">
                </div>
            </div>

            <div class="field-2">
                <div class="flex flex-col gap-3 mt-5">
                    <label class="font-medium text-[#159895]">Produksi Akhir</label>
                    <input type="number" name="end_production" class="input w-full border-[#159895]">
                </div>
            </div>
        </div>

        <div class="mt-28 flex justify-center">
            <button class="btn bg-[#159895]">Simpan</button>
        </div>
    </form>
</div>
@endsection