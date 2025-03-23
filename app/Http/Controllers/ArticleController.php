<?php
namespace App\Http\Controllers;

use App\Interface\IArticleService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

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
            $result = $this->articleService->create_posts($request);
            return $this->success("created post successfully", $result, 201);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function get_all_posts()
    {
        try {
            $result = $this->articleService->get_all_posts();
            return $this->success("all posts retrieved", $result, 200);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function get_post_by_id($id)
    {
        try {
            $result = $this->articleService->get_post_by_id($id);
            return $this->success("post retrieved", $result, 200);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function update_posts(Request $request, $id)
    {
        try {
            $result = $this->articleService->update_posts($request, $id);
            return $this->success("post updated", $result, 200);
        } catch (\Throwable $e) {
            return $this->fail($th->getMessage());
        }
    }

    public function delete_posts($id)
    {
        try {
            $result = $this->articleService->delete_posts($id);
            return $this->success("post deleted", $result, 200);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    public function update_view($postId, Request $request)
    {
        try {
            $result = $this->articleService->update_view($postId);
            return $this->success("views updated", $result, 200);
        } catch (\Throwable $e) {
            return $this->fail($th->getMessage());
        }
    }

}