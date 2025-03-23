<?php

namespace App\Interface;

use Illuminate\Http\Request;

interface IArticleRepository
{
    public function create_posts(array $data);

    public function get_all_posts();

    public function update_posts(array $data, $id);

    public  function get_post_by_id($id);

    public function delete_posts($id);

    public function update_view($postId);

    public function check_if_title_exists($title);

}