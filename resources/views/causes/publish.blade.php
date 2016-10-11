@extends('layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.list_cause') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  Partilhar
@endsection
@section('main-content')
    @include('layouts.shared.alert')

    <div class="row">
      <div class="center-block col-md-6" style="float: none;">
        <!-- Box Comment -->
        <div class="box box-widget">
          <div class='box-header with-border'>
            <div class='user-block'>
              <img class='img-circle' src='{{asset('/img/user2-160x160.jpg')}}' alt='user image'>
              <span class='username'><a href="#">{{Auth::user()->name}}</a></span>
              <span class='description'>Created Cause - {{$cause[0]->created_at }} </span>
            </div><!-- /.user-block -->
          </div><!-- /.box-header -->
          <div class='box-body'>
              <!-- post text -->
              <p>{{$cause[0]->description}}.</p>

                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive thumbnail pad" src="{{asset('/img/helping-hands.jpg')}}" alt="First slide">
                        <div class="carousel-caption">
                            <h2>{{$cause[0]->title}}</h2>
                             {{$cause[0]->start_date }} * {{$cause[0]->end_date }}
                        </div>
                    </div>
                </div>
             
              <span class="text-muted ">Partilhar</span>
          </div><!-- /.box-body -->          
          <div class="box-footer">
            <div class="text-center">
                  <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                  <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                  <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                  <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
                  <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                  <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                  <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                  <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                  <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                  <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                  <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
              </div>
          </div><!-- /.box-footer -->
      </div><!-- /.col -->
    
  </div><!-- /.row -->


@endsection