@extends('admin.master')
@section('body')
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                	<tr>
                		<th>product Id</th>
                		<td>{{$productById->id}}</td>
                	</tr>
                	<tr>
                		<th>product name</th>
                		<td>{{$productById->productName}}</td>
                	</tr>
                	<tr>
                		<th>category name</th>
                		<td>{{$productById->categoryName}}</td>
                	</tr>
                	<tr>
                		<th>manufacturer name</th>
                		<td>{{$productById->manufacturerName}}</td>
                	</tr>
                	<tr>
                		<th>product price</th>
                		<td>{{$productById->productPrice}}</td>
                	</tr>
                	<tr>
                		<th>product quantity</th>
                		<td>{{$productById->productQuantity}}</td>
                	</tr>
                	<tr>
                		<th>product short description</th>
                		<td>{{$productById->productShortDescription}}</td>
                	</tr>
                	<tr>
                		<th>product short description</th>
                		<td>{{$productById->productLongDescription}}</td>
                	</tr>
                	<tr>
                		<th>product image</th>
                		<td>
                		<img src="{{asset($productById->productImage)}}">
                		</td>
                	</tr>
                	<tr>
                		<th>publication status</th>
                		<td>{{$productById->publicationStatus}}</td>
                	</tr>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection