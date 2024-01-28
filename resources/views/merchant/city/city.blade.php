@extends('merchant.layout.index')
@section('title', 'City')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Data City</p>
                            <a href="{{ route('city.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th width="5%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10"
                                            style="text-align: center;">#</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                            Name</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10"
                                            style="text-align: center;">longitude</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10"
                                            style="text-align: center;">latitude</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10"
                                            style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($city as $data)
                                        <tr>
                                            <td align="center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->longitude }}</td>
                                            <td>{{ $data->latitude }}</td>
                                            <td align="center">
                                                <a href="{{ route('city.edit', $data->id) }}"
                                                    class="btn btn-link text-primary text-gradient px-1 mb-0"><i
                                                        class="fas fa-pencil-alt text-dark me-2"></i></a>
                                                <a href="{{ route('city.destroy', $data->id) }}"
                                                    onclick="event.preventDefault(); confirm('Apa ingin menghapus data ini?') ? document.getElementById('delete-form-{{ $data->id }}').submit() : false;"
                                                    class="btn btn-link text-danger text-gradient px-1 mb-0"><i
                                                        class="far fa-trash-alt text-dark me-2"></i></a>
                                                <form id="delete-form-{{ $data->id }}"
                                                    action="{{ route('city.destroy', $data->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
