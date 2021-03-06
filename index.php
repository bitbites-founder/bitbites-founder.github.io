<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- SEO -->
	<title>Bitbites | Decentralized Food Delivery</title>
	<meta name="description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta name="robots" content="index, follow" />
	<meta name="referrer" content="always" />

	<!-- Social & Open Graph -->
	<meta property="og:title" content="Split - HTML Template Demo" />
	<meta property="og:description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta property="og:image" content="https://demo.onepagelove.com/fullsingle-html/split/images/social.jpg"> <!-- include your hosted image full URL -->
	<meta property="og:url" content="https://demo.onepagelove.com/fullsingle-html/split/" />
	<meta name="twitter:title" content="Split - HTML Template Demo" >
	<meta name="twitter:description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta name="twitter:image" content="https://demo.onepagelove.com/fullsingle-html/split/images/social.jpg" /> <!-- include your hosted image full URL -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@onepagelove" />
	<meta name="twitter:creator" content="@robhope" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/split.css' type='text/css' media='screen' />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>

    
<?php
$api_key = 'c5310a6059bb37fde83c117a9f18d96e-us17';
$datacenter = 'us17';
$list_id = '7e43681ee3';
$str_json = file_get_contents('php://input');
$json_arr = json_decode($str_json, true);
$email = $json_arr['email']
$status = 'pending';
if(!empty($_POST['status'])){
    $status = $_POST['status'];
}
$url = 'https://'.$datacenter.'.api.mailchimp.com/3.0/lists/'.$list_id.'/members/';
$username = 'apikey';
$password = $api_key;
$data = array("email_address" => $email,"status" => $status);
$data_string = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$api_key");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result=curl_exec ($ch);
curl_close ($ch);
echo $result;
?>

</head>

<body id="fullsingle" class="page-template-page-fullsingle-split">


<div class="fs-split">

    <div class="split-content">

    <div class="split-content-vertically-center">
    
      <span class="split-intro">

        <img src="images/bitbites_logo.png" style= "width:258px;height:78px;" alt="Bitbites">
      </span>

      <span class="tagline">Food Delivery meets Blockchain.</span>

      <span class="split-bio">
        
        <p style="padding-bottom: 15px">At Bitbites, where developing a platform that connects restauraunts to a decentralised fleet of on-demand couriers at an extremely low fee. Our application will use IoT-enabled devices along with smart contracts built on the Ethereum blockchain, to make the entire process trustless and efficient like never before. Information on the fundraising event for the upcoming ICO coming soon. If your interested in our idea, or in becoming an early investor, shoot us an email at <a style="display: inline-block;" id="email">team@bitbites.co</a>! </p>

        <form class="sendpress-signup" method="POST" id="sendpress_signup" action="assets/js/endpoint.php" style=" margin-bottom: 25px; margin-top: 20px;">
    <div id="form-wrap">
        <input type="hidden" value="1688" class="sp_list" id="list" name="sp_list" />
        <p name="email">
            <label for="mc-email">Sign up for updates: </label>
            <input type="email" style= "" id="mc-email" name="mc-email" placeholder=" Email Address" orig="Newsletter - Stay Tuned" class="sp_email" required/>
            <input type="text" value="pending" id="status" name="status" hidden/>
             <span class="submit">
            <input type="submit" name="submit" id="closet-CSS" class="sendpress-submit" value="Submit" />
        </span>
        </p>
       
    </div>
      </form>

      </span>



      <div class="split-lists">
        
        <div class="split-list">

          <h3>Connect</h3>

          <ul>
            <li><a href="www.medium.com">Blog</a></li>
            <li><a href="email:team@bitbites.co">Email</a></li>
            <li><a href="#">Newsletter</a></li>
          </ul>

        </div>


        
      </div>

      <div class="split-credit">

        <p style="padding-top: 20px">&copy;2017 <a href="#">Bitbites Co.</a></p>

        <!-- 
        To edit this credit you can remove the CC3.0 license for only $5 here: https://onepagelove.com/split 
        this really helps contribute towards us developing more templates and means the world to me!
        Cheers, Rob (@robhope)
        -->

      </div>    

    </div>

  </div>
  <div class="split-image">

	<!-- Image Side -->


	</div>
	<!-- Content Side -->


</div>

</body>
</html>