<?php
namespace app;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model{
	protected $fillable = array('author', 'text');	
}
