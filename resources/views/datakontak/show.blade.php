@extends('datakontak.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Daftar Kontak</h2>
    <div class="card-body">
    
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('datakontak.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong> <br/>
                    {{ $kontak->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nomor Telepon:</strong> <br/>
                    {{ $kontak->phone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Email:</strong> <br/> 
                    {{ $kontak->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Asal Kota:</strong> <br/> 
                    {{ $kontak->city }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Instansi:</strong> <br/>
                    {{ $kontak->work_info }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Details:</strong> <br/>
                    {{ $kontak->detail }}
                </div>
            </div>
        </div>
  
    </div>
</div>
@endsection
