@extends('admin.layout.view')
@section('route-link',"/admin/product")
@section('table')
        <!-- form handling -->

        <table class="table col-sm-6 col-lg-3">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Image</th>
              <th>AmazonLink</th>
              <th>Product Key</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->product_name}}</td>
              <td>{{$product->product_price}}</td>
              <td>
                <img style="width: 50px;height: 50px;"
                class="table-img"
                  src="{{ url($product->img_link) }}"
                />
              </td>
              <td>{{$product->amazon_link}}</td>
              <td>{{$product->product_key}}</td>
              <td>
                <a href="{{ route('DeleteProduct', ['id'=>$product->id]) }}"><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
@endsection