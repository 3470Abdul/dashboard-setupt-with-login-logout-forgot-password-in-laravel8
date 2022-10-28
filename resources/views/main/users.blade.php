@extends('layout.app')

@section('content')

				<!-- Row -->
				<div class="row row-sm mt-4">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">All Users</h3>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="file-datatable" class="border-top-0  table table-bordered text-nowrap key-buttons border-bottom">
										<thead>
											<tr>
												<th class="border-bottom-0">Sr.No</th>
												<th class="border-bottom-0">Name</th>
												<th class="border-bottom-0">Email</th>
											</tr>
										</thead>
										<tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($users as $user)
                                            <tr>
												<td>{{ $i = $i + 1; }}</td>
                                                <td>{{ $user->name }}</td>
												<td>{{ $user->email }}</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

@endsection
