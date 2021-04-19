@extends('layout.masyarakat')

@section('nav')

    <li class="nav-item">
        <a class="nav-link" href="{{ route('masyarakat.home') }}">Beranda</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pengajuan_surat') }}">Pengajuan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengaduan_layanan') }}">Pengaduan</a>
    </li>

@endsection

@section('content')

    <section class="card-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <h5 class="card-header">Formulir Pengajuan Surat</h5>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('pengajuanproses') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" class="form-control" id="created_by" name="created_by"
                                            value=" {{ Session::get('id') }}">

                                        <div class="form-group">
                                            <label for="jenis_surat">Silahkan Pilih Surat</label>
                                            <select class="form-control" name="jenis_surat" id="jenis_surat" required>
                                                <option disabled selected value>- Pilih jenis Surat -</option>
                                                <option value="surat_keterangan">Surat Keterangan</option>
                                                <option value="surat_keterangan_domisili">Surat Keterangan Domisili</option>
                                                <option value="surat_keterangan_usaha">Surat keterangan usaha</option>
                                                <option value="surat_keterangan_berkelakuan_baik">surat keterangan
                                                    berkelakuan baik</option>
                                                <option value="surat_pengantar_skck">Surat Pengantar SKCK</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kebutuhan">Kebutuhan</label>
                                            <textarea class="form-control" id="kebutuhan" name="kebutuhan" rows="3" value="{{ old('kebutuhan') }}"
                                                required></textarea>
                                        </div>
                                        @php
                                            $jumlah = 0;
                                        @endphp
                                        @foreach ($data as $item)
                                            @if ($item->user_id == Session::get('id'))
                                                @php
                                                    $jumlah++;
                                                @endphp
                                            @endif
                                        @endforeach

                                        @if (count($data) == 0 || $jumlah == 0)
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">File KTP (format pdf) - ukuran maks. 2
                                                    MB</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('ktp') is-invalid @enderror" id="customFile" name="ktp"
                                                        required>
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">File KK (format pdf) - ukuran maks. 2
                                                    MB</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input  @error('kk') is-invalid @enderror" id="customFile" name="kk"
                                                        required>
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Foto 3x4 (format pdf) - ukuran maks. 2
                                                    MB</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input  @error('foto3x4') is-invalid @enderror" id="customFile"
                                                        name="foto3x4" required>
                                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                                </div>
                                            </div>
                                        @endif
                                            @if ($errors->any())
                                            @foreach ($errors->all() as $error)   @endforeach
                                              
                                              
                                                <div class="alert alert-danger">{{ "Mohon periksa ekstensi dan ukuran file" }}</div>
                                               
                                          
                                            @endif  
                                      

                                        <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-core btn-block">Buat Pengajuan
                                                    Surat</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <h5 class="card-header">Daftar Pengajuan Surat</h5>
                                <div class="card-body">
                                    @php
                                        $jumlahpengajuan = 0;
                                    @endphp
                                    @foreach ($data as $item)
                                        @if ($item->user->username == Session::get('username'))
                                            @php
                                                $jumlahpengajuan++;
                                            @endphp
                                            <div class="row mb-4">
                                                <div class="col-6">
                                                    <a href="#" class="card-link text-style text-dark">
                                                        {{ $item->created_date->format('d/m/Y') }}
                                                        <br>
                                                        <small class="text-muted">{{ $item->jenis_surat }}</small>
                                                    </a>
                                                </div>
                                                @foreach ($item->transworkflow as $data2)
                                                @endforeach
                                                <div class="col-6 text-right">
                                                    <a href="#" class="card-link text-style text-dark">
                                                        {{ $data2->wf_reference->status }}
                                                        <br>
                                                        @if ($data2->wf_reference->status == 'Success')
                                                            <a href={{ route('getsuratmasyarakat', $item->id) }}><span
                                                                    class="badge badge-info">Download Surat</span></a>
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>



                                        @endif
                                    @endforeach
                                    @if ($jumlahpengajuan == 0)
                                        <p> Belum ada data pengajuan
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <h5 class="card-header">Track Record Pengajuan Surat</h5>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Silahkan pilih surat </label>
                                            <select class="form-control" id="jenissurat" name="jenissurat">
                                                <option>- Pilih data surat -</option>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($data as $item => $value)
                                                    @if ($value->user->username == Session::get('username'))
                                                        <option value="{{ $value->id }}">[{{ $no++ }}] -
                                                            {{ $value->jenis_surat }}</option>
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </form>
                                    <div id="tracing">



                                    </div>

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
        $('#jenissurat').change(function() {
            var surat = $(this).val();
            if (surat) {
                $.ajax({
                    type: "get",
                    url: '/masyarakat/tracing/' + surat + '/pengajuan-surat',


                    success: function(data) {

                        if (data) {

                            $.each(data, function(key, value) {
                                var itemJson = $.parseJSON(value['0'].history)
                                var i;
                                var bodydata = '';
                                for (i = 0; i < itemJson.length; i++) {
                                    bodydata += " <div class='row w-100' >"
                                    bodydata +=
                                        " <div class='col-auto text-center flex-column  d-sm-flex '>";
                                    bodydata += "            <div class='row h-50'>";
                                    bodydata +=
                                        "                <div class='col border-right'>&nbsp;</div>";
                                    bodydata +=
                                        "                        <div class='col'>&nbsp;</div>";
                                    bodydata += "                </div>";
                                    bodydata += "               <h5 class='m-1'>";
                                    bodydata +=
                                        "                   <span class='badge badge-pill bg-dark border'>&nbsp;</span>";
                                    bodydata += "               </h5>";
                                    bodydata += "               <div class='row h-50'>";
                                    bodydata +=
                                        "                    <div class='col border-right'>&nbsp;</div>";
                                    bodydata +=
                                        "                    <div class='col'>&nbsp;</div>";
                                    bodydata += "               </div>";
                                    bodydata += "            </div>";
                                    bodydata += " <div class='col py-2'>";
                                    bodydata += "       <div class='card  w-70'>";
                                    bodydata += "           <div class='card-body' >";
                                    bodydata +=
                                        "                  <h6 class='card-title text-muted' id='tracing_waktu'>" +
                                        itemJson[i] + " </h6>";
                                    bodydata +=
                                        "                  <p class='card-text' id='tracing_jenis'>" +
                                        itemJson[(i + 1)] + "</p>";
                                    bodydata += "           </div>";
                                    bodydata += "       </div>";
                                    bodydata += " </div>";
                                    bodydata += " </div>";


                                    i++;
                                }

                                $("#tracing").empty()
                                $("#tracing").html(bodydata);
                            });
                        }


                    }

                });
            }
        });

    </script>

@endsection
