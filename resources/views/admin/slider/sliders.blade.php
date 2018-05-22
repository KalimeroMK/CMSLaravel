@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            <p><a class="btn btn-labeled" href="/admin/slider/create"> <i
                class="btn-label fa fa-plus"></i>Додади слика во слајдер </a></p>

                <div class="card">
                    <div class="card-title">
                      <h4>Слики</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">

                          <tbody>
                             @foreach($sliders as $slider)
                             <tr>
                                <td>
                                  <div class="round-img">
                                    <a href="/admin/slider/{{ $slider->id }}/edit">@if($slider->image)<img src="/assets/img/slider/thumbnails/{{ $slider->image }}" alt="">@endif</a>
                                </div>
                            </td>
                            <td>{{ $slider->title }}</td>

                            <td><span>Original creator: {{ $slider->createdby->name }}</span></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection