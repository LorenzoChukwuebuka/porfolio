<?php

namespace App\Repository;

use App\Interface\IArticleRepository;
use App\Models\Posts;

class ArticleRepository implements IArticleRepository
{

    public function __construct(Posts $articlesModel)
    {
        $this->articleModel = $articlesModel;
    }

    public function check_if_title_exists($title)
    {
        return $this->articleModel::where('title', $title)->first();
    }

    public function create_posts(object $data)
    {
        return $this->articleModel::create([
            "title" => $data->title,
            "post" => $data->post,
        ]);
    }

    public function get_all_posts()
    {
        return $this->articleModel::paginate(20)->latest();
    }

    public function update_posts(object $data, $id)
    {
        return $this->articleModel::find($id);
    }

    public function get_post_by_id($id)
    {
        return $this->articleModel::find($id);
    }

    public function delete_posts($id)
    {}

    public function update_view($postId)
    {
        $post = $this->articleModel::find($postId);

        $views = $post->number_of_views;

        $views++;

        $post->number_of_views = $views;

        $post->save();
    }
}
