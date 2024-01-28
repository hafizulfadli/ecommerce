@extends('merchant.layout.index')
@section('title', 'city ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit city</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('city.update', $city->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $city->name }}" name="name" type="input" placeholder="name">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Longitude</label>
                                        <input class="form-control @error('longitude') is-invalid @enderror"
                                            value="{{ $city->longitude }}" name="longitude" type="input"
                                            placeholder="longitude">
                                        <div class="invalid-feedback">
                                            @error('longitude')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Latitude</label>
                                        <input class="form-control @error('latitude') is-invalid @enderror"
                                            value="{{ $city->latitude }}" name="latitude" type="input"
                                            placeholder="latitude">
                                        <div class="invalid-feedback">
                                            @error('latitude')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a href="/city" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
