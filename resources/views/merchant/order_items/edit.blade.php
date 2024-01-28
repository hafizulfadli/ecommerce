@extends('merchant.layout.index')
@section('title', 'order items ')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit order items</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('order_items.update', $order_items->order_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label "> date</label>
                                        <input class="form-control @error('date') is-invalid @enderror"
                                            value="{{ $order_items->date }}" name="date" type="input"
                                            placeholder="date">
                                        <div class="invalid-feedback">
                                            @error('date')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label "> quantity</label>
                                        <input class="form-control @error('quantity') is-invalid @enderror"
                                            value="{{ $order_items->quantity }}" name="quantity" type="input"
                                            placeholder="quantity">
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
                                            id="merchant_id">
                                            @foreach ($product as $data)
                                                <option value="{{ $data->product_id }}"
                                                    {{ $data->product_id == $order_items->product_id ? 'selected' : '' }}>
                                                    {{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label ">User</label>
                                        <select class="form-select" aria-label="Default select example" name="user_id"
                                            id="merchant_id">
                                            @foreach ($user as $data)
                                                <option value="{{ $data->user_id }}"
                                                    {{ $data->user_id == $order_items->user_id ? 'selected' : '' }}>
                                                    {{ $data->full_name }}</option>
                                            @endforeach
                                        </select>
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
