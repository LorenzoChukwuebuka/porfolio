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

    public function create_posts(array $data)
    {
        return $this->articleModel::create([
            "title"         => $data['title'],
            "post"          => $data['post'],
            "article_image" => $data['article_image'],
        ]);
    }

    public function get_all_posts()
    {
        return $this->articleModel::latest()->paginate(20);
    }

    public function update_posts(array $data, $id)
    {
        $post = $this->articleModel::findOrFail($id);

        // Update fields
        $post->update([
            "title"         => $data->title ?? $post->title,  
            "post"          => $data->post ?? $post->post, // Keep old post if not provided
            "article_image" => $data->article_image ?? $post->article_image, // Keep old image if not provided
        ]);

        return $post; // Return the updated post
    }

    public function get_post_by_id($id)
    {
        return $this->articleModel::find($id);
    }

    public function delete_posts($id)
    {
        return $this->articleModel::find($id)->delete();
    }

    public function update_view($postId)
    {
        $post = $this->articleModel::find($postId);

        $views = $post->number_of_views;

        $views++;

        $post->number_of_views = $views;

        $post->save();
    }
}