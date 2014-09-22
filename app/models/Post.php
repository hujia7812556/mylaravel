<?php
/**
 * Created by PhpStorm.
 * User: jiahu
 * Date: 2014/9/22
 * Time: 11:18
 */
class Post extends Eloquent
{

	protected $fillable = ['title', 'content'];

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function delete()
	{
		foreach ($this->comments as $comment) {
			$comment->delete();
		}
		return parent::delete();
	}

}