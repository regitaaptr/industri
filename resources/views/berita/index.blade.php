@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ ('DATA PENDAFTARAN berita') }}
                </div>
                <div class="card-body">
                <a href="{{ route('berita.create') }}" class="btn btn-primary w-100">Add</a>  
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
                        <th scope="col">Judul</th>
                        <th scope="col">Cover</th>
                        <th scope="col">isi</th>
                        <th scope="col">Tanggal terbit</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach ($berita as $data)
                        <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->judul}}</td>
                        <td>
                            <img src="{{ asset('/images/berita/' . $data->cover) }}" width="100">
                        </td>
                        <td>{{ $data->isi}}</td>
                        <!-- <td>{{ $data->id_berita}}</td> -->
                        <td>{{ $data->penerbit->nama_penerbit}}</td>
                        <td>{{ $data->tanggal}}</td>
                        <td>
                            <a href="{{ route('berita.edit', $data->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('berita.show', $data->id) }}" class="btn btn-warning">Show</a>
                            
                            <form action="{{ route('berita.destroy', $data->id) }}" method="POST" style="display:inline;">
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