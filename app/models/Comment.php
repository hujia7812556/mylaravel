<?php
/**
 * Created by PhpStorm.
 * User: jiahu
 * Date: 2014/9/22
 * Time: 11:20
 */

class Comment extends Eloquent
{

	protected $fillable = ['commenter', 'email', 'comment'];

	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function getApprovedAttribute($approved)
	{
		return (intval($approved) == 1) ? 'yes' : 'no';
	}

	public function setApprovedAttribute($approved)
	{
		$this->attributes['approved'] = ($approved === 'yes') ? 1 : 0;
	}

}
