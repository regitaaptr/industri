@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('PENDAFTARAN kategori ') }}</div>
                <form action="{{ route('kategori.store') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">

                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                <table class="table " width="100%">
                   <tr>
                        <td>kategori</td>
                        <td>: </td>
                        <td><input type="text" class="form-control  mb-2" name="nama_kategori"></td>
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
