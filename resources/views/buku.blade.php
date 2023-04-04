@extends('layouts.app')
@section('main')
<div>
    <div class="container">
        <h1 class="text-center p-1" style="margin-top: 200px; font-family: @font-face;">Tambah data buku</h1>
        <div class="row">
            <div class="card shadow mb-5">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <a href="/create" class="btn btn-success shadow-sm mt-mb-3">Add Data +</a>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3 shadow-sm" role="alert">
                                    {{ $message}}
                                </div>
                                @endif
                                <th scope="col">No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Image</th>
                                <th scope="col">PDF</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no= 1;
                            @endphp
                            @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->books }}</td>
                                <td>{{ $row->author }}</td>
                                <td>
                                    <img src="{{asset('coverbook/'.$row->images) }}" class="img-fluid" alt=""
                                        style="width: 80px;">
                                </td>
                                <td>
                                    <a href="{{url('/download', $row->file)}}"><button class="btn btn-success" type="button"> Download</button></a>
                                </td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="/viewdata/{{ $row->id }}" class="btn btn-warning m-1">Edit</button>
                                        <a href="/delete/{{ $row->id }}" class="btn btn-danger m-1">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $data->links() }}
                        <a href="/adminpage" class="btn btn-danger me-auto">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection