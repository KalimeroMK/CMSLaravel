@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-lg-12">
            <p><a class="btn btn-labeled w" href="/admin/staticpage/create"> <i
                class="btn-label fa fa-plus"></i>Add Static Page </a></p>
                <div class="card">
                    <div class="card-title">
                      <h4>Статични страни</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                           @foreach($staticpages as $staticpage)                             <tr>
                            <td>
                              <div class="round-img">
                                <a href="/admin/staticpage/{{ $staticpage->id }}/edit"> @if($staticpage->image)
                                    <img src="/assets/img/staticpage/{{ $staticpage->imagethumb }}" alt="">
                                @endif</a>
                            </div>
                        </td>
                        <td>{{ $staticpage->title }}</td>
                        <td><span>Original time: {{ $staticpage->created_at }}</span></td>
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

<div class="col-lg-12">
    {!! $staticpages->links() !!}
</div>

@endsection




