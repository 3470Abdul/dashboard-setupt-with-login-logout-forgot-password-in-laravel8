@extends('layout.app')

@section('content')
				<!-- Row -->
				<div class="row mt-4">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header border-bottom-0">
								<h3 class="card-title">Summernote Editor</h3>
							</div>
                            <form action="{{ url('text') }}" method="POST">
                                @csrf
							<div class="card-body">
								<div><textarea name="long_desc" id="summernote"></textarea></div>
                                <div class="my-3 text-center">
                                    <input type="submit" class="btn btn-primary w-75" value="submit" name="submit">
                                </div>
							</div>
                        </form>
						</div>
					</div>
				</div>
				<!--End Row-->
@endsection
