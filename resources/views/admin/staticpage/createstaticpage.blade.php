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
                    <span class="widget-caption">Add static page</span>
                </div>
                <br>
                <div class="widget-body">
                    <div id="horizontal-form">

                        {{ Form::model('product', array('route' => array('admin.staticpage.store'), 'method' => 'POST', 'files'=>true)) }}
                        {!! csrf_field() !!}


                        <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                         <span>
                            <span class=" btn-file">
                            </i> Browse... <input type="file" name="image">
                        </span>
                    </span>
                </div>
                <br />
                @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <textarea class="ckeditor" id="title" name="title"></textarea>
                </div>
                @if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif



                <div class="form-group">
                    <label for="description">Page description</label>
                    <textarea class="ckeditor" id="elm3" name="description"></textarea>
                </div>
                @if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



                <div class="form-group">
                    <label for="user">User</label>
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

                <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
                {!! Form::close() !!}



            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
