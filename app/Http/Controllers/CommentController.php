<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Services\FileManager;
use App\Services\Utility;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class CommentController
 * @package App\Http\Controllers
 */
class CommentController extends Controller
{
    private $fileService;

    public function __construct(FileManager $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $parentComments = Comment::where('parent_id', 0)->orderBy('created_at', 'DESC')->paginate(2);
        $parents_id = Comment::select('id')->where('parent_id', 0)->get()->toArray();
        $childComments = Comment::whereIn('parent_id', $parents_id)->get();

        return view('show', [
            'parentComments' => $parentComments,
            'childComments' => $childComments
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('create', [
            'parent_id' => $_GET['parent_id'] ?? null,
            'level' => $_GET['level'] ?? null
        ]);
    }

    /**
     * @param CommentRequest $request
     * @param FileManager $manager
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, FileManager $manager)
    {
        if ($request->ajax()) {
            $input = Utility::stripXSS($request->all());

            if ($_FILES['myFile']['type'] === 'text/plain') {
                $manager->moveFile($_FILES['myFile']['tmp_name']);
            } else {
                $manager->resizeImage($_FILES['myFile']['tmp_name']);
            }

            Comment::create([
                'user_name' => $input['userName'],
                'email' => $input['email'],
                'home_page' => $input['homePage'],
                'file' => $this->fileService->getPath(),
                'message' => $input['message'],
                'parent_id' => $input['parent_id'],
                'level' => $input['level'],
                'ip' => $_SERVER['REMOTE_ADDR'],
                'browser' => $_SERVER['HTTP_USER_AGENT']
            ]);
        } else {
            return response()->view('errors.403', [], 403);
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
