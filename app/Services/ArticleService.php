<?php
namespace App\Services;
use Illuminate\Http\Request;
use Validator;

class  ArticleService implements \App\Interface\IArticleService
{
    public function create_posts(Request $request){
        $validator = Validator::make($request->all(),[
            "title"=>"required",
            "post"=>"required"
        ]);

        if($validator->fails()){
            throw new \App\Exceptions\CustomValidationException($validator);
        }

        return $request;
    }


    public function get_all_posts(){

    }


    public function update_posts(Request $request,$id){

    }


    public function delete_posts($id){

    }

    public  function update_view($postId)
    {

    }

}
