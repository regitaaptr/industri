@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('PENDAFTARAN PPDB SMK ASSALAAM') }}</div>
                <form action="{{ route('berita.store') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                <table class="table " width="100%">
                   <tr>
                        <td>Judul</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="judul"></td>
                    </tr>
                    <tr>
                        <td>isi</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="isi"></td>
                    </tr> 
                    <tr>
                        <td>Cover</td>
                        <td>: </td>
                        <td><input type="file" class="form-control  mb-2" name="cover"></td>
                    </tr> 
                    <tr>
                        <td>Tanggal terbit</td>
                        <td>: </td>
                        <td><input type="date" class="form-control  mb-2" name="tanggal_terbit"></td>
                    </tr>
                    <tr>
                        <td>ID kategori</td>
                        <td>: </td>
                        <td>
                             <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="id_kategori">
                                @foreach($kategori as $data)
                                <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr> 
                    <tr>
                        <td>ID penerbit</td>
                        <td>: </td>
                        <td>
                             <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="id_penerbit">
                                @foreach($penerbit as $data)
                                <option value="{{$data->id}}">{{$data->nama_penerbit}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr> 
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary float-end" name="save">Save</button></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
