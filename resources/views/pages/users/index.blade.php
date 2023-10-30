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
         <table class="table table-bordered data-table">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th width="100px">Action</th>
               </tr>
            </thead>
            <tbody>
            </tbody>
         </table>
      </div>
   </section>
   <!-- end: page -->
</section>
<!-- Modal Form -->
<div id="modalForm" class="modal-block modal-block-lg modal-block-primary mfp-hide">
   <section class="panel">
      <form id="myForm" class="form" novalidate="novalidate" method="POST" enctype="multipart/form-data">
         @csrf
         <header class="panel-heading">
            <h2 class="panel-title">{{trans('global.create_user')}}</h2>
         </header>
         <div class="panel-body">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.role')}}</label>
                     <select data-plugin-selectTwo class="form-control populate js-example-responsive" name="role" style="width: 100%;">
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                     </select>
                     <label class="role_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.gender')}}</label>
                     <select data-plugin-selectTwo class="form-control populate js-example-responsive" name="gender" style="width: 100%;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                     </select>
                     <label class="gender_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.name')}}</label>
                     <input type="text" id="name" name="name" class="form-control"/>
                     <label class="name_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.email')}}</label>
                     <input type="text" id="email" name="email" class="form-control"/>
                     <label class="email_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.phone')}}</label>
                     <input type="text" name="phone" class="form-control"/>
                     <label class="phone_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.password')}}</label>
                     <input type="text" id="password" name="password" class="form-control"/>
                     <label class="password_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.address')}}</label>
                     <input type="text" name="address" class="form-control"/>
                     <label class="address_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.date_of_birth')}}</label>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" class="form-control" name="date_of_birth">
                     </div>
                     <label class="date_of_birth_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.adhar_card_number')}}</label>
                     <input type="text" name="adhar_card_number" class="form-control"/>
                     <label class="adhar_card_number_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.date_of_joining')}}</label>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input type="date" class="form-control" name="date_of_joining">
                     </div>
                     <label class="date_of_joining_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-8 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.profile_picture')}}</label>
                     <input type="file" name="image" class="form-control"/>
                     <label class="image_error text-danger"></label>
                  </div>
               </div>
               <div class="col-md-12 mt-4">
                  <div class="form-group">
                     <label class="control-label">{{trans('global.description')}}</label>
                     <textarea rows="5" class="form-control" placeholder="Type your comment..." name="description"></textarea>
                     <label class="description_error text-danger"></label>
                  </div>
               </div>
            </div>
         </div>
         <footer class="panel-footer">
            <div class="row">
               <div class="col-md-12 text-right">
                  <button type="button" id="submitForm" class="btn btn-primary">Submit</button>
                  <button class="btn btn-default modal-dismiss">Cancel</button>
               </div>
            </div>
         </footer>
      </form>
   </section>
</div>
@endsection
@section('scripts')
@parent
<script>
   $(function () {
   		var table = $('.data-table').DataTable({
		processing: true,
		serverSide: true,
		ajax: "{{ route('users.index') }}",
		columns: [
		{data: 'id', name: 'id'},
		{data: 'name', name: 'name'},
		{data: 'email', name: 'email'},
		{data: 'action', name: 'action', orderable: false, searchable: false},
		]
   });
   });
   
   
   $(document).ready(function () {
	
				$('#submitForm').click(function (e) {
				
        $('.errors').html('');
			e.preventDefault();
			var formElement = $('#myForm')[0]; // Replace 'myForm' with the actual form ID
			var formData = new FormData(formElement);
			//  $('#loadingspin').show();
			
			$.ajax({
					type: "POST",
					url: "{{route('users.store')}}",
					data: formData,
					dataType: 'JSON',
					contentType: false,
					cache: false,
					processData: false,
					success: function (data) {
					// $('#loadingspin').hide();
					// $('.text-danger').html('');
					console.log(data);
					//    $("#submitForm")[0].reset();
					
					// If data inserted into DB bhsdhs dsvdsvdh 
					if (data.success) {
					
						$('.modal-dismiss').click(function (e) {
							e.preventDefault();
							$.magnificPopup.close();
						});

						$('.data-table').DataTable().ajax.reload();
                    $.notify("User Added Successfully!","success", {
                         clickToHide: false,
                            autoHideDelay: 5000
                      });
						
					}
					},
					error: function (data) {
					if (data.status === 422) {
					$('#loadingspin').hide();
					$('.text-danger').html('');
					var errors = $.parseJSON(data.responseText);
					$.each(errors, function (key, value) {
					//$(":submit").attr('disabled', false);
					
					if ($.isPlainObject(value)) {
					$.each(value, function (key, value) {
					
						var key = key.replace('.', '_');
						$('.' + key + '_error').show().append(value);
					});
					} else {
					// $('#response').show().append(value+"<br/>"); //this is my div with messages
					}
					});
					}
					}
			});
			
			});
   
			



   });


</script>
@endsection