<?php

namespace App\Http\Controllers;

use App\Interface\IArticleService;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class ArticleController extends Controller
{

    use ApiResponse;
    public function __construct(IArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function create_posts(Request $request)
    {
        try {
          $result =  $this->articleService->create_posts($request);
          return $this->success("created post successfully",$result,201);
        } catch (\Throwable $th) {
            return  $this->fail($th->getMessage());
        }
    }

    public function get_all_posts()
    {
        try {
         $result = $this->articleService->get_all_posts();
         return $this->success("all posts retrieved",$result,200);
        }catch (\Throwable $th){
            return  $this->fail($th->getMessage());
        }
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
