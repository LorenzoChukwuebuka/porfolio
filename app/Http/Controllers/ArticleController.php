<?php

namespace App\Http\Controllers;

use App\Interface\IArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(IArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function create_posts(Request $request)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function get_all_posts()
    {

    }

    public function update_posts(Request $request, $id)
    {
        try {

        } catch (\Throwable $e) {

        }
    }

    public function delete_posts($id)
    {}

    public function update_view($postId, Request $request)
    {

    }

}
