@extends('layouts.admin')
@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>{{ucfirst(auth()->user()->role)}} Dashboard</h2>
					</header>
		<div class="row">		
				<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Employees</h4>
														<div class="info">
															<strong class="amount">50</strong>
															<!-- <span class="text-primary">(14 unread)</span> -->
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-usd"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Cows</h4>
														<div class="info">
															<strong class="amount">20</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(withdraw)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today Buffalos</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(View All)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-usd"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Investment</h4>
														<div class="info">
															<strong class="amount">$10000</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase"></a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-usd"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Return</h4>
														<div class="info">
															<strong class="amount">$ 20000</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase"></a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
					</div>
				</div>
		</div>
	<!-- end: page -->
</section>		
        @endsection
@section('scripts')
@parent

@endsection
