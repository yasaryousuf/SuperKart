@extends('admin.master')
@section('title')
Add Product
@endsection
@section('body')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="new-product" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" name="productName" class="form-control"/>
                            <span class="text-danger"> {{ $errors->has('productName') ? $errors->first('productName') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="categoryId">
                                <option> --- Select Product Category Name --- </option>
                                @foreach($publishedCategories as $publishedCategory)
                                <option value="{{$publishedCategory->id}}">{{$publishedCategory->categoryName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Manufacturer Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="manufacturerId">
                                <option> --- Select Product Manufacturer Name --- </option>
                                @foreach($publishedManufacturers as $publishedManufacturer)
                                <option value="{{$publishedManufacturer->id}}">{{$publishedManufacturer->manufacturerName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="text" name="productPrice" class="form-control"/>
                            <span class="text-danger"> {{ $errors->has('productPrice') ? $errors->first('productPrice') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Quantity</label>
                        <div class="col-md-9">
                            <input type="text" name="productQuantity" class="form-control"/>
                            <span class="text-danger"> {{ $errors->has('productQuantity') ? $errors->first('productQuantity') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Short Description</label>
                        <div class="col-md-9">
                            <textarea  name="productShortDescription" class="form-control">  </textarea>
                            <span class="text-danger"> {{ $errors->has('productShortDescription') ? $errors->first('productShortDescription') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Long Description</label>
                        <div class="col-md-9">
                            <textarea  name="productLongDescription" class="form-control">  </textarea>
                            <span class="text-danger"> {{ $errors->has('productLongDescription') ? $errors->first('productLongDescription') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication Status</label>
                        <div class="col-md-9">
                            <select class="form-control" name="publicationStatus">
                                <option> --- Select Publication Status --- </option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                            <span class="text-danger"> {{ $errors->has('publicationStatus') ? $errors->first('publicationStatus') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" name="productImage" class="form-control"/>
                            <span class="text-danger"> {{ $errors->has('productImage') ? $errors->first('productImage') : ''  }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="btn" value="Save Category Info" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection