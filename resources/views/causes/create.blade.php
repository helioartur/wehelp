@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.new_cause') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.new_cause') }}
@endsection


@section('main-content')
    @include('layouts.shared.alert')
	<div class="row">
	    <div class="col-lg-12">
	        <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">
	              	 <strong>{{ trans('adminlte_lang::message.new_cause') }}
	              </h3>
	              <!--<div class="pull-right box-tools">
	                    <a href="{{ url('causes') }}" class="btn btn-primary btn-sm" role="button"    data-toggle="tooltip" title="Voltar">
	                       <i class="fa  fa-arrow-left"></i>
	                    </a>
	                    
	                    <a href="#" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Save" id="add-cause">
	                       <i class="fa fa-save"></i>
	                    </a>	                        
	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                {!! Form::open(['route'=>'causes.store', 'id'=>'causes-form']) !!}
	                    @include('causes.form',array('submitButtonText'=>'Add cause'))
	                {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	</div>
@endsection
