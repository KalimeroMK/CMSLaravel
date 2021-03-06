@extends('layouts.app')



@section('content')

<div class="page-body">
    <div class="row">
        <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-12 col-xs-12">

            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
            @endif

            <div class="widget">
                <div class="widget-header bordered-bottom bordered-warning">
                    <span class="widget-caption">Додади референт</span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">

                        {{ Form::model('referrals', array('route' => array('admin.referrals.store'), 'method' => 'POST', 'files'=>true)) }}



                        <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                         <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                               <i class="btn-label fa fa-image"> </i> Избери... <input type="file" name="image">
                           </span>
                       </span>
                       <input type="text" class="form-control" readonly="">
                   </div>
                   <br />
                   @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                   <div class="form-group">
                    <label for="title">Наслов</label>
                    <textarea class="ckeditor" id="title" name="title"></textarea>
                </div>
                @if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif



                <div class="form-group">
                    <label for="country">Држава</label>

                    <select name="country_id" id="country" class="form-control">
                        @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <input type="text" id="searchmap" class="form-control">
                    <div id="map-canvas"></div>
                </div>


                <div class="form-group">
                    <label for="description">Детален текст</label>
                    <textarea class="ckeditor" id="elm3" name="description"></textarea>
                </div>
                @if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



                <div class="form-group">
                    <label for="user">Корисник</label>
                    <select name="user_id" id="user" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
                        @endforeach

                    </select>
                </div>


                <div class="form-group">
                    <p>Workflow: </p>
                    @foreach($workflows as $workflow)
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="workflow_id" value="{{ $workflow->id }}" @if($workflow->id  == 1) checked @endif>
                        </label>
                        <span class="text"> {{ $workflow->name }}</span>
                    </div>

                    @endforeach
                </div>


                <!-- Hidden inputs -->

                <input type="hidden" name="creator" value="{{ Auth::user()->id  }}">
                <input type="hidden" id="lat" class="form-control" name="lat">
                <input type="hidden" id="lng" class="form-control" name="lng">

                <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
                {!! Form::close() !!}



            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection


@section('scripts')
<!-- Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAsNNbnqvbIiRo2hBpr3-lvmYxm3ISPtWI"></script>
<script type="text/javascript" src="/assets/js/maps.js"></script>
@endsection