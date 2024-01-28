@extends('merchant.layout.index')
@section('title', 'Users ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Users</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Date Of Birth</label>
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                            name="date_of_birth" type="date" placeholder="date_of_birth">
                                        <div class="invalid-feedback">
                                            @error('date_of_birth')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">
                                            Full Name
                                        </label>
                                        <input class="form-control @error('full_name') is-invalid @enderror"
                                            full_name="full_name" type="input" name="full_name" placeholder="full_name">
                                        <div class="invalid-feedback">
                                            @error('full_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Address</label>
                                        <input class="form-control @error('address') is-invalid @enderror" type="input"
                                            name="address" placeholder="address">
                                        <div class="invalid-feedback">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" type="input"
                                            name="phone" placeholder="phone">
                                        <div class="invalid-feedback">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="input"
                                            name="email" placeholder="email">
                                        <div class="invalid-feedback">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Active</label>
                                        <select name="active" class="form-control" id="">
                                            <option value="0">nonactive</option>
                                            <option value="1">active</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/users" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
