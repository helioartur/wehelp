{!! Form::open(['route'=>'cause_result.store', 'id'=>'causes-result']) !!}
    {!! Form::hidden('cause_id',$cause->id,null) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add Cause Result</h3>
        </div><!-- /.box-header -->
        <div class="box-body">                                       
            {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>'3','style'=>'width: 100%;'])  !!}
            <br>
            <div class='row' id="images-to-upload">
                
            </div>
        </div>

        <div class="box-footer">
            <span class="btn btn-default btn-sm fileinput-button pull-left" ng-class="{disabled: disabled}">
                    <i class="glyphicon glyphicon-plus"></i>
                <span>Add Fotos...</span>
                {!! Form::file('images[]', array('multiple'=>true, 'id'=>'images')) !!}
            </span>
            {!! Form::submit('Publicar', ['class'=>'btn btn-primary btn-sm pull-right'])  !!} 
        </div>
	</div>
{!! Form::close() !!} 

