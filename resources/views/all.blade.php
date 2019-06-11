@extends('layouts.header')

@section('title', 'View comment')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-6">
            <a href="/comment/create" class="btn-submit">Add comment</a>
        </div>
    </div>

    @foreach($comments as $comment)
        <ul>
            <li>
                <div class="row">
                    <div class="col">
                        <div class="shadow-none p-3 mb-2 bg-light rounded">{{ $comment->text }}</div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col text-right">
                                    <button type="button" class="btn btn-success">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    @endforeach

    <ul>
        <li>Комментарий первый</li>
        <li>
            <ul>
                <li>Комментарий третий</li>
                <li>Комментарий четвёртый</li>
            </ul>
        </li>
        <li>Комментарий второй</li>
        <li>
            <ul>
                <li>Комментарий третий</li>
                <li>Комментарий четвёртый</li>
            </ul>
        </li>
    </ul>

@endsection