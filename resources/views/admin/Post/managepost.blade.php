@extends('layouts.app')
@section('content')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Category</a></li>
            <li><a href="javascript:avoid(0)">Manage Category</a></li>
        </ul>
    </div>
</div>
<div class="row animated fadeInUp">

    @include('admin.toastr');

        <div class="panel  b-primary bt-md">
            <div class="panel-content">
                <div class="row">
                    <div class="col-xs-6"><h4>Manage Post Table</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('add-post')}}" class="btn btn-md btn-primary">Add Post</a>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="row animated fadeInRight">
                                    <div class="col-sm-12">
                                        <div class="panel">
                                            <div class="panel-content">
                                                <div class="table-responsive">
                                                    <table id="basic-table" class="data-table table-bordered table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>SL</th>
                                                            <th>Category Name</th>
                                                            <th>Category Slug</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $index=1;
                                                            @endphp
                                                            @foreach ($post as $row )
                                                        <tr>
                                                            <td>{{$index++}}</td>
                                                            <td>{{$row->title}}</td>
                                                            <td>{{$row->description}}</td>
                                                            {{-- <td>
                                                                @if($row->status==1)
                                                                <span class="badge bg-primary">Acitve</span>
                                                                @else()
                                                                <span class="badge bg-danger">Inacitve</span>
                                                                @endif
                                                                <input type="checkbox" data-size="mini" data-toggle="toggle" data-on="Active" data-off="Inactive" id="Categorystatus"  data-id="{{$row->id}}" {{ $row->status==1 ? 'checked' :''}}>
                                                            </td> --}}
                                                            <td>
                                                                <a href="{{url('post/edit/'.$row->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                                                <a href="{{url('post/delete/'.$row->id)}}" class="btn btn-xs btn-danger" onclick="myFunction()"><i class="fa fa-trash"></i></a>

                                                                {{-- @if($row->status==1)
                                                                <a href="{{url('category/inactive/'.$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-arrow-down"></i></a>
                                                                @else
                                                                <a href="{{url('category/active/'.$row->id)}}" class="btn btn-xs btn-success"><i class="fa fa-arrow-up"></i></a>
                                                                @endif --}}
                                                            </td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
