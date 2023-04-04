@extends('layouts.app')
@section('main')
<section style="">
	<div class="container" style="margin-top: 200px;">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://i.pinimg.com/474x/ed/cb/dc/edcbdcc8b334052ad5204dd526a0f293.jpg" alt="Admin"
									class="rounded-circle p-1" style="background: #433b36;" width="110">
								<div class="mt-3">
									<h4>{{ Auth::user()->name}}</h4>
									<p class="text-secondary mb-1">{{ Auth::user()->username}}</p>
									<p class="text-muted font-size-sm">{{ Auth::user()->email}}</p>
									<a href="/my-profile"class="btn text-white" style="background-color: #433b36;">Back</a>
									<button class="btn" style="background-color: #DFD8CA; color: #433b36;" >Save Changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ Auth::user()->name}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ Auth::user()->username}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ Auth::user()->email}}">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="button" class="btn px-4" style="background-color: #DFD8CA; color: #433b36;" value="Save Changes">
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</div>
</section>

@endsection