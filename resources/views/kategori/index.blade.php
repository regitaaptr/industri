@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ ('DATA PENDAFTARAN kategori') }}
                </div>
                <div class="card-body">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary w-100">Add</a>  
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close   "></button>
                        </div>
                    @endif
                   <table class="table">
                    <thead> 
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama kategori</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach ($kategori as $data)
                        <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->judul}}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('kategori.show', $data->id) }}" class="btn btn-warning">Show</a>
                            
                            <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                            </form>
                        </td>
                        @endforeach
                        </tr>           
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection