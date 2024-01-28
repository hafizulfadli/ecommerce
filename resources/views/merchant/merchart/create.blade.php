@extends('merchant.layout.index')
@section('title', 'Merchant ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Merchant</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('merchant.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Merchant Name</label>
                                        <input class="form-control @error('merchant_name') is-invalid @enderror"
                                            name="merchant_name" type="input" placeholder="merchant_name">
                                        <div class="invalid-feedback">
                                            @error('merchant_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">City</label>
                                        <select class="form-select" aria-label="Default select example" name="city_id"
                                            id="city_id">
                                            @foreach ($city as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('title')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label ">
                                                Address
                                            </label>
                                            <input class="form-control @error('address') is-invalid @enderror"
                                                address="address" type="input" name="address" placeholder="address">
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
                                            <label for="example-text-input" class="form-control-label ">Expired Date</label>
                                            <input class="form-control @error('expired_date') is-invalid @enderror"
                                                type="date" name="expired_date" placeholder="expired_date">
                                            <div class="invalid-feedback">
                                                @error('expired_date')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/merchant" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
