@extends('layouts.template')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

{{-- Content body: main page content --}}

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ubah Kategori</h3>
            </div>

            <form method="post" action="{{ url('/kategori/'.$kategori->kategori_id) }}">
                {{ csrf_field() }}
                {!! method_field('PUT') !!}
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Kode Kategori</label>
                            <div class="col-11">
                                <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
                            @error('kategori_kode')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama Kategori</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
                            @error('kategori_nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection