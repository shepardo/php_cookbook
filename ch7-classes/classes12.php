<?php
/*
7.12 Calling Methods on an Object Returned by Another
Method
Problem
You need to call a method on an object returned by another method.
*/

/*
$orange = $fruit->get('citrus')->peel();


$tweet = new Tweet;
$tweet->from('@rasmus')
  ->withStatus('PHP 6 released! #php')
  ->send();
*/
class Tweet {
  protected $data;
  public function __construct() {
    $this->data = [];
  }

  public function from($from) {
    $this->data['from'] = $from;
    return $this;
  }

  public function withStatus($status) {
    $this->data['status'] = $status;
    return $this;
  }
  public function inReplyToId($id) {
    $this->data['id'] = $id;
    return $this;
  }
  public function send() {
    // Generate Twitter API request using info in $data
    // POST https://api.twitter.com/1.1/statuses/update.json
    // with http_build_query($data)
    return $this->data['id'];
  }
}

$tweet = new Tweet;
/*$id = $tweet->from('@rasmus')
  ->withStatus('PHP 6 released! #php')
  ->send();*/
$id = "myid";
$reply = new Tweet;
$id2 = $reply->withStatus('I <3 Unicode!')
  ->from('@a')
  ->inReplyToId($id)
  ->send();
print $id2 . "\n";

?>