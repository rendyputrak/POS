@extends('layouts.template')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
            </div>

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('kategori') }}">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori_kode">Kode Kategori</label>

                        {{-- <input id="kodeKategori" type="text" name="kodeKategori"
                        class="@error('kodeKategori') is-invalid @enderror">

                        @error('kodeKategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}

                        <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" placeholder="Contoh=A,B,C,D">
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" placeholder="Contoh=Elektronik dan Gadget">
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection