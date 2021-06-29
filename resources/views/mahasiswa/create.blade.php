 @extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Tambah Data Mahasiswa
				
					<div class="card-body">
						<form action = "{{ route('simpan.mahasiswa') }}" method="post">
						@csrf
			    			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Nama Lengkap</label>
			            			<div class="col-md-6">
			                			<input type="text" name="user_id" class="form-control">
		                			</div>
		            		</div>
		     				<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Tempat Lahir</label>
			            			<div class="col-md-6">
			                			<input type="text" name="Tempat_Lahir" class="form-control">
		            				</div>
		        			</div>
		        			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Tanggal Lahir</label>
			            			<div class="col-md-6">
			                			<input type="text" name="tgl_lahir" class="form-control">
		                			</div>
		        			</div>
		        			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Telpon</label>
			            			<div class="col-md-6">
			                			<input type="text" name="telepon" class="form-control">
		            				</div>
		        			</div>
		        			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Alamat</label>
			            			<div class="col-md-6">
			                			<input type="text" name="alamat" class="form-control">
		                			</div>
		        			</div>
		        			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Jenis Kelamin</label>
			            			<div class="col-md-6">
			                			<input type="text" name="gender" class="form-control">
		                			</div>
		        			</div>
		        			<div class="form-group-row">
			        			<label class="col-md-4 text-md-left">Photo</label>
			            			<div class="col-md-6">
			                			<input type="file" name="foto" class="form-control">
		                			</div>
		        			</div>

							<div class="form-group-row">
								<div class="col">
									<button type= "submit" class = "btn btn-md btn-primary">Simpan</button>
									<a href="{{ route('mahasiswa') }}" class = "btn btn-md btn-danger">Batal</a>
								</div>
							</div>
		    			</form>
		            </div>
		        </div>
		    </div>
	    </div>
    </div>
</div>
@endsection