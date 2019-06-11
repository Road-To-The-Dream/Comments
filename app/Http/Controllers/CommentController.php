<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Services\FileManager;
use App\Services\Utility;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Comment::all();
        return view('all', ['comments' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, FileManager $manager)
    {
        if ($request->ajax()) {
            $input = Utility::stripXSS($request->all());

            $comment = new Comment();

            $comment->user_name = $input['userName'];
            $comment->email = $input['email'];
            $comment->home_page = $input['homePage'] ?? null;
            $comment->file = $manager->getPath();
            $comment->text = $input['message'];
            $comment->ip = $_SERVER['REMOTE_ADDR'];
            $comment->browser = $_SERVER["HTTP_USER_AGENT"];

            $comment->save();

            if ($_FILES['myFile']['type'] === 'text/plain') {
                $manager->moveFile($_FILES['myFile']['tmp_name']);
            } else {
                $manager->resizeImage($_FILES['myFile']['tmp_name']);
            }
        } else {
            return view('errors.403');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
