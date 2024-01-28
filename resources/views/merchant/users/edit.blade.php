@extends('merchant.layout.index')
@section('title', 'Users ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Users</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $users->user_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Date Of Birth</label>
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                            value="{{ $users->date_of_birth }}" name="date_of_birth" type="input"
                                            placeholder="date_of_birth">
                                        <div class="invalid-feedback">
                                            @error('date_of_birth')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Full Name</label>
                                        <input class="form-control @error('full_name') is-invalid @enderror"
                                            value="{{ $users->full_name }}" name="full_name" type="input"
                                            placeholder="full_name">
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
                                        <input class="form-control @error('address') is-invalid @enderror"
                                            value="{{ $users->address }}" name="address" type="input"
                                            placeholder="address">
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
                                        <input class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ $users->phone }}" name="phone" type="input" placeholder="phone">
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
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            value="{{ $users->email }}" name="email" type="input" placeholder="email">
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
                                            @error('active')
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
