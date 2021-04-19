@extends('layout.verifikator')

@section('nav')

    <li class="nav-item">
        <a class="nav-link" href="{{ route('verifikator.home') }}">Beranda</a>
    </li>

@endsection

@section('content')

    <section class="card-feature">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-12">

                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="butuh-tab" data-toggle="tab" href="#butuh" role="tab"
                                aria-controls="butuh" aria-selected="true">Butuh divalidasi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="sudah-tab" data-toggle="tab" href="#sudah" role="tab"
                                aria-controls="sudah" aria-selected="false">Sudah divalidasi</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="butuh" role="tabpanel" aria-labelledby="butuh-tab">
                            <div class="card shadow-sm">
                                <h5 class="card-header">Daftar aduan</h5>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Judul Pengaduan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                    @foreach ($pengaduan as $data)

                                        <div class="modal fade" id="exampleModal-{{ $data->id_pengaduan }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Verifikasi
                                                            Pengaduan Layanan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row text-left">
                                                            <div class="col-md-12">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-header text-center">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <a class="btn btn-sm btn-danger"
                                                                                    href="{{ route('tolakpermintaan', $data->id_pengaduan) }}">Tolak
                                                                                    Permintaan</a>
                                                                                <a class="btn btn-sm btn-core"
                                                                                    href="{{ route('terimapermintaan', $data->id_pengaduan) }}">Terima
                                                                                    Permintaan</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body  table-responsive">
                                                                        <table class="table table-bordered"
                                                                            style="width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>NIK</td>
                                                                                    <td>{{ $data->user->nik->id_ktp }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Judul Pengaduan</td>
                                                                                    <td>{{ $data->judul_pengaduan }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Detail Kejadian</td>
                                                                                    <td>{{ $data->detail_pengaduan }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Tanggal Kejadian</td>
                                                                                    <td>{{ $data->created_date }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Lokasi Kejadian</td>
                                                                                    <td>{{ $data->lokasi_kejadian }}</td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sudah" role="tabpanel" aria-labelledby="sudah-tab">
                            <div class="card shadow-sm">
                                <h5 class="card-header">Daftar Aduan</h5>
                                <div class="card-body">
                                    <table class="table table-striped table-bordered data-table2" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Judul Pengaduan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    @foreach ($pengaduan2 as $data2)
                                        <div class="modal fade" id="Modal-{{ $data2->id_pengaduan }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail
                                                            Aduan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row text-left">
                                                            <div class="col-md-12">
                                                                <div class="card shadow-sm">

                                                                    <div class="card-body  table-responsive">
                                                                        <table class="table table-bordered"
                                                                            style="width:100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>NIK</td>
                                                                                    <td>{{ $data2->user->nik->id_ktp }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Judul Pengaduan</td>
                                                                                    <td>{{ $data2->judul_pengaduan }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Detail Kejadian</td>
                                                                                    <td>{{ $data2->detail_pengaduan }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Tanggal Kejadian</td>
                                                                                    <td>{{ $data2->created_date }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Lokasi Kejadian</td>
                                                                                    <td>{{ $data2->lokasi_kejadian }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Remark</td>
                                                                                    <td>{{ $data2->remark }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('daftar_pengaduan') }}",
                columns: [{
                        data: 'user.nik.id_ktp',
                        name: 'id_pengaduan'
                    },
                    {
                        data: 'judul_pengaduan',
                        name: 'judul_pengaduan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                columnDefs: [{
                    "targets": 2, // your case first column
                    "className": "text-center",

                }, ],
            });



        });

    </script>
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('daftar_pengaduan2') }}",
                columns: [{
                        data: 'user.nik.id_ktp',
                        name: 'id_pengaduan'
                    },
                    {
                        data: 'judul_pengaduan',
                        name: 'judul_pengaduan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                columnDefs: [{
                    "targets": 2, // your case first column
                    "className": "text-center",

                }, ],
            });



        });

    </script>
@endsection
