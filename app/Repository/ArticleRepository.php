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

    public function get_all_posts(){
        return $this->articleModel::paginate(20);
    }

    public function update_posts(object $data, $id){
        return $this->articleModel::find($id);
    }

    public  function get_post_by_id($id)
    {
        return $this->articleModel::find($id);
    }

    public function delete_posts($id){}

    public function update_view($postId){}
}
