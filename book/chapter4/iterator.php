<?php 


/**
*  Iterator pattern Style. Now code is more readable and maintainable
*/
class Posts implements Iterator 
{
	private $posts = array();

	public function __construct($posts)
	{
		if (is_array($posts)) {
			$this->posts = $posts; 
		}
	}

	public function rewind(){
		reset($this->posts);
	}

	public function current(){
		return current($this->posts);
	}

	public function key(){
		return key($this->var);
	}

	public function next(){
		return next($this->var);
	}
	public function valid(){
		return ($this->current() !==false);
	}
}


$blogposts = getAllPosts();
$posts = new Posts($posts);

foreach ($posts as $posts) {
	echo $post-> getTitle();
	echo $post-> getAuthor();
	echo $post-> getDate();
	echo $post-> getContent();

	$comment = new Comments($posts->getComments());

	foreach ($comments as $comment) {
		echo $comment->getAuthor();
		echo $comment->getContent();
	}
}