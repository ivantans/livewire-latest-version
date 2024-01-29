@extends('layouts.app')

@section('container')
<div class="w-full px-5 py-1">
    <div id="liveupdate" class="py-3">
        <h1 class="text-2xl font-bold">Live Update</h1>
        @livewire("name")
    </div>

    <div id="plusminus" class="py-3">
        <h1 class="text-2xl font-bold">Increment and Decrement</h1>
        @livewire("penjumlahan")
    </div>

    <div id="changeproperty" class="py-3">
        <h1 class="text-2xl font-bold">Ubah Property</h1>
        @livewire("change-property")
    </div>

</div>
@endsection