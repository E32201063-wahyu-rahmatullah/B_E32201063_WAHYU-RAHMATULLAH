@extends('Frontend/layouts.template')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Peminjaman</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Peminjaman</li>
                    <li><i class="fa fa-files-o"></i>Peminjaman</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Peminjaman
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <a href="{{ route('peminjaman.create') }}"><button class="btn btn-primary" type="button">
                                    <i class="fa fa-plus"> Tambah</i></button></a> 
                             <br><br>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_bag"></i> Nama</th>
                                    <th><i class="icon_bag"></i> Judul Buku</th>
                                    <th><i class="icon_document_alt"></i> Prodi</th>
                                    <th><i class="icon_document_alt"></i> Golongan</th>
                                    <th><i class="icon_calendar"></i> Tanggal Peminjaman</th>
                                    <th><i class="icon_calendar"></i> Tanggal Pengembalian</th>
                                    <th><i class="icon_bag"></i> Denda</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                @foreach ($peminjaman as $item)
                                <tr>
                                    <td>{{$item->Nama}}</td>
                                    <td>{{$item->Judul_Buku}}</td>
                                    <td>
                                        @if ($item->Prodi==1) 
                                            TKK
                                        @elseif($item->Prodi==2) 
                                            MIF
                                        @elseif ($item->Prodi==3)
                                            TIF        
                                    </td>
                                        @endif


                                    <td>
                                        @if ($item->Golongan==1) 
                                            A
                                        @elseif ($item->Golongan==2) 
                                            B
                                        @elseif ($item->Golongan==3)
                                            C 
                                        @elseif ($item->Golongan==4)
                                            D
                                        @elseif ($item->Golongan==5)
                                            E      
                                    </td>
                                        @endif

                                    <td>{{$item->Tanggal_Peminjaman}}</td>
                                    <td>{{$item->Tanggal_Pengembalian}}</td>
                                    <td>{{$item->Denda}}</td>
                                    <td>                    
                                        <div class="btn-group">
                                             <form action="{{ route('peminjaman.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('peminjaman.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin mengahapus data ini?')">
                                                <i class="fa fa-trash-o"></i></button>
                                            </form>       
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection