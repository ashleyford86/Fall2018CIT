<?php

class HomeController extends Controller{

	public function index(){
		$feed = "http://rss.cnn.com/rss/edition.rss";
		$rss = new RssDisplay($feed);

		$post = "";
			 $feed_data = $rss->getFeedItems(8);
			 $channel = $rss->getChannelInfo();
			 $feed_title = $channel->title;
			 $this->set('title',$feed_title);



			 foreach($feed_data as $value) {
					 $date = strtotime($value->pubDate);
					 $date =  date("l, F j, Y ",$date);
				 $post.= '<h4><a href="'.$value->link.'">'.$value -> title.'</h4></a><h5> '.$value->description.'<p>--'.$date.'<p></p></h5><hr/>';

				 }
	 $this->set('feed_data',$post);

 }
}
?>
