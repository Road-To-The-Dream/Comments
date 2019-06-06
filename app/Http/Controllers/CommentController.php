<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    private const USER_PATH = '/../resources/user_files/';
    private const DATETIME_FORMAT = 'H:i:s';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('errors.404');
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
    public function store(CommentRequest $request)
    {
        if ($request->ajax()) {
            $comment = new Comment();

            $comment->user_name = $request->get('userName');
            $comment->email = $request->get('email');
            $comment->home_page = $request->get('homePage') ?? null;
            $comment->file = $_FILES['myFile']['name'];
            $comment->text = $request->get('message');
            $comment->ip = $_SERVER['REMOTE_ADDR'];
            $comment->browser = $_SERVER["HTTP_USER_AGENT"];

            $comment->save();

            move_uploaded_file($_FILES['myFile']['tmp_name'], getcwd() . self::USER_PATH . date(self::DATETIME_FORMAT) . '-' . $_FILES['myFile']['name']);
        }

        return view('errors.403');
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
