<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'application';

	public function index()
	{
		$this->layout->content = View::make('home.index');

		/**
		* Get set of tweets for 1DA - Start here
		**/



		function twitterify($ret) {
		  $ret = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
		  $ret = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
		  $ret = preg_replace("/@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\">@\\1</a>", $ret);
		  $ret = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=\\1\" target=\"_blank\">#\\1</a>", $ret);
		return $ret;
		}

		function last_tweet() {
		  $tweet = get_auth_tweet();
		  $twitted = twitterify($tweet[0]->text);
		  var_dump($twitted);

		  // if (is_array($tweet) && count($tweet) > 0) {
		  //   echo '<div class="tweet">'. twitterify($tweet[0]->text) . '</div>';
		  // } else {
		  //   echo "Error fetching tweet.";
		  // }
		}

		function get_auth_tweet(){

		  $settings = array(
		      'oauth_access_token' => "82941585-NkHlku77WXvYMKpanRho0RLFkNjhzQPjnLCbGW2Mr",
		      'oauth_access_token_secret' => "Uqi6VqnPFhCzN68RNL7CITxrDSA7ua4fruX1ftU9FDb3U",
		      'consumer_key' => "ci9gvvw0yzWqArVqBJqJUBpua",
		      'consumer_secret' => "LORhKJ2K34jHeNnlaXCT1bETIBimT2w77DZWfaJrX6oR1gJGiI"
		  );

		  $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
		  $getfield = '?screen_name=studiocantina&count=1&include_rts=false';
		  $requestMethod = 'GET';
		  $twitter = new TwitterAPIExchange($settings);

		  $data = $twitter->setGetfield($getfield)
		               ->buildOauth($url, $requestMethod)
		               ->performRequest();

			$response = json_decode($data);
		   //var_dump(json_decode($data));
			echo '
				<article class="tweet">
						<div id="tweet-slider">';
			if (!empty($response)) :
		                    foreach ($response as $tweet) :
		                    echo '<div class="twitter_text col-2-3"><div class="inner">';
		                    echo '<div class="quote-left"></div>'; 
		                        $datetime = $tweet->created_at;
		                        $date = date('M d, Y', strtotime($datetime));
		                        $time = date('g:ia', strtotime($datetime));
		                        $tweet_text = $tweet->text;

		                        // check if any entites exist and if so, replace then with hyperlinked versions

		                            foreach ($tweet->entities->urls as $url) {
		                                $find = $url->url;
		                                $replace = '<a href="'.$find.'">'.$find.'</a>';
		                                $tweet_text = str_replace($find,$replace,$tweet_text);
		                            }

		                            foreach ($tweet->entities->hashtags as $hashtag) {
		                                $find = '#'.$hashtag->text;
		                                $replace = '<a href="http://twitter.com/#!/search/%23'.$hashtag->text.'">'.$find.'</a>';
		                                $tweet_text = str_replace($find,$replace,$tweet_text);
		                            }

		                            foreach ($tweet->entities->user_mentions as $user_mention) {
		                                $find = "@".$user_mention->screen_name;
		                                $replace = '<a href="http://twitter.com/'.$user_mention->screen_name.'">'.$find.'</a>';
		                                $tweet_text = str_ireplace($find,$replace,$tweet_text);
		                            }
		                            //{$tweet->user->name}

		                  echo '<h4 class="user"><a href="https://twitter.com/intent/user?screen_name='."{$tweet->user->screen_name}".'" target="_blank">
						@'."{$tweet->user->screen_name} ".'					
						</a></h4>';
		                  echo '<h2>'.$tweet_text.'<br><br><time class="timeago" datetime="'. $datetime .'"></time></h2>';
		                  echo '<a class="icon icon_reply" href="https://twitter.com/intent/tweet?in_reply_to='."{$tweet->id}".'" target="_blank"></a> <a class="icon icon_retweet" href="https://twitter.com/intent/retweet?tweet_id='."{$tweet->id}".'" target="_blank"></a> <a class="icon icon_star" href="https://twitter.com/intent/favorite?tweet_id='."{$tweet->id}".'" target="_blank"></a>';
		                  echo '</strong>';
		                  echo '<div class="quote-right"></div>';
		                  echo' </div></div>';
		                   endforeach; 
		                endif;
		                echo' </div>
				</article> ';
		}

	}

}
