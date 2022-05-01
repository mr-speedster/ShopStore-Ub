@extends('admin.layout.app')
@section('form')
<form action="{{ route('AdminProductData') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image Link</label>
        <input type="text" class="form-control" name="img_link" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="product_name" id="exampleInputEmail1"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="product_price" id="exampleInputEmail1"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Amazon link</label>
        <input type="text" class="form-control" name="amazon_link" id="exampleInputEmail1"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Key</label>
        <select name="product_key">
            <option value="">--select--</option>
            <option value="women">Women</option>
            <option value="men">Men</option>
            <option value="bag">Bag</option>
            <option value="footwear">Footwear</option>
            <option value="watch">Watches</option>
            <option value="homeappliances">Home Appliances</option>
            <option value="electronic">Electronic</option>
            <option value="mobile">Mobile</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if (\Session::has('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                text: 'Successfully Added',
            })
        </script>
    @elseif ($errors->any())
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                text: 'Something Went Wrong!',
            })
        </script>
    @endif
</form>
@endsection



