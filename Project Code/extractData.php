<?php
set_time_limit(0);
$fileName  = "xxx.csv";
$queueFile = "C:/Users/Rohan/Desktop/fall2014 courses/kyumin lee/project/tweets14.csv";
$lines     = '{"created_at":"Sat Sep 27 17:30:16 +0000 2014","id":515916342692958208,"id_str":"515916342692958208","text":"RT @NoticiasRCN: Estados Unidos \"est\u00e1 liderando al mundo\" en las actuales crisis internacionales: @BarackObama. http:\/\/t.co\/DXCnBXGtau","source":"\u003ca href=\"http:\/\/twitter.com\" rel=\"nofollow\"\u003eTwitter Web Client\u003c\/a\u003e","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"user":{"id":2787539758,"id_str":"2787539758","name":"\u0421\u0442\u0430\u043d\u0438\u0441\u043b\u0430\u0432 \u0429\u0443\u043a\u0438\u043d","screen_name":"stschukin1994","location":"","url":null,"description":null,"protected":false,"verified":false,"followers_count":0,"friends_count":8,"listed_count":0,"favourites_count":0,"statuses_count":8,"created_at":"Sat Sep 27 17:28:44 +0000 2014","utc_offset":null,"time_zone":null,"geo_enabled":false,"lang":"en","contributors_enabled":false,"is_translator":false,"profile_background_color":"C0DEED","profile_background_image_url":"http:\/\/abs.twimg.com\/images\/themes\/theme1\/bg.png","profile_background_image_url_https":"https:\/\/abs.twimg.com\/images\/themes\/theme1\/bg.png","profile_background_tile":false,"profile_link_color":"0084B4","profile_sidebar_border_color":"C0DEED","profile_sidebar_fill_color":"DDEEF6","profile_text_color":"333333","profile_use_background_image":true,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/515916009694175233\/O85xxR3q_normal.jpeg","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/515916009694175233\/O85xxR3q_normal.jpeg","default_profile":true,"default_profile_image":false,"following":null,"follow_request_sent":null,"notifications":null},"geo":null,"coordinates":null,"place":null,"contributors":null,"retweeted_status":{"created_at":"Sat Sep 27 16:39:39 +0000 2014","id":515903606034558978,"id_str":"515903606034558978","text":"Estados Unidos \"est\u00e1 liderando al mundo\" en las actuales crisis internacionales: @BarackObama. http:\/\/t.co\/DXCnBXGtau","source":"\u003ca href=\"https:\/\/about.twitter.com\/products\/tweetdeck\" rel=\"nofollow\"\u003eTweetDeck\u003c\/a\u003e","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"user":{"id":35013719,"id_str":"35013719","name":"Noticias RCN","screen_name":"NoticiasRCN","location":"Colombia","url":"http:\/\/www.noticiasrcn.com\/","description":"L\u00edder en noticias. L\u00edder en opini\u00f3n.","protected":false,"verified":true,"followers_count":4187010,"friends_count":620,"listed_count":16511,"favourites_count":7,"statuses_count":163455,"created_at":"Fri Apr 24 19:28:30 +0000 2009","utc_offset":-18000,"time_zone":"Bogota","geo_enabled":false,"lang":"es","contributors_enabled":false,"is_translator":false,"profile_background_color":"001D6B","profile_background_image_url":"http:\/\/pbs.twimg.com\/profile_background_images\/443472371865751552\/QsXHdrN_.png","profile_background_image_url_https":"https:\/\/pbs.twimg.com\/profile_background_images\/443472371865751552\/QsXHdrN_.png","profile_background_tile":false,"profile_link_color":"990000","profile_sidebar_border_color":"FFFFFF","profile_sidebar_fill_color":"FFFFFF","profile_text_color":"333333","profile_use_background_image":true,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/486326742965948416\/5JJrpQO1_normal.png","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/486326742965948416\/5JJrpQO1_normal.png","profile_banner_url":"https:\/\/pbs.twimg.com\/profile_banners\/35013719\/1402929199","default_profile":false,"default_profile_image":false,"following":null,"follow_request_sent":null,"notifications":null},"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":6,"favorite_count":2,"entities":{"hashtags":[],"trends":[],"urls":[{"url":"http:\/\/t.co\/DXCnBXGtau","expanded_url":"http:\/\/bit.ly\/1mBmSo2","display_url":"bit.ly\/1mBmSo2","indices":[95,117]}],"user_mentions":[{"screen_name":"BarackObama","name":"Barack Obama","id":813286,"id_str":"813286","indices":[81,93]}],"symbols":[]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"filter_level":"low","lang":"es"},"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"trends":[],"urls":[{"url":"http:\/\/t.co\/DXCnBXGtau","expanded_url":"http:\/\/bit.ly\/1mBmSo2","display_url":"bit.ly\/1mBmSo2","indices":[112,134]}],"user_mentions":[{"screen_name":"NoticiasRCN","name":"Noticias RCN","id":35013719,"id_str":"35013719","indices":[3,15]},{"screen_name":"BarackObama","name":"Barack Obama","id":813286,"id_str":"813286","indices":[98,110]}],"symbols":[]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"filter_level":"medium","lang":"es","timestamp_ms":"1411839016047"}';

$host     = 'localhost';
$dbuser   = 'root';
$password = 'DJEZb3xTRyPvM9Y9';
$db       = 'miningproject3';

$connection = mysqli_connect($host, $dbuser, $password, $db);
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//file_get_contents($myFile);
/*$jsonIterator = new RecursiveIteratorIterator(
new RecursiveArrayIterator(json_decode($lines, TRUE)),
RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
if(is_array($val)) {
echo PHP_EOL."$key:<br />";
} else { 
echo PHP_EOL."$key => $val<br />";
}

}

$lines = file_get_contents($myFile);
$handle = fopen($myFile, 'r');
$phpAray = json_decode($lines, TRUE);
//echo $phpAray;
$contents = fread($handle, 1024);
//print $contents;
*/







//for tweets table
$tweetId;
$createdAt;
$text;
$generatedBy;
$retweetid;
$retweetCount;
$favCount;

//for users
$name;
$screenName;
$location;
$description;
$followersCount;
$friendsCount;
$statusesCount;
$accntCreatedAt;
$utcOffset;
$timeZone;
$language;
$following;

//for retweeted status
$RTcreatedAt;

//for usermentions
$UMtweetId;
$UMfromId;
$UMtoId;

echo 'Processing file: ' . $queueFile;

// Open file
$fp = fopen($queueFile, 'r');

// Check if something has gone wrong, or perhaps the file is just locked by another process
if (!is_resource($fp))
  {
    echo 'WARN: Unable to open file or file already open: ' . $queueFile . ' - Skipping.';
    return FALSE;
  }

// Lock file
flock($fp, LOCK_EX);

// Loop over each line (1 line per status)
$statusCounter = 0;
while ($rawStatus = fgets($fp, 8192))
  {
    $statusCounter++;
    /** **************** NOTE ********************
     * This is the part where you would normally do your processing. If you're extracting/trending information 
     * about the tweets it should happen here, where it doesn't matter so much if things are slow (you will
     * catch up on the next loop).
     */
    // $data = json_decode(base64_decode($rawStatus), true);
    //print "status counter implemented";
    $data = json_decode($rawStatus, true);
    
    
    if (is_array($data) && isset($data['user']['screen_name']))
      {
        $tweetId      = mysqli_real_escape_string($connection, $data['id_str']);
        $createdAt    = convertTimestamp(mysqli_real_escape_string($connection, $data['created_at']));
        $text         = mysqli_real_escape_string($connection, $data['text']);
        $generatedBy  = mysqli_real_escape_string($connection, $data['user']['id']);
        $retweetCount = mysqli_real_escape_string($connection, $data['retweet_count']);
        if (!empty($data['retweeted_status']['id_str']))
            {
            	$retweetid = mysqli_real_escape_string($connection, $data['retweeted_status']['id_str']);
				$generatedBy  = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['id']);
            }
        else
            $retweetid = "";
        
        $favCount = mysqli_real_escape_string($connection, $data['favorite_count']);
        
        $name           = mysqli_real_escape_string($connection, $data['user']['name']);
        $twituserid     = mysqli_real_escape_string($connection, $data['user']['id']);
        $screenName     = mysqli_real_escape_string($connection, $data['user']['screen_name']);
        $location       = mysqli_real_escape_string($connection, $data['user']['location']);
        $description    = mysqli_real_escape_string($connection, $data['user']['description']);
        $followersCount = mysqli_real_escape_string($connection, $data['user']['followers_count']);
        $friendsCount   = mysqli_real_escape_string($connection, $data['user']['friends_count']);
        $statusesCount  = mysqli_real_escape_string($connection, $data['user']['statuses_count']);
        $accntCreatedAt = convertTimestamp(mysqli_real_escape_string($connection, $data['user']['created_at']));
        $utcOffset      = mysqli_real_escape_string($connection, $data['user']['utc_offset']);
        $timeZone       = mysqli_real_escape_string($connection, $data['user']['time_zone']);
        $language       = mysqli_real_escape_string($connection, $data['user']['lang']);
        $following      = mysqli_real_escape_string($connection, $data['user']['following']);
        
        $UMtweetId = mysqli_real_escape_string($connection, $data['id_str']);
        
        $UMfromId = mysqli_real_escape_string($connection, $data['user']['id']);
        $UMtoId   = mysqli_real_escape_string($connection, $data['in_reply_to_user_id']);
        
        //$this->log('Decoded tweet: ' . $data['user']['screen_name'] . ': ' . urldecode($data['text']));
        print $data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n<br/>";
        
        //print $tweetId."\n<br/>";
        //print $data['text']."\n\n<br/>";
        $key = 'retweeted_status';
        if (array_key_exists($key, $data))
          {
            echo "inserting user 142<br/>";
            $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $data['retweeted_status']['user']['id'];
            $resultuserexists = mysqli_query($connection, $checkuserexists);
            print $checkuserexists . "<br/>";
            if ($resultuserexists)
              {
                echo "inserting user 148<br/>";
                $rowcnt = mysqli_num_rows($resultuserexists);
				print "row count = ".$rowcnt;
                if ($rowcnt == 0)
                  {
                    echo "user not found so inserting 152<br/>";
                    $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $twituserid . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                    $resultinsertuser = mysqli_query($connection, $insertuser);
                    //print $insertuser."<br/>";
                    if ($resultinsertuser)
                      {
                        echo "new user inserted 158<br/>";
                      }
                    else
                      {
                        echo "new user not inserted 162" . mysqli_error($connection) . "<br/>";
                      }
                  }
                
                
                echo "inserting tweets 167<br/>";
                $querytweet  = "INSERT INTO tweets (tweetid, createdat, text, generatedby, retweetcount, favcount, retweetid) VALUES ('" . mysql_real_escape_string($tweetId) . "','" . $createdAt . "', '" . $text . "', '" . $generatedBy . "', '" . $retweetCount . "', '" . $favCount . "', '" . $retweetid . "')";
                echo $querytweet."<br/>";
                $resulttweet = mysqli_query($connection, $querytweet);
                if (!$resulttweet)
                    echo "tweets not inserted 171" . mysqli_error($connection) . "<br/>";
                else
                  {
                    echo "tweet inserted successfully 174<br/>";
                  }
                
                if (!$UMtoId == "" && !empty($UMtoId))
                  {
                    $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $UMtoId;
                    $resultuserexists = mysqli_query($connection, $checkuserexists);
                    //print $resultuserexists . " 208<br/>";
                    if ($resultuserexists)
                      {
                        echo "inserting user 188<br/>";
                        $rowcnt = mysqli_num_rows($resultuserexists);
                        echo "213 row count = " . $rowcnt;
                        if ($rowcnt == 0)
                          {
                            echo "no user found hence inserting 193<br/>";
                            $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $UMtoId . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                            $resultinsertuser = mysqli_query($connection, $insertuser);
                            print $resultinsertuser . "<br/>";
                            if ($resultinsertuser)
                                echo "new user inserted 221";
                            else
                                echo "223 user inserting FAILED" . " with error " . mysqli_error($connection);
                          }
                      }
                    if ($resulttweet)
                      {
                        echo "inserting user mention 181";
                        $insertusermention = "INSERT INTO mentions(tweetid, fromid, toid) VALUES '" . mysql_real_escape_string($UMtweetId) . "','" . $UMfromId . "', '" . $UMtoId . "')";
                        $resultmention     = mysqli_query($connection, $insertusermention);
                        //print $insertusermention."<br/>";
                        if ($resultmention)
                            echo "mention inserted 186<br/>";
                        else
                            echo "mention inserting FAILED 188" . " with error " . mysqli_error($connection);
                      }
                    
                    
                  }
                else
                    echo "no mentions";
                
                
              }
            
            //print $querytweet."<br/>";
            
            
          }
        else
          {
            print "inserting in else 205";
            $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $data['user']['id'];
            $resultuserexists = mysqli_query($connection, $checkuserexists);
            //print $resultuserexists . " 208<br/>";
            if ($resultuserexists)
              {
                echo "inserting user 211<br/>";
                $rowcnt = mysqli_num_rows($resultuserexists);
                echo "213 row count = " . $rowcnt;
                if ($rowcnt == 0)
                  {
                    echo "no user found hence inserting 216<br/>";
                    $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $twituserid . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                    $resultinsertuser = mysqli_query($connection, $insertuser);
                    print $resultinsertuser . "<br/>";
                    if ($resultinsertuser)
                        echo "new user inserted 221";
                    else
                        echo "223 user inserting FAILED" . " with error " . mysqli_error($connection);
                  }
              }
            
            
            //print $querytweet."<br/>";
            
            echo "inserting tweet 230<br/>";
            $querytweet  = "INSERT INTO tweets (tweetid, createdat, text, generatedby, retweetcount, favcount) VALUES ('" . $tweetId . "','" . $createdAt . "', '" . $text . "', '" . $generatedBy . "', '" . $retweetCount . "', '" . $favCount . "')";
            $resulttweet = mysqli_query($connection, $querytweet);
            if (!$UMtoId == "" && !empty($UMtoId) && $resulttweet)
              {
                $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $UMtoId;
                $resultuserexists = mysqli_query($connection, $checkuserexists);
                //print $resultuserexists . " 208<br/>";
                if ($resultuserexists)
                  {
                    echo "inserting user 211<br/>";
                    $rowcnt = mysqli_num_rows($resultuserexists);
                    echo "246 row count = " . $rowcnt;
                    if ($rowcnt == 0)
                      {
                        echo "no user found hence inserting 249<br/>";
                        $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $UMtoId . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                        $resultinsertuser = mysqli_query($connection, $insertuser);
                        print $resultinsertuser . "<br/>";
                        if ($resultinsertuser)
                            echo "new user inserted 221";
                        else
                            echo "223 user inserting FAILED" . " with error " . mysqli_error($connection);
                      }
                  }
                echo "inserting mentions<br/>";
                $insertusermention = "INSERT INTO mentions(tweetid, fromid, toid) VALUES ('" . $UMtweetId . "','" . $UMfromId . "', '" . $UMtoId . "')";
                $resultmention     = mysqli_query($connection, $insertusermention);
                //print $insertusermention."<br/>";
                if ($resultmention)
                    echo "mention inserted 240";
                else
                    echo "242 mention inserting FAILED" . " with error " . mysqli_error($connection);
              }
            
          }
        // Perform Query
        //$result = mysql_query($query);
        
        // Check result
        // This shows the actual query sent to MySQL, and the error. Useful for debugging.
        /*if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        print $message."\n";
        }
        
        */
        //undefined index: retweeted status
        // If this is a retweet, load the tweet that was retweeted
        if (array_key_exists($key, $data))
          {
            print "This is a retweet!";
            $tweetId      = mysqli_real_escape_string($connection, $data['retweeted_status']['id_str']);
            $createdAt    = convertTimestamp(mysqli_real_escape_string($connection, $data['retweeted_status']['created_at']));
            $text         = mysqli_real_escape_string($connection, $data['retweeted_status']['text']);
            $generatedBy  = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['id']);
            $retweetCount = mysqli_real_escape_string($connection, $data['retweeted_status']['retweet_count']);
            $retweetid    = mysqli_real_escape_string($connection, $data['retweeted_status']['id_str']);
            $favCount     = mysqli_real_escape_string($connection, $data['retweeted_status']['favorite_count']);
            
            $name           = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['name']);
            $twituserid     = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['id']);
            $screenName     = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['screen_name']);
            $location       = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['location']);
            $description    = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['description']);
            $followersCount = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['followers_count']);
            $friendsCount   = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['friends_count']);
            $statusesCount  = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['statuses_count']);
            $accntCreatedAt = convertTimestamp(mysqli_real_escape_string($connection, $data['retweeted_status']['user']['created_at']));
            $utcOffset      = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['utc_offset']);
            $timeZone       = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['time_zone']);
            $language       = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['lang']);
            $following      = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['following']);
            
            $UMtweetId = mysqli_real_escape_string($connection, $data['retweeted_status']['id_str']);
            ;
            $UMfromId = mysqli_real_escape_string($connection, $data['retweeted_status']['user']['id']);
            $UMtoId   = mysqli_real_escape_string($connection, $data['retweeted_status']['in_reply_to_user_id']);
            
            
            echo "inserting user 291<br/>";
            $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $data['user']['id'] . " or twituserid = " . $data['retweeted_status']['user']['id'];
            $resultuserexists = mysqli_query($connection, $checkuserexists);
            //print $checkuserexists."<br/>";
            if ($resultuserexists)
              {
                echo "297 checking user count<br/>";
                $rowcnt = mysqli_num_rows($resultuserexists);
                echo "row count in 296 " . $rowcnt . "<br/>";
                /*while ($d = mysqli_fetch_array($resultuserexists)) 
                {
                echo "the data is ".$d."<br/>";
                }*/
                if ($rowcnt == 0)
                  {
                    echo "no user found hence inserting 306<br/>";
                    $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $twituserid . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                    $resultinsertuser = mysqli_query($connection, $insertuser);
                    print $insertuser . "<br/>";
                    if ($resultinsertuser)
                      {
                        echo "new user inserted 312";
                      }
                    else
                      {
                        echo "316 new user not inserted error is " . mysqli_error($connection) . "<br/>";
                      }
                    
                    echo "inserting tweet 319<br/>";
                    $querytweet  = "INSERT INTO tweets (tweetid, createdat, text, generatedby, retweetcount, favcount) VALUES ('" . $tweetId . "','" . $createdAt . "', '" . $text . "', '" . $generatedBy . "', '" . $retweetCount . "', '" . $favCount . "')";
                    $resulttweet = mysqli_query($connection, $querytweet);
                    //print $querytweet."<br/>";
                    if (!$resulttweet)
                        echo "324 tweets not inserted " . mysqli_error($connection);
                    else
                        echo "326 tweet inserted succesfully<br/>";
                    if (!$UMtoId == "" && !empty($UMtoId))
                      {
                        $checkuserexists  = "SELECT twituserid FROM user WHERE twituserid = " . $UMtoId;
                        $resultuserexists = mysqli_query($connection, $checkuserexists);
                        //print $resultuserexists . " 208<br/>";
                        if ($resultuserexists)
                          {
                            echo "inserting user 378<br/>";
                            $rowcnt = mysqli_num_rows($resultuserexists);
                            echo "380 row count = " . $rowcnt;
                            if ($rowcnt == 0)
                              {
                                echo "no user found hence inserting 383<br/>";
                                $insertuser       = "INSERT INTO user(twituserid, name, screenname, location, description, followercount, friendcount, statusescount, createdat, utcoffset, timezone, lang, following) VALUES ('" . $UMtoId . "','" . $name . "','" . $screenName . "','" . $location . "','" . $description . "','" . $followersCount . "','" . $friendsCount . "','" . $statusesCount . "','" . $accntCreatedAt . "','" . $utcOffset . "','" . $timeZone . "','" . $language . "','" . $following . "')";
                                $resultinsertuser = mysqli_query($connection, $insertuser);
                                print $resultinsertuser . "<br/>";
                                if ($resultinsertuser)
                                    echo "new user inserted 388";
                                else
                                    echo "223 user inserting FAILED" . " with error " . mysqli_error($connection);
                              }
                          }
                        if ($resulttweet)
                          {
                            echo "395 inserting user mention";
                            $insertusermention = "INSERT INTO mentions(tweetid, fromid, toid) VALUES ('" . mysql_real_escape_string($UMtweetId) . "','" . $UMfromId . "', '" . $UMtoId . "')";
                            $resultmention     = mysqli_query($connection, $insertusermention);
                            //print $insertusermention."<br/>";
                            if ($resultmention)
                                echo "400 mention inserted";
                            else
                                echo "402 mention inserting FAILED" . " with error " . mysqli_error($connection);
                          }
                      }
                    
                    
                  }
              }
            
            
            
          }
        
      }
    
  } // End while
mysqli_close($connection);
print "out of while";
// Release lock and close
flock($fp, LOCK_UN);
fclose($fp);

// All done with this file
echo 'Successfully processed ' . $statusCounter . ' tweets from ' . $queueFile . ' - deleting.';
//unlink($queueFile);

function convertTimestamp($twitter_datetime = '')
  {
    //print "Timestamp before conversion $twitter_datetime".$twitter_datetime."\n";
    
    $mysql_format = gmdate("Y-m-d H:i:s", strtotime($twitter_datetime));
    
    //print "Timestamp after conversion $mysql_format".$mysql_format."\n";
    
    return $mysql_format;
  }
?>