@include('shared/header')
<div class="container">
    <h1 class="page-title">Login</h1>
    <div class="row">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<div class="card" style="margin-bottom:50px;">
					<div class="card-header">Dashboard</div>
					<div class="card-body">
						@if ($message = Session::get('success'))
						<div class="alert alert-success">
							{{ $message }}
						</div>
						@else
						<div class="alert alert-success">
							You are logged in!
						</div>       
						@endif                
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
@include('shared/footer')
