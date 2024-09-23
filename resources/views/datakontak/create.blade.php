@extends('datakontak.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Tambahkan Kontak</h2>
    <div class="card-body">
    
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('datakontak.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    
        <form action="{{ route('datakontak.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Name">
                {{-- @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="mb-3">
                <label for="inputPhone" class="form-label"><strong>Phone:</strong></label>
                <input 
                    type="text" 
                    name="phone" 
                    class="form-control @error('phone') is-invalid @enderror" 
                    id="inputPhone" 
                    placeholder="Phone">
                {{-- @error('phone')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="mb-3">
                <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    id="inputEmail" 
                    placeholder="Email">
                {{-- @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="mb-3">
                <label for="inputCity" class="form-label"><strong>City:</strong></label>
                <input 
                    type="text" 
                    name="city" 
                    class="form-control @error('city') is-invalid @enderror" 
                    id="inputCity" 
                    placeholder="City">
                {{-- @error('city')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <div class="mb-3">
                <label for="inputWorkInfo" class="form-label"><strong>Work Info:</strong></label>
                <textarea 
                    class="form-control @error('work_info') is-invalid @enderror" 
                    style="height:150px" 
                    name="work_info" 
                    id="inputWorkInfo" 
                    placeholder="Work Info"></textarea>
                {{-- @error('work_info')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror --}}
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>
  
    </div>
</div>
@endsection
