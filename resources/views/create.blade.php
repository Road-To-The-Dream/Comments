@extends('layouts.header')

@section('title', 'Add comment')

@section('content')

    <div class="row justify-content-center">
        <div class="col-6">
            <span class="required"></span> - обязательные поля
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6 mb-4">
            <div class="request"></div>
        </div>
    </div>

    <form id="comment_form" action="/comment" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="userName">User name</label><span class="required"></span>
                    <input type="text" class="form-control" id="userName" name="userName" value="{{ old('userName') }}" required autofocus>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">E-mail</label><span class="required"></span>
                    <input type="email" class="form-control required" id="email" name="email" value="{{ old('email') }}" required>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <label for="basic-url">Home page</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">https://</span>
                    </div>
                    <input type="text" name="homePage" class="form-control" id="homePage">
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-6 load">
                <label for="basic-url">Your image or file</label><span class="required"></span>
                <img id="info" src="/img/question.png" alt="question">
                <input id="input-id" name="myFile" type="file" class="file" data-preview-file-type="text" required>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="message">Message</label><span class="required"></span>
                    <textarea class="form-control" id="message" name="message" rows="5"required></textarea>
                    <p class="tag">[ i ]</p>
                    <p class="tag">[ strong ]</p>
                    <p class="tag">[ code ]</p>
                    <p class="tag">[ a ]</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-6 text-right">
                <button type="submit" class="btn-submit">Add comment</button>
            </div>
        </div>
    </form>

@endsection