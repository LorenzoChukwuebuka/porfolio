<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface IArticleRepository
{
    public function create_posts(object $data);

    public function get_all_posts();

    public function update_posts(object $data, $id);

    public function delete_posts($id);

    public function update_view($postId);

}
