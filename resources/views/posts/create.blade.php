@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="">بازگشت</a>
            </div>
        </div>
    </div>


    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value="" class="form-control" placeholder="">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <textarea class="form-control" style="height:150px" name="writer" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <strong>آپلود:</strong>
                    <input type="file" name="image" value="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>
        </div>
    </form>
@endsection
