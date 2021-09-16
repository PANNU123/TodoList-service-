@extends('layouts.app')
@section('content')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Category</a></li>
        </ul>
    </div>
</div>
<div class="row animated fadeInUp">

    @include('admin.toastr');
    @error('category_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <div class="panel  b-primary bt-md">
            <div class="panel-content">
                <div class="row">
                    <div class="col-xs-6"><h4>Add Psot Form</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('manage-post')}}" class="btn btn-md btn-primary">All Post</a>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="POST" action="{{route('save-post')}}">
                            

                            @csrf
                            <div class="form-group">
                                <label for="email2" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="title" data-validation="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email2" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" data-validation="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Add Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection



