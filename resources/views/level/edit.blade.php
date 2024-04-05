@extends('layouts.template')

{{-- Customize layout sections --}}

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Edit')

{{-- Content body: main page content --}}

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Edit level</h3>
            </div>

            <form method="post" action="{{ url('/level/'.$lvl->level_id) }}">
                {{ csrf_field() }}
                {!! method_field('PUT') !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="level_kode">Kode Level</label>
                        <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ old('level_kode', $lvl->level_kode) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="level_nama">Nama Level</label>
                        <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ old('level_nama', $lvl->level_nama) }}" required>
                    </div>
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection