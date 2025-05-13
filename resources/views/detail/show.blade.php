@extends('layouts.app')

@section('content')
        <section class="py-5">
            <form action="{{ route('berita.store') }}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('/images/berita/' . $berita->cover) }}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">{{$berita->judul}}</h1>
                        <div class="fs-5 mb-2">
                            <span class="text">{{$berita->isi}}</span><br>
                            <span class="text">{{$berita->penulis}}</span>
                            <span class="text">{{$berita->tanggal_terbit}}</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem  modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">            
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button"><a href="{{ route('index') }}"> Back</a>
                                <i class="bi-cart-fill me-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
@endsection
