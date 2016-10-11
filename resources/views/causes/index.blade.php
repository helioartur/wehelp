@extends('layouts.app')


@section('content')
@include('layouts.shared.alert')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	              Causes
	              <div class="pull-right">
	                  <a href="{{ url('causes/create') }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.new_cause') }}">
	                       <i class="fa fa-plus"></i> New Cause
	                  </a>
	                  
	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="panel-body">
	                <!--<table id="example1" class="table table-bordered">
		                <thead>
		                  <tr>
		                    <th>Title</th>
		                    <th>Start Date</th>
		                    <th>End Date</th>
		                    <th>Location</th>
		                    <th></th>
		                  </tr>
		                </thead>
		                <tbody>
		                 	@foreach ($causes as $cause)
  								<tr>
  									<td>{{$cause->title}}</td>
  									<td>{{$cause->start_date}}</td>
  									<td>{{$cause->end_date}}</td>
  									<td>{{$cause->location_id }}</td>
  									<td> 							                          
                                        <button type="button"
                                        		class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Delete"data-product_id="{{ $cause->id }}" data-product_name="{{ $cause->id }}">
				                            <i class="fa fa-trash"></i>
				                        </button> 

				                        <a href="{{ url('cause/'.$cause->id.'/result') }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Cause Result" ])>   <i class="fa fa-rocket"></i>
                                        </a>
                                    </td>
  								</tr>
							@endforeach
		                <tbody>     
                    </table>-->
	            </div>
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-body">
	                <div class="row">
		            	<div class="col-md-4">
		            		<img class="img-responsive thumbnail pad"  src="{{asset('/img/helping-hands.jpg')}}" alt="First slide">
		            	</div>
		            	<div class="col-md-5">		            	    
		            		<h2 style="margin-top: 0;"><strong>Cause Title</strong></h2>
		            		<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse suscipit cupiditate quo consectetur impedit sit repellendus dolores nemo. Fuga nostrum facere...</small></p>
		            	</div>
		            	<div class="col-md-3 text-center v-divider">
		            	    <p><b>Total Help</b> </p>
		            	    <p><mark>1000</mark></p>
		            		<a href="#" class="btn btn-primary btn-block"><b>Help-me</b></a>
		            	</div>
		            </div>
	            </div>
	        </div>

	        <div class="panel panel-default">
	            <div class="panel-body">
	                <div class="row">
		            	<div class="col-md-4">
		            		<img class="img-responsive thumbnail pad"  src="{{asset('/img/helping-hands.jpg')}}" alt="First slide">
		            	</div>
		            	<div class="col-md-5">		            	    
		            		<h2 style="margin-top: 0;"><strong>Cause Title</strong></h2>
		            		<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse suscipit cupiditate quo consectetur impedit sit repellendus dolores nemo. Fuga nostrum facere...</small></p>
		            	</div>
		            	<div class="col-md-3 text-center v-divider">
		            	    <p><b>Total Help</b> </p>
		            	    <p><mark>1000</mark></p>
		            		<a href="#" class="btn btn-primary btn-block"><b>Help-me</b></a>
		            	</div>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
