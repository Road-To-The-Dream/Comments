@extends('layouts.header')

@section('title', 'View comment')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-6">
            <a href="/comment/create" class="btn-submit">Add comment</a>
        </div>
    </div>

    @for($i = 0; $i < 5; $i++)
        <ul>
            <li>
                <div class="row">
                    <div class="col">
                        <div class="shadow-none p-3 mb-2 bg-light rounded">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Architecto autem est harum maxime minus nam nihil perspiciatis quae quam voluptates? Accusantium ad
                            autem cum cupiditate debitis deserunt dolores ea exercitationem fuga fugit hic impedit itaque laborum
                            mollitia obcaecati officiis perspiciatis porro, quia ratione recusandae saepe similique tempora tempore
                            temporibus veritatis.
                        </div>
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
    @endfor

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