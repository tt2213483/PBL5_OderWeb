@extends('layouts.admin')

@section('title')
    <title>Add Product</title>
@endsection


@section('custom_css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet"/>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name'=>'Product', 'key'=>'Add'])
        <div class="row justify-content-center">
            <div class="col-md-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-9 rounded- bg-white px-3 mb-3">
                            @csrf

                            <div class="form-group">
                                <label>Product name</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Enter product name"
                                       name="name"
                                >
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number"
                                       class="form-control"
                                       placeholder="Enter price"
                                       name="price"
                                >
                            </div>

                            <div class="form-group">
                                <label>Product main image</label>
                                <input type="file"
                                       class="form-control-file"
                                       placeholder="Chooses a file"
                                       name="product_image"
                                >
                            </div>

                            <div class="form-group">
                                <label>Product detail image </label>
                                <input type="file"
                                       multiple
                                       class="form-control-file"
                                       placeholder="Chooses a file"
                                       name="product_images[]"
                                >
                            </div>

                            <div class="form-group">
                                <label>Select a category</label>
                                <select class="form-control"
                                        name="category_id">
                                    <option value="">chooses a category</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Enter tags</label>
                                <select name="tags[]" class="form-control tags_select2" multiple="multiple">
                                </select>
                            </div>

                            <div>
                                <div class="form-group ">
                                    <label>Product Description</label>
                                    <textarea id="tinymce-editor" name="description" class="form-control"
                                              rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>


                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('custom_js')
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/product/add/add.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/hs0hspk14k2y30j7kqjieanll961v60zcy71z7m80zwbcnd4/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

@endsection
