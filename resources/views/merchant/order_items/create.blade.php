@extends('merchant.layout.index')
@section('title', 'order items ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah order items</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('order_items.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">date</label>
                                        <input class="form-control @error('date') is-invalid @enderror" name="date"
                                            type="date" placeholder="date">
                                        <div class="invalid-feedback">
                                            @error('date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Quantity</label>
                                        <input class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                            type="number" placeholder="quantity">
                                        <div class="invalid-feedback">
                                            @error('quantity')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">Product</label>
                                        <select class="form-select" aria-label="Default select example" name="product_id"
                                            id="product_id">
                                            @foreach ($product as $data)
                                                <option value="{{ $data->product_id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('product_id')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label ">User</label>
                                            <select class="form-select" aria-label="Default select example" name="user_id"
                                                id="product_id">
                                                @foreach ($user as $data)
                                                    <option value="{{ $data->user_id }}">{{ $data->full_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('user_id')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/order_items" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
