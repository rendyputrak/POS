@extends('layouts.template') 
 
@section('content') 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
        <h3 class="card-title">{{ $page->title }}</h3> 
        <div class="card-tools"></div> 
      </div> 
      <div class="card-body"> 
        @empty($penjualan) 
            <div class="alert alert-danger alert-dismissible"> 
                <h5><i class="icon fas fa-ban"></i> Kesalahan! Data yang Anda cari tidak ditemukan. </h5>
            </div> 
        @else 
            <table class="table table-bordered table-striped table-hover tablesm"> 
                <tr> 
                    <th>ID Penjualan</th> 
                    <td>{{ $penjualan->penjualan_id }}</td> 
                </tr> 
                <tr> 
                    <th>ID User</th> 
                    <td>{{ $penjualan->user_id }}</td> 
                </tr> 
                <tr> 
                    <th>Pembeli</th> 
                    <td>{{ $penjualan->pembeli }}</td> 
                </tr> 
                <tr> 
                    <th>Kode Penjualan</th> 
                    <td>{{ $penjualan->penjualan_kode }}</td> 
                </tr> 
                <tr> 
                    <th>Tanggal penjualan</th> 
                    <td>{{ $penjualan->penjualan_tanggal }}</td> 
                </tr> 
            </table> 
        @endempty 
        <a href="{{ url('penjualan') }}" class="btn btn-sm btn-default mt-2">Kembali</a> 
    </div> 
  </div> 
@endsection 

@push('css') 
@endpush 
 
@push('js') 
@endpush
