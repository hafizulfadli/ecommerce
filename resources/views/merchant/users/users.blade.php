@extends('merchant.layout.index')
@section('title', 'Users')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Data Users</p>
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th width="5%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">#</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10">
                                            Date of Birth</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Full Name</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Address</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Phone</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Email</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Active</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $data)
                                        <tr>
                                            <td align="center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->date_of_birth }}</td>
                                            <td>{{ $data->full_name }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                @if ($data->active == 0)
                                                    nonactive
                                                @elseif($data->active == 1)
                                                    active
                                                @endif
                                            </td>

                                            <td align="center">
                                                <a href="{{ route('users.edit', $data->user_id) }}"
                                                    class="btn btn-link text-primary text-gradient px-1 mb-0"><i
                                                        class="fas fa-pencil-alt text-dark me-2"></i></a>
                                                <a href="{{ route('users.destroy', $data->user_id) }}"
                                                    onclick="event.preventDefault(); confirm('Apa ingin menghapus data ini?') ? document.getElementById('delete-form-{{ $data->user_id }}').submit() : false;"
                                                    class="btn btn-link text-danger text-gradient px-1 mb-0"><i
                                                        class="far fa-trash-alt text-dark me-2"></i></a>
                                                <form id="delete-form-{{ $data->user_id }}"
                                                    action="{{ route('users.destroy', $data->user_id) }}" method="POST"
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
