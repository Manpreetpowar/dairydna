@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>{{trans('global.users')}}</h2>
					
						<div class="right-wrapper pull-right">
						
						</div>
					</header>

					<!-- start: page -->
                    <section class="panel">
							<!-- <header class="panel-heading">
								<h2 class="panel-title">{{trans('global.employees_list')}}</h2>
								<a class="modal-with-form btn btn-default text-right" href="#modalForm">Open Form</a>
							</header> -->
							<header class="panel-heading">
									<div class="panel-actions">
										<div>
										<a class="modal-with-form btn btn-default text-right" href="#modalForm">{{trans('global.create_user')}}</a>
										</div>
									</div>

									<h2 class="panel-title">{{trans('global.users_list')}}</h2>
								</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th>Platform(s)</th>
											<th class="hidden-xs">Engine version</th>
											<th class="hidden-xs">CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>Win 95+</td>
											<td class="center hidden-xs">4</td>
											<td class="center hidden-xs">X</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
											<td>Win 95+</td>
											<td class="center hidden-xs">5</td>
											<td class="center hidden-xs">C</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 5.5
											</td>
											<td>Win 95+</td>
											<td class="center hidden-xs">5.5</td>
											<td class="center hidden-xs">A</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 6
											</td>
											<td>Win 98+</td>
											<td class="center hidden-xs">6</td>
											<td class="center hidden-xs">A</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td>Win XP SP2+</td>
											<td class="center hidden-xs">7</td>
											<td class="center hidden-xs">A</td>
										</tr>
																	<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td>Embedded devices</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td>Embedded devices</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td>Text only</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td>Text only</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">C</td>
										</tr>
										<tr class="gradeU">
											<td>Other browsers</td>
											<td>All others</td>
											<td>-</td>
											<td class="center hidden-xs">-</td>
											<td class="center hidden-xs">U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>


					<!-- Modal Form -->
					<div id="modalForm" class="modal-block modal-block-lg modal-block-primary mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">{{trans('global.create_user')}}</h2>
											</header>
											<div class="panel-body">
												<form id="form" class="form" novalidate="novalidate">
													<div class="row">
													<div class="col-md-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.role')}}</label>
															<select data-plugin-selectTwo class="form-control populate js-example-responsive" name="role" style="width: 100%;">
																	<option value="admin">Admin</option>
																	<option value="employee">Employee</option>
															</select>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.gender')}}</label>
															<select data-plugin-selectTwo class="form-control populate js-example-responsive" name="gender" style="width: 100%;">
																	<option value="male">Male</option>
																	<option value="female">Female</option>
															</select>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.name')}}</label>
															<input type="text" name="name" class="form-control"/>
															</div>
														</div>
														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.email')}}</label>
															<input type="text" name="email" class="form-control" required/>
															</div>
														</div>
														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.phone')}}</label>
															<input type="text" name="phone" class="form-control" required/>
															</div>
														</div>


														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.password')}}</label>
															<input type="text" name="password" class="form-control"/>
															</div>
														</div>

														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.address')}}</label>
															<input type="text" name="address" class="form-control"/>
															</div>
														</div>

														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.date_of_birth')}}</label>
																	<div class="input-group">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar"></i>
																	</span>
																	<input type="text" data-plugin-datepicker class="form-control" name="date_of_birth">
																	</div>
															</div>
														</div>

														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.adhar_card_number')}}</label>
															<input type="text" name="adhar_card_number" class="form-control"/>
															</div>
														</div>

														<div class="col-md-4 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.date_of_joining')}}</label>
															<div class="input-group">
																	<span class="input-group-addon">
																	<i class="fa fa-calendar"></i>
																	</span>
																	<input type="text" data-plugin-datepicker class="form-control" name="date_of_joining">
																	</div>
															</div>
														</div>

														<div class="col-md-8 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.profile_picture')}}</label>
															<input type="file" name="image" class="form-control"/>
															</div>	
														</div>

														<div class="col-md-12 mt-4">
															<div class="form-group">
															<label class="control-label">{{trans('global.description')}}</label>
															<textarea rows="5" class="form-control" placeholder="Type your comment..." name="description"></textarea>
															</div>
														</div>
														
													
													</div>
												
												</form>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm">Submit</button>
														<button class="btn btn-default modal-dismiss">Cancel</button>
													</div>
												</div>
											</footer>
										</section>
									</div>
        @endsection
@section('scripts')
@parent

@endsection
