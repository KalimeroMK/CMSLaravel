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
                    <span class="widget-caption">Додади слика во слајдер</span>
                </div>
                <br/>
                <div class="widget-body">
                    <div id="horizontal-form">

                        {{ Form::model('slider', array('route' => array('admin.slider.store'), 'method' => 'POST', 'files'=>true)) }}
                        {!! csrf_field() !!}


                        <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                         <span class="input-group-btn">
                            <span>
                              Избери слика... <input type="file" name="image">
                          </span>
                      </span>
                  </div>
                  <br/>
                  @if ($errors->has('image')) <p
                  class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                  <div class="form-group">
                    <label for="title">Наслов</label>
                    <input type="text" name="title" class="form-control">
                </div>
                @if ($errors->has('title')) <p
                class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" id="link" name="link" class="form-control"></input>
                </div>
                @if ($errors->has('link')) <p
                class="alert alert-danger">{{ $errors->first('link') }}</p> @endif

                <div class="form-group">
                    <label for="description">Опис</label>
                    <textarea class="ckeditor" id="elm3" name="description"></textarea>
                </div>
                @if ($errors->has('description')) <p
                class="alert alert-danger">{{ $errors->first('description') }}</p> @endif


                <div class="form-group">
                    <label for="user">Уредник</label>
                    <select name="user_id" id="user" class="form-control">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
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

                    <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                        class="btn-label fa fa-plus"></i> Create
                    </button>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
