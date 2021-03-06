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
                    <span class="widget-caption">Edit refferal: {{ strip_tags($service->title) }}</span>
                </div>
                <div class="widget-body">

                    <div class="img-refferal">
                        @if(!!$service->image)
                        <img class="img-responsive" src="/assets/img/services/medium/{{ $service->imagemedium }}" alt="{{ $service->title }}"/>
                        @endif
                    </div>
                    <br />


                    <div id="horizontal-form">

                        {{ Form::model('refferal', array('route' => array('admin.services.update', $service->id), 'method' => 'PUT','files' => true)) }}
                        {!! csrf_field() !!}


                        <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <span class="input-group-btn">
                                <span class="btn btn-info shiny btn-file">
                                    <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly="">
                        </div>
                        <br />
                        @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea class="ckeditor" id="title" name="title">{{ $service->title }}</textarea>
                        </div>
                        @if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif




                        <div class="form-group">
                            <label for="description">refferal description</label>
                            <textarea class="ckeditor" id="elm3" name="description">{{ $service->description }}</textarea>
                        </div>
                        @if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



                        <div class="form-group">
                            <label for="user">Translator</label>
                            <select name="user_id" id="user" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" @if($service->user_id == $user->id) selected @endif >{{ $user->name }}</option>
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

                        <input type="hidden" name="creator" value="{{ $service->creator }}">
                        <input type="hidden" id="lat" class="form-control" name="lat" value="{{ $service->lat }}">
                        <input type="hidden" id="lng" class="form-control" name="lng" value="{{ $service->lng }}">

                        <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Обнови</button>
                        {!! Form::close() !!}


                        <hr/>


                        {{ Form::model('services', array('route' => array('admin.services.destroy', $service->id), 'method' => 'DELETE', 'id' => 'service'))}}
                        {!! csrf_field() !!}

                        <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                            class="btn-label fa fa-trash"></i> Избриши
                        </button>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
