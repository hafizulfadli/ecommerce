@extends('merchant.layout.index')
@section('title', 'Merchant ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Merchant</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('merchant.update', $merchant->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Merchant Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $merchant->merchant_name }}" name="merchant_name" type="input"
                                            placeholder="merchant_name">
                                        <div class="invalid-feedback">
                                            @error('name')
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
                                                <option value="{{ $data->id }}"
                                                    {{ $data->id == $merchant->city_id ? 'selected' : '' }}>
                                                    {{ $data->name }}</option>
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
                                            <label for="example-text-input" class="form-control-label ">Address</label>
                                            <input class="form-control @error('address') is-invalid @enderror"
                                                value="{{ $merchant->address }}" name="address" type="input"
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
                                                value="{{ $merchant->phone }}" name="phone" type="input"
                                                placeholder="phone">
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
                                                value="{{ $merchant->expired_date }}" name="expired_date" type="input"
                                                placeholder="expired_date">
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
