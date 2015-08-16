<?php

class ArticlesController extends \BaseController {

	/**
	 * Display a listing of articles
	 *
	 * @return Response
	 */
	public function getindex()
	{
		$articles = Article::with('user')->get();

		return View::make('articles.index', compact('articles'));
	}
	public function getpost($id)
	{
		$article = Article::with('user')->find($id);

		return View::make('articles.post', compact('article'));
	}

	

}
