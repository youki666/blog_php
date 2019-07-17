@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">评论管理</div>
                <div class="panel-body">
                @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif
                   
                    <table class="table table-bordered">
                        <tr >
                           <th style="width:400px;vertical-align:middle;text-align:center;">Content</th>
                           <th style="width:400px;vertical-align:middle;text-align:center;">User</th>
                           <th style="width:400px;vertical-align:middle;text-align:center;">Email</th>
                           <th style="width:400px;vertical-align:middle;text-align:center;">Website</th>
                           <th style="width:400px;vertical-align:middle;text-align:center;">编辑</th>
                           <th style="width:400px;vertical-align:middle;text-align:center;">删除</th>
                        </tr>
                        @foreach($comments as $comment)
                        <tr>
                            <td style="width:400px;vertical-align:middle;text-align:center;">{{$comment ->content}}</td>
                            <td style="width:400px;vertical-align:middle;text-align:center;">{{$comment ->nickname}}</td>
                            <td style="width:400px;vertical-align:middle;text-align:center;">{{$comment ->email}}</td>
                            <td style="width:400px;vertical-align:middle;text-align:center;">{{$comment ->website}}</td>
                            <td style="width:400px;vertical-align:middle;text-align:center;">
                               <a href="{{ url('admin/comments/'.$comment->id.'/edit') }}" class="btn btn-success">编辑</a>
                            </td>
                            <td style="width:400px;vertical-align:middle;text-align:center;">
                                <form action="{{url('admin/comments/'.$comment->id )}}" method="POST" style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">删除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
<style>
.content {
    border: 1px solid gray;
    margin: 10px 0;
}
       .pagination {
           position: fixed;
           right: 120px;
           bottom: 20px;
       }
    </style>