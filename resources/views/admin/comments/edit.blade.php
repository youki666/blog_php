@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑评论</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/comments/'.$comment->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <p>昵称</p>
                        <input type="text" name="nickname" class="form-control" required="required" placeholder="请输入昵称" value="{{ $comment->nickname }}">
                        <br>
                        <p>邮箱Email</p>
                        <input type="text" name="email" class="form-control" required="required" placeholder="请输入昵称" value="{{ $comment->email }}">
                        <br>
                        <p>网站website</p>
                        <input type="text" name="website" class="form-control" required="required" placeholder="请输入昵称" value="{{ $comment->website }}">
                        <br>
                        <p>评论</p>
                        <textarea name="content" rows="10" class="form-control" required="required" placeholder="请输入内容">{{ $comment->content }}</textarea>
                        <br>
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection