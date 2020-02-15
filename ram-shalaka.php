<!DOCTYPE html>
<html class="no-js">
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
           <title>
        राम शलाका, Ram Shalaka, Shri Ram Shalaka, Ram prashnavali, shri ram prashnavali in hindi    </title>
         <meta name="description" content="श्री राम शलाका प्रश्नावली (Shri Ram Prashnavali) गोस्वामी तुलसीदास रचित "श्री राम चरित मानस" पर आधारित है। इस प्रश्नावली का प्रयोग कर आप जीवन के कई प्रश्नों का जवाब पा सकते हैं। इस प्रश्नावली का प्रयोग करना बेहद आसान है। " />
         <meta name="keywords" content="राम शलाका, Ram Shalaka, Shri Ram Shalaka, Ram prashnavali, shri ram prashnavali, ram shalaka prashnavali, श्री राम प्रश्नावली, श्री राम शलाका, shriram shalaka, Ramshalaka Prashnavali Chaupai With Answers, ram shalaka in hindi in hindi" />
        <meta property="og:image" content="https://kumarjyotishraj.in/ram-shalaka.jpg">
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
<?php include"header.php"?>
    
     <div class="section-home our-causes">

        <div class="container">
        <div class="col-md-9">

            <div class="row">
            <h2 class="title-style-1">श्री राम शलाका प्रश्नावली <span class="title-under"></span></h2>
           

                <div class="col-md-3">

                    <div class="cause">

                        <img src="ram-shalaka.jpg" alt="Ram Shalaka" title="Ram Shalaka" class="cause-img">

                                </div> <!-- /.cause -->
                                </div>

                <div class="col-md-9">

                    <div class="cause">

                        <!--img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img"-->

                                               
                        <div class="cause-details">
                         <h4> श्री राम शलाका प्रश्नावली (Shri Ram Prashnavali) गोस्वामी तुलसीदास रचित "श्री राम चरित मानस" पर आधारित है। इस प्रश्नावली का प्रयोग कर आप जीवन के कई प्रश्नों का जवाब पा सकते हैं। इस प्रश्नावली का प्रयोग करना बेहद आसान है। सबसे पहले भगवान श्री राम का स्मरण करते हुए अपने सवाल को मन में अच्छी तरह सोच लें। इसके बाद नीचे दिए गए किसी भी अक्षर पर आंख बंद कर के क्लिक करें। आपके द्वारा क्लिक किए हुए अक्षर से प्रत्येक 9वें नम्बर के अक्षर को जोड़ कर एक चौपाई बनेगी जो की आपके प्रश्न का उत्तर होगी।</div>
</h4>
 
                        </div>                                               

                    </div> <!-- /.cause -->
                    
                </div>
                <div class="col-md-12">

                    <div class="cause">                        
 <?php
$id=$_GET['id'];
include ("connect.php");
//where parent=''
$sql = "SELECT * FROM ram where id='$id' ";
mysqli_set_charset( $connection, 'utf8');
$result = $connection->query($sql);
?>  
<table width="90%">
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr><td width="80%"><h2><?php echo $row["ques"]; ?></h2></td></tr>
<tr><td width="80%"><h2><?php echo $row["ans"]; ?></h2><br></td></tr>
<?php
$i++;
}

?>
</table>


<table style="width:100%" border="1" text-align="center" bgcolor="red" link-color="white"><tr>
			
                        <td width="15px"><center> <a  href="?id=7">सु                  </a></center></td>
			<td width="15px"><center> <a  href="?id=3" >प्र                   </a></center></td>
			<td width="15px"><center> <a  href="?id=1">उ                    </a></center></td>
			<td width="15px"><center> <a  href="?id=4">बि                   </a></center></td>
			<td width="15px"><center> <a  href="?id=9">हो 	                </a></center></td>
			<td width="15px"><center> <a  href="?id=5">मु 	                </a></center></td>
			<td width="15px"><center> <a  href="?id=2">ग 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">ब 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">सु 		        </a></center></td>
			<td width="15px"><center> <a  href="?id=7">नु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">बि 		        </a></center></td>
			<td width="15px"><center> <a  href="?id=1">घ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">धि 		        </a></center></td>
			<td width="15px"><center> <a  href="?id=9">इ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">द 	                </a></center></td>
		</tr><tr><td width="15px"><center><a  href="?id=2">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">रु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">फ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">सि 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">सि 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">रहिं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">बस 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">हि 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">मं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">ल      		</a></center></td>
			<td width="15px"><center> <a  href="?id=6">न 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">ल 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">य 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">न 			</a></center></td>
	        	<td width="15px"><center> <a  href="?id=1">अं 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a  href="?id=4">सुज 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">सो 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">ग 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">सु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">कु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">म 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">स 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">ग 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">त 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">न 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">इ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">ल 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">धा 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">बे 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">नो 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a  href="?id=7">त्य 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">न 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">कु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">जो 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">म 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">रि 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">अ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">की 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">हो 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">सं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">रा 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">य 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a  href="?id=2">पु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">सु 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">थ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">सी 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">जे 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">इ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">ग 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">म 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">सं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">क 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">रे 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">हो 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">स 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">स			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">नि 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a  href="?id=4">त 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">त 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">स 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">हुँ 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">ह 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">ब 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">ब 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">प 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">चि			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">स 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">हिं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">स 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">तु 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a  href="?id=7">म 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">का 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">T 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">र 			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">म 			</a></center></td>
			<td width="15px"><center> <a  href="?id=2">मि 			</a></center></td>
			<td width="15px"><center> <a  href="?id=6">मी 			</a></center></td>
			<td width="15px"><center> <a  href="?id=8">म्हा 			</a></center></td>
			<td width="15px"><center> <a  href="?id=7">T 			</a></center></td>
			<td width="15px"><center> <a  href="?id=3">जा 			</a></center></td>
			<td width="15px"><center> <a  href="?id=1">हू 			</a></center></td>
			<td width="15px"><center> <a  href="?id=4">हीं 			</a></center></td>
			<td width="15px"><center> <a  href="?id=9">T			</a></center></td>
			<td width="15px"><center> <a  href="?id=5">T 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=2">ता 			</a></center></td>
			<td width="15px"><center> <a href="?id=6">रा 			</a></center></td>
			<td width="15px"><center> <a href="?id=8">रे 			</a></center></td>
			<td width="15px"><center> <a href="?id=7">री 			</a></center></td>
			<td width="15px"><center> <a href="?id=3">हृ 			</a></center></td>
			<td width="15px"><center> <a href="?id=1">का 			</a></center></td>
			<td width="15px"><center> <a href="?id=4">फ 			</a></center></td>
			<td width="15px"><center> <a href="?id=9">खा 			</a></center></td>
			<td width="15px"><center> <a href="?id=5">जू 			</a></center></td>
			<td width="15px"><center> <a href="?id=2">ई 			</a></center></td>
			<td width="15px"><center> <a href="?id=6">र 			</a></center></td>
			<td width="15px"><center> <a href="?id=8">रा 			</a></center></td>
			<td width="15px"><center> <a href="?id=7">पू 			</a></center></td>
			<td width="15px"><center> <a href="?id=3">द        		</a></center></td>
			<td width="15px"><center> <a href="?id=1">ल 			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=4">नि 			</a></center></td>
			<td width="15px"><center> <a href="?id=9">को 			</a></center></td>
			<td width="15px"><center> <a href="?id=5">जो 			</a></center></td>
			<td width="15px"><center> <a href="?id=2">गो			</a></center></td>
			<td width="15px"><center> <a href="?id=6">न 			</a></center></td>
			<td width="15px"><center> <a href="?id=8">मु			</a></center></td>
			<td width="15px"><center> <a href="?id=7">ज 			</a></center></td>
			<td width="15px"><center> <a href="?id=3">य			</a></center></td>
			<td width="15px"><center> <a href="?id=1">ने			</a></center></td>
			<td width="15px"><center> <a href="?id=4">मनि			</a></center></td>
			<td width="15px"><center> <a href="?id=9">क			</a></center></td>
			<td width="15px"><center> <a href="?id=5">ज			</a></center></td>
			<td width="15px"><center> <a href="?id=2">प			</a></center></td>
			<td width="15px"><center> <a href="?id=6">स 			</a></center></td>
			<td width="15px"><center> <a href="?id=8">ल			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=7">हि			</a></center></td>
			<td width="15px"><center> <a href="?id=3">रा			</a></center></td>
			<td width="15px"><center> <a href="?id=1">मि			</a></center></td>
			<td width="15px"><center> <a href="?id=4">स			</a></center></td>
			<td width="15px"><center> <a href="?id=9">रि			</a></center></td>
			<td width="15px"><center> <a href="?id=5">ग			</a></center></td>
			<td width="15px"><center> <a href="?id=2">द			</a></center></td>
			<td width="15px"><center> <a href="?id=6">न्मु			</a></center></td>
			<td width="15px"><center> <a href="?id=8">ख			</a></center></td>
			<td width="15px"><center> <a href="?id=7">म			</a></center></td>
			<td width="15px"><center> <a href="?id=3">खि			</a></center></td>
			<td width="15px"><center> <a href="?id=1">जि			</a></center></td>
			<td width="15px"><center> <a href="?id=4">म			</a></center></td>
			<td width="15px"><center> <a href="?id=9">त       		</a></center></td>
			<td width="15px"><center> <a href="?id=5">जं			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=2">सिं			</a></center></td>
			<td width="15px"><center> <a href="?id=6">ख			</a></center></td>
			<td width="15px"><center> <a href="?id=8">नु			</a></center></td>
			<td width="15px"><center> <a href="?id=7">न			</a></center></td>
			<td width="15px"><center> <a href="?id=3">को			</a></center></td>
			<td width="15px"><center> <a href="?id=1">मि			</a></center></td>
			<td width="15px"><center> <a href="?id=4">निज			</a></center></td>
			<td width="15px"><center> <a href="?id=9">र्क			</a></center></td>
			<td width="15px"><center> <a href="?id=5">ग			</a></center></td>
			<td width="15px"><center> <a href="?id=2">धु			</a></center></td>
			<td width="15px"><center> <a href="?id=6">ध			</a></center></td>
			<td width="15px"><center> <a href="?id=8">सु			</a></center></td>
			<td width="15px"><center> <a href="?id=7">का			</a></center></td>
			<td width="15px"><center> <a href="?id=3">स			</a></center></td>
			<td width="15px"><center> <a href="?id=1">र			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=4">गु			</a></center></td>
			<td width="15px"><center> <a href="?id=9">ब			</a></center></td>
			<td width="15px"><center> <a href="?id=5">म			</a></center></td>
			<td width="15px"><center> <a href="?id=2">अ			</a></center></td>
			<td width="15px"><center> <a href="?id=6">रि			</a></center></td>
			<td width="15px"><center> <a href="?id=8">नि			</a></center></td>
			<td width="15px"><center> <a href="?id=7">म			</a></center></td>
			<td width="15px"><center> <a href="?id=3">ल			</a></center></td>
			<td width="15px"><center> <a href="?id=1">T			</a></center></td>
			<td width="15px"><center> <a href="?id=4">न			</a></center></td>
			<td width="15px"><center> <a href="?id=9">ढ़			</a></center></td>
			<td width="15px"><center> <a href="?id=5">ती			</a></center></td>
			<td width="15px"><center> <a href="?id=2">न			</a></center></td>
			<td width="15px"><center> <a href="?id=6">क			</a></center></td>
			<td width="15px"><center> <a href="?id=8">भ			</a></center></td>
</tr><tr>		<td width="15px"><center> <a href="?id=7">ना			</a></center></td>
			<td width="15px"><center> <a href="?id=3">पु			</a></center></td>
			<td width="15px"><center> <a href="?id=1">व			</a></center></td>
			<td width="15px"><center> <a href="?id=4">अ        		</a></center></td>
			<td width="15px"><center> <a href="?id=9">T			</a></center></td>
			<td width="15px"><center> <a href="?id=5">र			</a></center></td>
			<td width="15px"><center> <a href="?id=2">ल			</a></center></td>
			<td width="15px"><center> <a href="?id=6">T			</a></center></td>
			<td width="15px"><center> <a href="?id=8">ए			</a></center></td>
			<td width="15px"><center> <a href="?id=7">तु			</a></center></td>
			<td width="15px"><center> <a href="?id=3">र			</a></center></td>
			<td width="15px"><center> <a href="?id=1">न			</a></center></td>
			<td width="15px"><center> <a href="?id=4">नु			</a></center></td>
			<td width="15px"><center> <a href="?id=9">वै			</a></center></td>
			<td width="15px"><center> <a href="?id=5">थ			</a></center></td>
    </tr><tr>		<td width="15px"><center> <a href="?id=2">सि			</a></center></td>
			<td width="15px"><center> <a href="?id=6">हु			</a></center></td>
			<td width="15px"><center> <a href="?id=8">सु			</a></center></td>
			<td width="15px"><center> <a href="?id=7">म्हा			</a></center></td>
			<td width="15px"><center> <a href="?id=3">रा			</a></center></td>
			<td width="15px"><center> <a href="?id=1">र       		</a></center></td>
			<td width="15px"><center> <a href="?id=4">स			</a></center></td>
			<td width="15px"><center> <a href="?id=9">स			</a></center></td>
			<td width="15px"><center> <a href="?id=5">र			</a></center></td>
			<td width="15px"><center> <a href="?id=2">त			</a></center></td>
			<td width="15px"><center> <a href="?id=6">न			</a></center></td>
			<td width="15px"><center> <a href="?id=8">ख			</a></center></td>
			<td width="15px"><center> <a href="?id=7">T			</a></center></td>
			<td width="15px"><center> <a href="?id=3">ज			</a></center></td>
			<td width="15px"><center> <a href="?id=1">T			</a></center></td>
     </tr><tr>		<td width="15px"><center> <a href="?id=4">र			</a></center></td>
			<td width="15px"><center> <a href="?id=9">ा			</a></center></td>
			<td width="15px"><center> <a href="?id=5">ा			</a></center></td>
			<td width="15px"><center> <a href="?id=2">ला			</a></center></td>
			<td width="15px"><center> <a href="?id=6">धी			</a></center></td>
			<td width="15px"><center> <a href="?id=8">ा			</a></center></td>
			<td width="15px"><center> <a href="?id=7">री			</a></center></td>
			<td width="15px"><center> <a href="?id=3">ा			</a></center></td>
			<td width="15px"><center> <a href="?id=1">हू			</a></center></td>
			<td width="15px"><center> <a href="?id=4">हीं			</a></center></td>
			<td width="15px"><center> <a href="?id=9">खा			</a></center></td>
			<td width="15px"><center> <a href="?id=5">जू			</a></center></td>
			<td width="15px"><center> <a href="?id=2">ई			</a></center></td>
			<td width="15px"><center> <a href="?id=6">रा			</a></center></td>
			<td width="15px"><center> <a href="?id=8">रे			</a></center></td
                        </tr></table>
	
                                        
</div>
                     <!-- /.cause -->
                    
                </div>
                
                </div>

                <div class="col-md-3">

<?php include "sidebar.php" ?>                    
                </div>

</div></div>                


    <footer class="main-footer">
<?php include"footer.php"?>

    </body>
    </html>
	
    	