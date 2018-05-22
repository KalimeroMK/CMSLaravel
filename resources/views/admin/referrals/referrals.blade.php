
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
              <h4>Референти</h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    @foreach($referrals as $refferal)
                    <tr>
                        <td>
                          <div class="round-img">
                            <a href="/admin/referrals/{{ $refferal->id }}/edit"><img src="/assets/img/referrals/thumbnails/{{ $refferal->image }}" alt=""></a>
                        </div>
                    </td>
                    <td><a href="/admin/referrals/{{ $refferal->id }}/edit">{{ $refferal->title }}</a></td>
                    <td><span>Original time: {{ $refferal->created_at }}</span></td>
                    <td><span>Asigned for: {{ $refferal->user->name }}</span></td>
                    <td><span>Workflow: {{ $refferal->workflow->name }}</span></td>
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