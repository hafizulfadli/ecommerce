@extends('merchant.layout.index')
@section('title', 'Laporan Sales')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Data Laporan Sales</p>
                            <a href="{{ route('laporanex1') }}" target="_blank" class="btn btn-primary btn-sm ms-auto">Export
                                Excel</a>
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
                                            Month</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">City</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Product</th>
                                        <th width="25%"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder opausers-10"
                                            style="text-align: center;">Sales Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $monthNames = [
                                            1 => 'January',
                                            2 => 'February',
                                            3 => 'March',
                                            4 => 'April',
                                            5 => 'May',
                                            6 => 'June',
                                            7 => 'July',
                                            8 => 'August',
                                            9 => 'September',
                                            10 => 'October',
                                            11 => 'November',
                                            12 => 'December',
                                        ];
                                    @endphp
                                    @foreach ($laporan1 as $data)
                                        <tr>
                                            <td align="center">{{ $loop->iteration }}</td>
                                            <td>{{ $monthNames[$data->Bulan] }}</td>
                                            <td>{{ $data->Kota }}</td>
                                            <td>{{ $data->Product }}</td>
                                            <td>{{ $data->Total_Penjualan }}</td>
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
