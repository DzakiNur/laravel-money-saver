<!DOCTYPE html>
@extends('layouts.main')
@section('tittle')
    Edit Money Saver
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session ('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container">
                <main class="form-register input">
                    <div class="card shadow p-5 bg-secondary bg-opacity-25">
                    <form action="{{ route('updateMoney', $data->id) }}" method="post">
                    @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Edit Money Safe</h1>
                        @error ('nis')
                            <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                            </div>
                        @enderror
                        <div class="form-floating">
                            <input type="text" class="form-control mt-2" id="nama" placeholder="Masukkan Nama..." name="nama" value="{{$data->nama}}">
                            <label for="nama">Nama Lengkap</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="nis" class="form-control mt-2" id="nis" placeholder="Masukkan Nis..." value="{{$data->nis}}">
                            <label for="nis">NIS</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="rayon" value="{{$data->rayon}}" >
                                @for($i=1 ; $i<=5 ; $i++)
                                <option>Ciawi {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=3 ; $i++)
                                <option>Cibedug {{$i}}</option>
                                @endfor

                                @for($i=1 ; $i<=6 ; $i++)
                                <option>Cisarua {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=7 ; $i++)
                                <option>Cicurug {{$i}}</option>
                                @endfor
                    
                                @for($i=1 ; $i<=4 ; $i++)
                                <option>Tajur {{$i}}</option>
                                @endfor
                                
                                @for($i=1 ; $i<=4 ; $i++)
                                <option>Wikrama {{$i}}</option>
                                @endfor
                            </select>
                            <label for="floatingSelect">Rayon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="action" >
                                    <option selected>Select this action</option>
                                    <option value="add">Add your money</option>
                                    <option value="take">Take your money</option>
                            </select>
                            <label for="floatingSelect">Action</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" name="money" class="form-control mt-2" id="money" placeholder="Add Money" value="{{$data->money}}">
                            <label for="money">Money</label>
                        </div>
                        <div class="row justify-content-center">
                        <button class="w-50 btn btn-lg btn-secondary mt-4" type="submit">Confirm</button>
                        </div>
                    </form>
                </div>
                </main>
            </div>
        </div>
    </div>
    </div>

@endsection