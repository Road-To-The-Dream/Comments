@extends('layouts.header')

@section('title', 'Views')

@section('content')

    <div class="row mt-3 mb-4">
        <div class="col text-right">
            <a class="btn-new-comment" href="/comment/create">Add new comment</a>
        </div>
    </div>

    @if(count($parentComments) > 0)

        @foreach($parentComments as $parentComment)
            <div class="row">
                <div class="col">
                    <div class="shadow p-3 mb-3 bg-white rounded border border-danger">

                        <div class="row border-bottom mb-3">
                            <div class="col text-left">
                                <p class="comment-head"><strong>Name :</strong> {{ $parentComment->user_name }}</p>
                            </div>
                            <div class="col text-right">
                                <p class="comment-head"><strong>Date added :</strong> {{ $parentComment->created_at }}
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col comment-text">{!! $parentComment->message !!}</div>
                        </div>

                        <div class="row">
                            <div class="col text-left pt-2">
                                <a href="{{ $parentComment->file }}" download>Attached file</a>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-success"
                                        onclick="window.location='/comment/create?parent_id={{ $parentComment->id }}&level=1'">
                                    Reply
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @foreach($childComments as $childComment)
                @if($childComment->parent_id === $parentComment->id)
                    <div class="row">
                        <div class="col">
                            <div class="shadow-sm pt-0 p-3 mb-3 bg-white rounded border border-success"
                                 style="margin-left: {{ $childComment->level * 4}}0px">

                                <div class="row border-bottom mb-3 comment-head">
                                    <div class="col text-left">
                                        <p><strong>Name :</strong> {{ $childComment->user_name }}</p>
                                    </div>
                                    <div class="col text-right">
                                        <p><strong>Date added :</strong> {{ $childComment->created_at }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col comment-text">{!! $childComment->message !!}</div>
                                </div>

                                <div class="row">
                                    <div class="col text-left pt-2">
                                        <a href="{{ $childComment->file }}" download>Attached file</a>
                                    </div>
                                    <div class="col text-right">
                                        <button type="button" id="btn-reply" class="btn btn-success"
                                                onclick="window.location='/comment/create?parent_id={{ $parentComment->id }}&level={{ $childComment->level + 1 }}'">
                                            Reply
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach

        {{ $parentComments->links('layouts.pagination') }}
    @else
        <div class="row">
            <div class="col text-center">
                <p class="alert alert-danger">Comments not found</p>
            </div>
        </div>
    @endif

@endsection