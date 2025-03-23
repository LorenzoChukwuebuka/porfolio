<?php
namespace App\Services;

use App\Interface\IArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Validator;

class ArticleService implements \App\Interface\IArticleService
{

    public function __construct(IArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function create_posts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "title"       => "required",
            "post"        => "required",
            "articlefile" => "nullable|image|mimes:jpeg,png,jpg,webp|max:2048",
        ]);

        if ($validator->fails()) {
            throw new \App\Exceptions\CustomValidationException($validator);
        }

        // Check if title already exists
        $titleExists = $this->articleRepository->check_if_title_exists($request->title);
        if ($titleExists != null) {
            throw new \Exception("Title already exists");
        }

        // Handle File Upload if Exists
        $imagePath = null;
        if ($request->hasFile('file')) { // Fixed: Use 'articlefile' instead of 'file'
            $file = $request->file('file');

            // Read & Resize Image
            $image = Image::read($file)
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

            // Generate Unique Name & Store in Storage
            $imageName = 'articles/' . uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put(
                $imageName,
                $image->encodeByExtension($file->getClientOriginalExtension(), quality: 70) // Fixed encoding
            );

            $imagePath = Storage::url($imageName); // Ensure accessibility
        }

        return $this->articleRepository->create_posts([
            'title'         => $request->title,
            'post'          => $request->post,
            'article_image' => $imagePath, // Store accessible URL
        ]);
    }

    public function get_all_posts()
    {
        $result = $this->articleRepository->get_all_posts();

        if ($result->count() == 0) {
            throw new \Exception("no records found");
        }

        return $result;
    }

    public function update_posts(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     "title"       => "required",
        //     "post"        => "required",
        //     "articlefile" => "nullable|image|mimes:jpeg,png,jpg,webp|max:2048",
        // ]);

        // if ($validator->fails()) {
        //     throw new \App\Exceptions\CustomValidationException($validator);
        // }

        // Find the post
        $post = $this->articleRepository->get_post_by_id($id);
        if (! $post) {
            throw new \Exception("Post not found");
        }

                                           // Handle File Upload if Exists
        $imagePath = $post->article_image; // Keep existing image by default
        if ($request->hasFile('articlefile')) {
            $file = $request->file('articlefile');

            // Read & Resize Image
            $image = Image::read($file)
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

            // Generate Unique Name & Store in Storage
            $imageName = 'articles/' . uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put(
                $imageName,
                $image->encodeByExtension($file->getClientOriginalExtension(), quality: 70)
            );

            $imagePath = Storage::url($imageName);
        }

        // Update the post
        return $this->articleRepository->update_posts([
            'title'         => $request->title,
            'post'          => $request->post,
            'article_image' => $imagePath, // Store accessible URL
        ], $id);
    }

    public function get_post_by_id($id)
    {
        $result = $this->articleRepository->get_post_by_id($id);

        if ($result == null) {
            throw new \Exception("no records found");
        }

        return $result;
    }

    public function delete_posts($id)
    {
        return $this->articleRepository->delete_posts($id);
    }

    public function update_view($postId)
    {
        return $this->articleRepository->update_view($postId);
    }

}