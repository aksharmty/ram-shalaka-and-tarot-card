<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free Taro Card Reading</title>
    <!--Favicon add-->
        <meta name="description" content="Just send your birth details with your question and get free answer on your email for your question">
           <meta name="keywords" content="astrologer,astrology,astrologer in delhi,astrologer in india,online astrologer,free astrologer,free horoscope reading">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Modernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>



	</head>

	<body>
    <?php include "header.php" ?>
    	<div class="container">
<h2 class="title-style-1">Free Tarot Card Reading<span class="title-under"></span></h2>
			    
	<div class="row ">
        <div class="col-md-8">
<?php

$sql = "SELECT id, card,img, des FROM tarot order by RAND() limit 3";
mysqli_set_charset( $connection, 'utf8');
$result = $connection->query($sql);


?>

<br><center><a href="free-tarot-reading.php"><h2>मेरे अगले सवाल की  भविष्यवाणी करें  </h2></a> <br>
नोट: पहला कार्ड आपके मन की स्थिति और प्रश्न के प्रकार की ओर इशारा करता है। दूसरा कार्ड आपकी इच्छाओं की पूर्ति के लिए जो प्रयत्न करने होंगे, उन्हें बताता है। तीसरा कार्ड आपके प्रश्नों का पूरा उत्तर देता है और आपकी समस्या पर विराम लगाता है।</center><br>
<table width="90%">
<tr>
<td width="10%">Image</td>
<td width="80%">Card Name</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr >
<td width="10%"><img src="//kumarjyotishraj.in<?php echo $row["img"]; ?> "></td>
<td width="80%"><h2><?php echo $row["card"]; ?></h2><br>
<h3><?php echo $row["des"]; ?></h3></td>
</tr>
<?php
$i++;
}

?>
</table>
<center><a href="free-tarot-reading.php"><h2>मेरे अगले सवाल की  भविष्यवाणी करें  </h2></a> </center>
<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- yomarket -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4305348743992957"
     data-ad-slot="6781502921"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

<div class="col-md-4"><?php include"tarotsidebar.php" ?></div>
</div></div>
 </div>

	    </div>
		


	</div>
  <?php include "footer.php" ?>

  
</body>

</html>
