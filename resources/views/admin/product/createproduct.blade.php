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
					<span class="widget-caption">Add product</span>
				</div>
				<div class="widget-body">
					<div id="horizontal-form">

						{{ Form::model('product', array('route' => array('admin.product.store'), 'method' => 'POST', 'files'=>true)) }}
						{!! csrf_field() !!}


						<div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
							<span class="input-group-btn"><br>
								<span>
									Browse... <input type="file" name="image">
								</span>
							</span>
						</div>
						<br />
						@if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

						<div class="form-group row">
							<label for="title" class="col-2 col-form-label">Title</label>
							<div class="col-12">
								<input class="form-control" type="text" name="title" id="title">
							</div>
						</div>
						@if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


						<div class="form-group">
							<label for="category">Category</label>

							<select name="category" id="category" class="form-control">
								@foreach ($categories as $category)
								<option value="{{ $category->id }}">@for ($i = 0; $i < $category->depth; $i++) - @endfor {{ $category->name }}</option>
								@endforeach
							</select>
						</div>

						@if ($errors->has('category')) <p class="alert alert-danger">{{ $errors->first('category') }}</p> @endif
						<div class="form-group">
							<label for="country">Country</label>

							<select name="countries" id="countries" class="form-control">
								@foreach ($countries as $country)
								<option value="{{ $country->id }}">{{ $country->name }}</option>
								@endforeach

							</select>
						</div>
						@if ($errors->has('country')) <p class="alert alert-danger">{{ $errors->first('country') }}</p> @endif
						<label for="country">Cities</label>

						<select name="cities" id="cities" class="form-control">
							@foreach ($cities as $cities)
							<option value="{{ $cities->id }}">{{ $cities->name }}</option>
							@endforeach

						</select>
					</div>
					@if ($errors->has('cities')) <p class="alert alert-danger">{{ $errors->first('cities') }}</p> @endif
					<br>
					<label for="neighborhood">Neighborhood</label>

					<select name="neighborhood" id="neighborhood" class="form-control">
						@foreach ($neighborhood as $neighborhood)
						<option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
						@endforeach

					</select>
				</div>
				@if ($errors->has('neighborhood')) <p class="alert alert-danger">{{ $errors->first('neighborhood') }}</p> @endif
				<br>
				<div class="form-group">
					<label for="description">Product description</label>
					<textarea class="ckeditor" id="elm3" name="description"></textarea>
				</div>
				@if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif
				<div class="form-group">
					<label for="tags">Tags: </label>
					<input type="text" data-role="tagsinput" name="keywords" value="page, static">
				</div>
				@if ($errors->has('keywords')) <p class="alert alert-danger">{{ $errors->first('keywords') }}</p> @endif



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

				<button type="submit" class="btn btn-labeled"><i class="btn-label fa fa-plus"></i> Create</button>
				{!! Form::close() !!}



			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection
