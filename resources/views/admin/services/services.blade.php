@extends('layouts.app')
@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            <p>  <a class="btn btn-labeled" href="services/create"> <i class="btn-label fa fa-plus"></i>Додади Услуга </a></p>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-title">
              <h4>Products</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>
                          <div class="round-img">
                            <a href="/admin/services/{{ $service->id }}/edit"><img src="/assets/img/services/thumbnails/{{ $service->image }}" alt=""></a>
                        </div>
                    </td>
                    <td><a href="/admin/services/{{ $service->id }}/edit">{{ $service->title }}</a></td>
                    <td><span>Original time: {{ $service->created_at }}</span></td>
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

@endsection