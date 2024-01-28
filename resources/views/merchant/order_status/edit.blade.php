@extends('merchant.layout.index')
@section('title', 'Products ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Products</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $products->product_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label "> Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $products->name }}" name="name" type="input" placeholder="name">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Merchant Name</label>
                                        <select class="form-select" aria-label="Default select example" name="merchant_id"
                                            id="merchant_id">
                                            @foreach ($merchant as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ $data->id == $products->merchant_id ? 'selected' : '' }}>
                                                    {{ $data->merchant_name }}</option>
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
                                            <label for="example-text-input" class="form-control-label ">Price</label>
                                            <input class="form-control @error('price') is-invalid @enderror"
                                                value="{{ $products->price }}" name="price" type="input"
                                                placeholder="price">
                                            <div class="invalid-feedback">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/products" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
