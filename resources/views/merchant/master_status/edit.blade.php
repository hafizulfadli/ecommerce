@extends('merchant.layout.index')
@section('title', 'Master Status ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Master Status</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('master_status.update', $master_status->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $master_status->name }}" name="name" type="input"
                                            placeholder="name">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Description</label>
                                        <textarea id="" class="form-control  @error('description') is-invalid @enderror" name="description"
                                            id="" cols="30" rows="5" placeholder="description Kerjasama">{{ $master_status->description }}</textarea>
                                        <div class="invalid-feedback">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/master_status" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
