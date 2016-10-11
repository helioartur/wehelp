@extends('layouts.app')

@section('htmlheader_title')
	Cause Result
@endsection

@section('contentheader_title')
   <h1>Cause Result</h1>
@endsection

@section('main-content')

	<div class="row">
        <div class="col-md-4">
             <!-- Cause -->
            <div class="box box-primary">
              <div class="box-body">
                 <img class="img-responsive " src="{{asset('/img/helping-hands.jpg')}}" alt="First slide">
                <!--<div class="carousel-inner">
                    <div class="item active">
                        
                        <div class="carousel-caption">
                            <h2 style="margin-bottom: 40px;">{{$cause->title}}</h2>
                             {{$cause->start_date }} * {{$cause->end_date }}
                        </div>
                    </div>
                </div>-->

                <br>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Friends</b> <a class="pull-right">{{$friends}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Total Help</b> <a class="pull-right">{{$helps}}</a>
                  </li>                    
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Help</b></a>
              </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- Description -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Description</h3>
              </div><!-- /.box-header -->
              <div class="box-body">                  
                
                <p class="text-muted">
                  {{$cause->description}}
                </p>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

            <!-- Description -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Top Friends</h3>
              </div><!-- /.box-header -->
              <div class="box-body">                 
                
                  <div class="col-md-3 col-xs-6">
  	                <div class="mag img-responsive">
  	                    <br />
  	                    <img data-toggle="magnify" class="thumbnail img-responsive" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="">
  	                </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar5.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>

                  <!--/span-->
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>

                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>

                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" class="thumbnail img-responsive" src="http://joshadmin.com/assets/img/authors/avatar1.jpg" alt="">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                  <div class="col-md-3 col-xs-6">
                      <div class="mag img-responsive">
                          <br />
                          <img data-toggle="magnify" src="http://joshadmin.com/assets/img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive">
                      </div>
                  </div>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->

        <div class="col-md-8">
             <!-- Cause -->
            @include('causes.result.form') 
            <div class="box box-default">
                <div class="box-body">   
                    @foreach ($results as $result)
                        <div class="post">
                          <div class="user-block">
                            @if(Auth::user()->avatar_url)
                              <img  src="/uploads/{{Auth::user()->avatar_url}}" class="img-circle img-bordered-sm" alt="Cinque Terre" width="150" height="150">
                            @else
                              <img  src="/img/user2-160x160.jpg" class="img-circle" alt="Cinque Terre" width="150" >
                            @endif
                            <span class='username'>
                              <a href="#">{{Auth::user()->name}}</a>
                              <a href='#' class='pull-right btn-box-tool'><i class='fa fa-times'></i></a>
                            </span>
                            <span class='description'>Result publicly - {{$result->created_at}}</span>
                          </div><!-- /.user-block -->
                          <p>
                            {{$result->description}}
                          </p>
                          <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                            <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (0)</a></li>
                          </ul>

                          <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div><!-- /.post -->
                    @endforeach                   
                </div>
            </div>
        </div><!-- /.col -->
  </div><!-- /.row -->
@endsection
