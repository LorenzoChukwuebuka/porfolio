<?php
namespace App\Services;
use App\Interface\IArticleRepository;
use Illuminate\Http\Request;
use Validator;

class  ArticleService implements \App\Interface\IArticleService
{

    public  function __construct(IArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
    public function create_posts(Request $request){
        $validator = Validator::make($request->all(),[
            "title"=>"required",
            "post"=>"required"
        ]);

        if($validator->fails()){
            throw new \App\Exceptions\CustomValidationException($validator);
        }

        #check if title already exists

        $titleExists = $this->articleRepository->check_if_title_exists($request->title);

        if($titleExists != null){
            throw  new \Exception("Title already exists");
        }

        return $this->articleRepository->create_posts((object)$request->all());
    }


    public function get_all_posts(){
          $result = $this->articleRepository->get_all_posts();

          if($result->count()  == 0){
              throw new \Exception("no records found");
          }

          return $result;
    }


    public function update_posts(Request $request,$id){

    }

    public  function get_post_by_id($id)
    {
        $result = $this->articleRepository->get_post_by_id($id);

        if($result == null){
            throw new \Exception("no records found");
        }

        return $result;
    }


    public function delete_posts($id){

    }

    public  function update_view($postId)
    {

    }

}
