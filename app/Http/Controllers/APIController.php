<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\NewsAPI;

class APIController extends Controller {
    protected $newsAPI;
    protected $sources = ['new-york-magazine', 'cbs-news'];

    public function __construct(NewsAPI $newsAPI)
    {
        $this->newsAPI = $newsAPI;
    }

    protected function getArticles() {
        $params = [
            'sources' => $this->sources[0],
            'pageSize' => 100
        ];
        return array_values(array_filter($this->newsAPI->everything($params), function ($article) {
            return strlen($article['title']) < 50;
        }));
    }

//    protected function getTopThumbnailArticles() {
//        $params = [
//            'sources' => 'cbs-news',
//            'language' => 'en',
//            'pageSize' => 100,
//            'q' => 'book'
//        ];
//        return array_slice(array_filter($this->newsAPI->everything($params), function ($article) {
//            return strlen($article['title']) < 50;
//        }), 0, 4);
//    }
//    protected function getOwlCarouselArticles() {
//        $params = [
//            'sources' => 'ars-technica',
//            'pageSize' => 100
//        ];
//        return array_slice(array_filter($this->newsAPI->everything($params), function ($article) {
//            return strlen($article['title']) < 50;
//        }), 0, 4);
//    }
//    protected function getTopSideBarArticles() {
//        $params = [
//            'sources' => 'entertainment-weekly',
//            'pageSize' => 100
//        ];
//        return array_slice(array_filter($this->newsAPI->everything($params), function($article) {
//            return strlen($article['title']) < 50 && strlen($article['author']) < 20;
//        }), 0, 6);
//    }

    public function home() {
        $articles = $this->getArticles();

//        $topThumbnailArticles = $this->getTopThumbnailArticles();
//        $owlCarouselArticles = $this->getOwlCarouselArticles();
//        $topSideBarArticles = $this->getTopSideBarArticles();

        $topThumbnailArticles = array_slice($articles, 0, 4);
        $owlCarouselArticles = array_slice($articles, 4, 4);
        $topSideBarArticles = array_slice($articles, 8, 6);
        return view('home', compact('topThumbnailArticles', 'owlCarouselArticles', 'topSideBarArticles'));
    }
}
