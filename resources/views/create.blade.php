@extends('layouts.header')

@section('title', 'Add comment')

@section('content')

    <form action="/comment/create">
        <div class="row justify-content-center">
            <div class="col-6 mb-4">
                <span class="required"></span> - обязательные поля
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="UserName">User name</label><span class="required"></span>
                    <input type="text" class="form-control" id="UserName" autofocus>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">E-mail</label><span class="required"></span>
                    <input type="email" class="form-control required" id="email" required>
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
                    <input type="text" class="form-control" id="HomePage">
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-6 load">
                <label for="basic-url">Your image or file</label><span class="required"></span>
                <img id="info" src="img/question.png" alt="question">
                <input id="input-id" type="file" class="file" data-preview-file-type="text">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="message">Message</label><span class="required"></span>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                    <p class="tag">[ i ]</p>
                    <p class="tag">[ strong ]</p>
                    <p class="tag">[ code ]</p>
                    <p class="tag">[ a ]</p>
                </div>
            </div>
        </div>

        <input type="submit">
    </form>
@endsection