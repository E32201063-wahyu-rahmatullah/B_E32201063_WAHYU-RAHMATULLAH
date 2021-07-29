@extends('Frontend/layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Peminjaman </h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard')}}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Peminjaman </li>
                    <li><i class="fa fa-filer-o"></i>Peminjaman</li>
                </ol>
            </div>
        </div>
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                    {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Peminjaman
                    </header>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>There were some problems with you input.<br><br>
                    <ul>
                        @foreach ($erros->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" id="peminjaman_form" method="POST"
                        action="{{ isset($peminjaman) ? route('peminjaman.update',$peminjaman->id) : route('peminjaman.store') }}">
                        {!! csrf_field() !!}
                        {!! isset($peminjaman) ? method_field('PUT') : '' !!}
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Nama<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="Nama" name="Nama" minlength="5" type="text" value="{{ isset($peminjaman) ? $peminjaman->Nama : ''}}"  
                                    required />
                            </div>
                        </div>

                         <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Judul Buku<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="Judul_Buku" name="Judul_Buku" minlength="5" type="text" value="{{isset($peminjaman) ? $peminjaman->Judul_Buku : ''}}"  
                                    required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">Prodi<span
                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="Prodi" id="Prodi"  required>
                                            <option></option>
                                            <option value="1"{{ (isset($peminjaman) && $peminjaman->Prodi == 1) ? 'selected' : ''}}>TKK</option>
                                            <option value="2"{{ (isset($peminjaman) && $peminjaman->Prodi == 2) ? 'selected' : ''}}>MIF</option>
                                            <option value="3"{{ (isset($peminjaman) && $peminjaman->Prodi == 3) ? 'selected' : ''}}>TIF</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                            <label for="cemail" class="control-label col-lg-2">Golongan<span
                                class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="Golongan" id="Golongan"  required>
                                            <option></option>
                                            <option value="1"{{ (isset($peminjaman) && $peminjaman->Golongan == 1) ? 'selected' : ''}}>A</option>
                                            <option value="2"{{ (isset($peminjaman) && $peminjaman->Golongan == 2) ? 'selected' : ''}}>B</option>
                                            <option value="3"{{ (isset($peminjaman) && $peminjaman->Golongan == 3) ? 'selected' : ''}}>C</option>
                                            <option value="4"{{ (isset($peminjaman) && $peminjaman->Golongan == 4) ? 'selected' : ''}}>D</option>
                                            <option value="5"{{ (isset($peminjaman) && $peminjaman->Golongan == 5) ? 'selected' : ''}}>E</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Tanggal Peminjaman<span
                                        class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input id="Tanggal_Peminjaman" type="text" name="Tanggal_Peminjaman" class="form-control" value="{{ isset($peminjaman) ? $peminjaman->Tanggal_Peminjaman : '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="curl" class="control-label col-lg-2">Tanggal Pengembalian<span
                                            class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input id="Tanggal_Pengembalian" type="text" name="Tanggal_Pengembalian" class="form-control" value="{{ isset($peminjaman) ? $peminjaman->Tanggal_Pengembalian : '' }}"  required>
                                    </div>
                                </div>

                            <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Denda<span
                                class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="Denda" name="Denda" minlength="1" type="text"  value="{{ isset($peminjaman) ? $peminjaman->Denda : '' }}" 
                                    required />
                            </div>
                        </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{route('peminjaman.index')}}"><button class="btn btn-default" type="button">Cencel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</section>
@endsection
@push('content-css')
    <link href="{{ asset('frontend/css/bootstrap-datepicker.css') }} " rel="stylesheet" />
@endpush
@push('content-js')
<script src="{{ asset('frontend/js/bootstrap-datepicker.js') }} "></script>
<script type="text/javascript">
    $('#Tanggal_Peminjaman').datepicker({
        format: "mm-yyyy",
        viewMode: "months",
        minViewMode: "months"
    });
    $('#Tanggal_Pengembalian').datepicker({
        format: "mm-yyyy",
        viewMode: "months",
        minViewMode: "months"
    });
</script>
@endpush