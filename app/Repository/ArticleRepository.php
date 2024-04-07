<?php

namespace App\Repository;

use App\Interface\IArticleRepository;
use App\Models\Posts;


class ArticleRepository implements  IArticleRepository {

    public function __construct(Posts $articlesModel){
        $this->articleModel = $articlesModel;
    }
    public function create_posts(object $data){
        return $this->articleModel::create([
            "title"=>$data->title,
            "post"=>$data->post
        ]);
    }

    public function get_all_posts(){}

    public function update_posts(object $data, $id){}

    public function delete_posts($id){}

    public function update_view($postId){}
}
