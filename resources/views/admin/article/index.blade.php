@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif
                    <a href="{{ url('admin/articles/create') }}" class="btn btn-lg btn-primary">新增</a>

                    @foreach ($articles as $article)
                        <hr>
                        <div class="article">
                            <h4>{{ $article->title }}</h4>
                            <div class="content">
                                <p>
                                    {{ $article->body }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/articles/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/articles/'.$article->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                    @endforeach
                    
                </div>
                
            </div>
        </div>
        {{ $articles->links() }}
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