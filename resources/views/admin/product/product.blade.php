@extends('layouts.app')

@section('content')
<div class="page-body">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
      <p><a class="btn btn-labeled" href="/admin/product/create"> <i class="btn-label fa fa-plus"></i>Add product </a></p>
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
               @foreach($products as $product)
               <tr>
                <td>
                  <div class="round-img">
                    <a href="/admin/product/{{ $product->id }}/edit"><img src="/assets/img/products/thumbnails/{{ $product->image }}" alt=""></a>
                  </div>
                </td>
                <td>{{ $product->title }}</td>
                <td><span><a href="/admin/sliders/{{ $product->id }}/product" class="btn btn-info">Додади галерија</a></span></td>
                <td><span>Слики во слајдер: {{ $product->images()->count() }}</span></td>
{{--                 <td><span>Workflow: {{ $product->workflow->name }}</span></td>
--}}
</tr>
@endforeach


</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-lg-12 right">
  {!! $products->links() !!}
</div>

</div>
</div>
@endsection
