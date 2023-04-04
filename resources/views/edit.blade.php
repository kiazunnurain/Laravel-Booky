@extends('layouts.app')
@section('main')
<h1 class="text-center p-1" style="margin-top: 200px; font-family: @font-face;"> Edit Data Buku</h1>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Book's Title</label>
                                <input type="text" name="books" class="form-control shadow-sm @error('books') is-invalid @enderror" value="{{ $data->books }}">
                                @error('books')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Author</label>
                                <input type="text" name="author" class="form-control shadow-sm @error('author') is-invalid @enderror" value="{{ $data->author }}">
                                @error('author')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Insert Cover Book</label>
                                <input type="file" name="images" class="form-control shadow-sm @error('images') is-invalid @enderror" id="image" value="{{ $data->images }}">
                                @error('images')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                                <img src="{{asset('coverbook/'.$data->images) }}" alt="" style="width: 80px;">
                     
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Insert Document</label>
                                <input type="file" name="dokumen" class="form-control shadow-sm" value="{{ $data->dokumen }}">
                                <img src="{{asset('dokumen/'.$data->dokumen) }}" alt="" style="width: 80px;">
                     
                            </div>
                            <button type="submit" class="btn btn-primary shadow-sm">Update</button>
                            <a href="/databuku" class="btn btn-danger shadow-sm">Back</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
