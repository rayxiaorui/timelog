@extends('layouts.app')

@section('title', 'Posts All')

@section('content')
<div class="container">
    <div class="col-md-9">
        <div class="panel panel-info">
            <div class="panel-body p-0">
                <div id="all-posts-list">

                    @foreach ($posts as $post)
                    <li class="d-table width-full pt-3 pb-2 px-3 border-bottom">
                        <div class="d-table-cell col-1 v-align-top">
                            <a href="#">
                                <img class="avatar" width="50" alt="{{ $post->post_user->username }}" src="{{ $post->post_user->avatar }}" >
                            </a>
                        </div>
                        <div class="d-table-cell v-align-top">
                            <div class="pb-1">
                                <h3>
                                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->post_title }}</a>
                                </h3>
                            </div>
                            <div class="pt-1 f6 grasy">
                                <div class="d-inline-block">
                                    <span>一句话介绍..</span>
                                </div>
                                <div class="float-right">
                                    <div class="d-inline-block">
                                        <span class="glyphicon glyphicon-time"></span>
                                        <span class="mr-3">{{ carbon_diff($post->updated_at) }}</span>
                                    </div>
                                    <div class="d-inline-block">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span class="mr-3">
                                            <a href="{{ route('users.show2', $post->post_user->username) }}">{{ $post->post_user->nickname or $post->post_user->username }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </div>
            </div>
            <div class="panel-footer">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
