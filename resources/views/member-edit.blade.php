@extends('layouts.master')
@section('link')
<li class="menu-header">Member</li>
<li ><a class="nav-link" href="{{route ('dashboard')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class="menu-header">Content</li>
@if (auth()->user()->role=="admin") 
<li class="active"><a class="nav-link" href="{{route ('tampil-outlet')}}"><i class="fas fa-home"></i> <span>Outlet</span></a></li>
<li ><a class="nav-link" href="{{route ('tampil-paket')}}"><i class="fas fa-box"></i> <span>Paket Laundry</span></a></li>
@endif
<li ><a class="nav-link" href="{{route ('tampil-member')}}"><i class="fas fa-user"></i> <span>Member</span></a></li>
<li ><a class="nav-link" href="{{route ('tampil-transaksi')}}"><i class="fas fa-file-invoice-dollar"></i> <span>Transaksi</span></a></li>
@if (auth()->user()->role=="admin") 
<li ><a class="nav-link" href="{{route ('tampil-user')}}"><i class="fas fa-user-tie"></i> <span>Data Pengurus</span></a></li>
@endif
@stop
@section('content')
<div class="container-fluid py-4">
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <h4>Edit Data Member</h4>
                        </div>
                        <form action="{{route ('update-member',$member->id)}}" method="POST">
                          @csrf
                          @method('put')
                        <div class="card-body">
                          
                          <div class="form-group">
                            <label>Nama Member :</label>
                            <input type="text" name="nama_member" 

                            @if (old('nama_member'))
                            value="{{old('nama_member')}}" 
                            @else
                            value="{{$member->nama_member}}" 
                            @endif
                            class="form-control">

                            <label 
                            @error('nama_member') 
                            class="text-danger"
                            @enderror>
                            @error('nama_member')
                            {{$message}}
                            @enderror
                          </label>
                          </div>
                          
                          <div class="form-group">
                            <label>Alamat Member :</label>
                            <input type="text" name="alamat" 
                            @if (old('alamat'))
                            value="{{old('alamat')}}" 
                            @else
                            value="{{$member->alamat}}" 
                            @endif
                            class="form-control">
                            
                            <label 
                            @error('alamat') 
                            class="text-danger"
                            @enderror>
                            @error('alamat')
                            {{$message}}
                            @enderror
                          </label>
                          </div>

                          <div class="form-group">
                            <label>Jenis Kelamin :</label>
                            <br>
                            <select class="form-control col-md-2" name="jenis_kelamin">
                            <option value="L" {{ old('jenis_kelamin', $member->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $member->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                          </select>
                          
                            <label 
                            @error('jenis_kelamin') 
                            class="text-danger"
                            @enderror>
                            @error('jenis_kelamin')
                            {{$message}}
                            @enderror
                          </label>
                          </div>

                          <div class="form-group">
                            <label>Nomor Telpon :</label>
                            <input type="number" name="telp" 
                            @if (old('telp'))
                            value="{{old('telp')}}" 
                            @else
                            value="{{$member->telp}}" 
                            @endif
                            class="form-control">

                            <label 
                            @error('telp') 
                            class="text-danger"
                            @enderror>
                            @error('telp')
                            {{$message}}
                            @enderror
                          </label>
                          </div>
                          
                          <button class="btn btn-primary" type="submit">Simpan</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                        
                        </form>
                  </div>
            </div>
         </div>

    </div>
@stop



@push('scripts')

@endpush