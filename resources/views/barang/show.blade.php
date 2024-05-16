@extends('layouts.template') 
 
@section('content') 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
        <h3 class="card-title">{{ $page->title }}</h3> 
        <div class="card-tools"></div> 
      </div> 
      <div class="card-body"> 
        @empty($barang) 
            <div class="alert alert-danger alert-dismissible"> 
                <h5><i class="icon fas fa-ban"></i> Kesalahan! Data yang Anda cari tidak ditemukan. </h5>
            </div> 
        @else 
            <table class="table table-bordered table-striped table-hover tablesm"> 
                <tr> 
                    <th>ID Barang</th> 
                    <td>{{ $barang->barang_id }}</td> 
                </tr> 
                <tr> 
                    <th>ID Kategori</th> 
                    <td>{{ $barang->kategori_id . " (" .($barang->kategori->kategori_nama).")" }}</td> 
                </tr> 
                <tr> 
                    <th>Nama Barang</th> 
                    <td>{{ $barang->barang_nama }}</td> 
                </tr> 
                <tr> 
                    <th>Harga Beli</th> 
                    <td>{{ $barang->harga_beli }}</td> 
                </tr> 
                <tr> 
                    <th>Harga Jual</th> 
                    <td>{{ $barang->harga_jual }}</td> 
                </tr> 
                <tr> 
                    <th>Gambar Barang</th> 
                    <td>{{ $barang->image }}</td> 
                </tr> 
            </table> 
        @endempty 
        <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt-2">Kembali</a> 
    </div> 
  </div> 
@endsection 

@push('css') 
@endpush 
 
@push('js') 
@endpush
