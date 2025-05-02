@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('PENDAFTARAN pengguna SMK ASSALAAM') }}</div>
                <form action="{{ route('penerbit.update', $penerbit->id) }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                <table class="table">
                   <tr>
                        <td>penerbit</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="nama_penerbit" value="{{ $penerbit->nama_penerbit}}"></td>
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
