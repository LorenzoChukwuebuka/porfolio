<?php
namespace App\Http\Controllers;

use App\Models\Posts;

class ArticleDetailsController extends Controller
{
    // In your controller
    public function show($id)
    {
        $article = Posts::findOrFail($id);

        // Generate the excerpt from the article's content
        $excerpt = $this->generateExcerpt($article->post);
  
        return view('articledetails', compact('article', 'excerpt'));
    }

    private function generateExcerpt($content, $wordLimit = 20)
    {
        // Remove HTML tags
        $content = strip_tags($content);

        // Split the content into an array of words
        $words = explode(' ', $content);

        // Limit the number of words
        $words = array_slice($words, 0, $wordLimit);

        // Reassemble the shortened content
        $shortenedContent = implode(' ', $words);

        // Add "..." to indicate more content
        return $shortenedContent . '...';
    }

}