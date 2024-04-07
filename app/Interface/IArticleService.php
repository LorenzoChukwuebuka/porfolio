<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface IArticleService
{
    public function create_posts(Request $request);

    public function get_all_posts();

    public function update_posts(Request $request, $id);

    public function delete_posts($id);

    public function update_view($postId);

}