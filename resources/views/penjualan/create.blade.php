@extends('layouts.template') 
 
@section('content') 
  <div class="card card-outline card-primary"> 
    <div class="card-header"> 
      <h3 class="card-title">{{ $page->title }}</h3> 
      <div class="card-tools"></div> 
    </div> 
    <div class="card-body"> 
      <form method="POST" action="{{ url('penjualan') }}" class="form-horizontal">         
        @csrf 
        <div class="form-group row"> 
          <label class="col-1 control-label col-form-label">ID User</label> 
          <div class="col-11"> 
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}" required> 
            @error('user_id') 
              <small class="form-text text-danger">{{ $message }}</small> 
            @enderror 
          </div> 
        </div> 
        <div class="form-group row"> 
          <label class="col-1 control-label col-form-label">Pembeli</label> 
          <div class="col-11"> 
            <input type="text" class="form-control" id="pembeli" name="pembeli" value="{{ old('pembeli') }}" required> 
            @error('pembeli') 
              <small class="form-text text-danger">{{ $message }}</small> 
            @enderror 
          </div> 
        </div>
        <div class="form-group row"> 
            <label class="col-1 control-label col-form-label">Kode Penjualan</label> 
            <div class="col-11"> 
              <input type="text" class="form-control" id="penjualan_kode" name="penjualan_kode" value="{{ old('penjualan_kode') }}" required> 
              @error('penjualan_kode') 
                <small class="form-text text-danger">{{ $message }}</small> 
              @enderror 
            </div> 
          </div> 
        <div class="form-group row"> 
          <label class="col-1 control-label col-form-label">Tanggal Penjualan</label> 
          <div class="col-2"> 
            <input type="date" class="form-control" id="penjualan_tanggal" name="penjualan_tanggal" value="{{ old('penjualan_tanggal') }}" required> 
            @error('penjualan_tanggal') 
              <small class="form-text text-danger">{{ $message }}</small> 
            @enderror 
            </div> 
        </div>
        {{-- <div class="form-group row">
            <h3>Tambahkan juga data dibawah ini!</h3>
        </div>
        <div class="card-body">
            <label class="col-1 control-label col-form-label">ID User</label> 
          <div class="col-11"> 
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}" required> 
            @error('user_id') 
              <small class="form-text text-danger">{{ $message }}</small> 
            @enderror 
          </div> 
        </div> --}}
        <div class="form-group row"> 
          <label class="col-1 control-label col-form-label"></label> 
          <div class="col-11"> 
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button> 
            <a class="btn btn-sm btn-default ml-1" href="{{ url('user') }}">Kembali</a> 
          </div> 
        </div> 
     </form> 
    </div> 
  </div> 
@endsection 
@push('css') 
@endpush 
@push('js') 
@endpush 
