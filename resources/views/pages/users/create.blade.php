@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>{{trans('global.employees')}}</h2>
					
						<div class="right-wrapper pull-right">
						
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
								
										<h2 class="panel-title">{{trans('global.create_employee')}}</h2>
									</header>
									<div class="panel-body">
										<form class="form-bordered" method="get">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                            </div>
										
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Name</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                <button class="btn btn-primary">Submit</button>
                                                </div>
                                              
                                            </div>
										</form>
									</div>
								</section>
						
				
						
							</div>
						</div>
						
					
					<!-- end: page -->
				</section>
        @endsection
@section('scripts')
@parent

@endsection
