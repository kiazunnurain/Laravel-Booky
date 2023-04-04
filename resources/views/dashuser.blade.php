@extends('layouts.app')
@section('main')
<header style="background: #DFD8CA;">

    <div class="img-fluid">
        <img src="" alt="">
    </div>

    <div class="container" style="margin-top: 200px;">
        <div class="col">
            <div class="row">
                @foreach ($data as $index => $row)
                @csrf
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body shadow rounded" style="background-color: #F7F1E4;">
                            <img src="{{asset('coverbook/'.$row->images) }}"
                                class="card-img-top rounded img-fluid mb-3 shadow" alt=""
                                style="width: 300px; height: 400px;">

                            <h5 class="card-title mb-2">{{ $row->books }}</h5>
                            <p class="card-text mb-2">by {{ $row->author }}</p>
                            {{-- <a href="{{URL::to('/')}}/file/{{asset('dokumen/'.$row->dokumen)}}" target="_blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Download</button>
                            </a> --}}
                            <a href="/download" class="btn" style="background-color: #DFD8CA;"><i class="fa fa-download"></i> Download</a>
                            {{-- <a class="download" href="">DOWNLOAD</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="/adminpage" style="margin-left: 206px; margin-bottom: 50px;" class="btn btn-danger">Back</a>

</header>

@endsection