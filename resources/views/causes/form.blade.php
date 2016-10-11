<div class="row">   
    <input name="location_id" id="location_id" type="hidden" value="11111">
    
    <div class="col-lg-4">
        <div class="col-lg-12">
            <a href="#" class="thumbnail">
                <img  src="/img/boxed-bg.jpg"  alt="...">
            </a>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="col-lg-12 col-md-4 col-sm-6">
    		<div class="form-group form-group-sm">
    			{!! Form::label('title','Title:') !!}
    			{!! Form::text('title', null, ['class'=>'form-control']) !!}
    		</div>
    	</div>
        
        <div class="col-lg-6 col-md-4 col-sm-6">
    		<div class="form-group form-group-sm">
    			{!! Form::label('start_date','Start Date:') !!}
    			{!! Form::date('start_date',null, ['class'=>'form-control']) !!}
    		</div>
    	</div>
        <div class="col-lg-6 col-md-4 col-sm-6">
            <div class="form-group form-group-sm">
                {!! Form::label('end_date','End Date:') !!}
                {!! Form::date('end_date',null, ['class'=>'form-control']) !!}
            </div>
        </div>    
        <div class="col-lg-12">
            <div class="form-group">
                {!! Form::label('description','Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'3','style'=>'width: 100%;'])  !!}
            </div> 
        </div>  
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary pull-right'])  !!}           
    </div>
</div>