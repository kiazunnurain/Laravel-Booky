@extends('layouts.app')
@section('main')

<h1 class="text-center p-1" style="margin-top: 200px; font-family: @font-face;"> Tambah Data Buku</h1>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Book's Title</label>
                                <input type="text" name="books" class="form-control shadow-sm @error('books') is-invalid @enderror" value="{{ old('books') }}">
                                @error('books')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control shadow-sm @error('author') is-invalid @enderror" value="{{ old('author') }}">
                                @error('author')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                   
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Insert Cover Book</label>
                                <img class="img-preview img-fluid">
                                <input type="file" name="images" onchange="readImages(event)" class="form-control shadow-sm @error('images') is-invalid @enderror" id="image" value="">
                                <img id='output' style="width: 100px;">

                                @error('images')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Insert Document</label>
                                
                                <input type="file" name="dokumen" class="form-control shadow-sm @error('dokumen') is-invalid @enderror" value="{{ old('dokumen') }}">

                                @error('dokumen')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary shadow-sm">Submit</button>
                            <a href="/databuku" class="btn btn-danger shadow-sm">Back</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
