@extends('layouts.app')

@section('content')
@if($status == "all")
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            <p>  <a class="btn btn-labeled" href="/admin/users/create"> <i class="btn-label fa fa-plus"></i>Додади корисник </a></p>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-title">
              <h4>Users</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                          <div class="round-img">
                            <a href="/admin/users/{{ $user->id }}"><img src="/assets/img/avatars/thumbnails/{{ $user->image }}" alt=""></a>
                        </div>
                    </td>
                    <td><a href="/admin/users/{{ $user->id }}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td><span>Original time: {{ $user->created_at }}</span></td>
                    <td><span>{{ $user->role }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>

@endif

@if($status == "single")
<div class="col-lg-12">
 <div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="profile-container">
                <div class="profile-header row">
                    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                        @if(!!$user->image)
                        <img src="/assets/img/avatars/thumbnails/{{ $user->image }}"
                        alt="{{ $user->name }}" class="header-avatar"/>
                        @endif
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                        <div class="header-fullname">{{ $user->name }}</div>
                        <div class="header-information">
                            <p>Name: {{ $user->name }} </p>
                            <p>Email: {{ $user->email }}</p>
                            <p>Created at: {{ $user->created_at }}</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 stats-col hidden-xs">
                                <div class="stats-value pink"></div>
                                <div class="stats-title">ROLE</div>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 stats-col">
                                <div class="stats-title orange"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                <button class="capitalize btn btn-palegreen shiny">{{ $user->role }}</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                <a href="/admin/users/{{ $user->id }}/edit"
                                 class="btn btn-labeled shiny btn-warning edit"><i
                                 class="btn-label fa fa-edit"></i> Edit</a>
                             </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                <form action="/admin/users/{{ $user->id }}/delete" method="POST"
                                  id="deleteuser">
                                  {!! csrf_field() !!}
                                  <button type="submit"
                                  class="btn btn-labeled shiny btn-danger delete"><i
                                  class="btn-label fa fa-trash"></i> Delete
                              </button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="card">
        <!-- Nav tabs -->
        <li class="active">
            <a data-toggle="tab" href="#timeline">
                Products
            </a>
        </li>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="card-body">
                    <div class="profiletimeline">
                       @foreach($user->ProductList()->get() as $index => $product)

                       <div class="sl-item">
                        <div class="sl-left"> <img src="/assets/img/avatars/thumbnails/{{ $user->image }}" alt="user" class="img-circle"> </div>
                        <div class="sl-right">
                            <div><a href="#" class="link">{{ $user->name }}</a> <span class="sl-date">{{$product->created_at}}</span>
                                <p><a href="/admin/product/{{ $product->id }}/edit">{{$product->title}} </a></p>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/assets/img/products/thumbnails/{{ $product->image }}" class="img-responsive radius"></div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    @endif
    @endsection
