@extends('layouts.app')
@section('content')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Category</a></li>
            <li><a href="javascript:avoid(0)">Update Category</a></li>
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
                    <div class="col-xs-6"><h4>Edit Post</h4></div>
                    <div class="col-xs-6 text-right">
                        <a href="{{route('manage-post')}}" class="btn btn-md btn-primary">All Post</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="POST" action="{{ route('update-post') }}">
                            {{-- {{route('update-post')}} --}}

                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="form-group">
                                <label for="email2" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title" placeholder="Categoryname" data-validation="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email2" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" value="{{$post->description}}" name="description" placeholder="Categoryname" data-validation="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Update Post</button>
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



