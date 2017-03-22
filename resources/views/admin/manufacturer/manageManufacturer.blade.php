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
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <tr>
                        <th>SL No.</th>
                        <th>Manufactuer Name</th>
                        <th>Manufacturer Description</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                    <?php $x=1; ?>
                    @foreach($manufacturers as $manufacturer)
                    <tr>
                        <td>{{$x++}}</td>
                        <td>{{$manufacturer->manufacturerName}}</td>
                        <td>{{$manufacturer->manufacturerDescription}}</td>
                        <td>{{$manufacturer->publicationStatus}}</td>
                        <td> <a href="{{url('edit-manufacturer/'.$manufacturer->id)}}" class="btn btn-md btn-success"><span class="glyphicon glyphicon-edit"></span></a><a href="{{url('delete-manufacturer/'.$manufacturer->id)}}" class="btn btn-md btn-danger"><span class="glyphicon glyphicon-warning-sign"></span></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection