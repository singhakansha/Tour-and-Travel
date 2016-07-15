<style>
            a
		{
                   
		 font-family: Cambria Math;
                 font-style: Bold;
		 text-decoration: underline;
                 padding-left: 30px;
                 padding-right: 30px;
                }
            
        </style>
    
        
        <table width="100%">
            <tr width="20%" height="20%">
                <td   colspan="7" height="10%">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/114995461.jpg" alt="114995461" title="114995461" id="wows1_0"/></li>
<li><img src="data1/images/abc.jpg" alt="abc" title="abc" id="wows1_1"/></li>
<li><img src="data1/images/download_1.jpg" alt="download (1)" title="download (1)" id="wows1_2"/></li>
<li><img src="data1/images/download.jpg" alt="download" title="download" id="wows1_3"/></li>
<li><img src="data1/images/images_3.jpg" alt="images (3)" title="images (3)" id="wows1_4"/></li>
<li><img src="data1/images/images_4.jpg" alt="images (4)" title="images (4)" id="wows1_5"/></li>
<li><img src="data1/images/images.jpg" alt="images" title="images" id="wows1_6"/></li>
</ul></div>
<a class="wsl" href="http://wowslider.com">Javascript Image Fader by WOWSlider.com v3.4</a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
</td>
            </tr>
        <tr class="mystyle">
            <td valign="top">
                <a href="flights.php" class="mystyle">Flights</a>
		</td>
		<td valign="top">
		<a href="hotel.php" class="mystyle">Hotel</a>
		</td>
         	<td valign="top">
		<a href="train.php"class="mystyle">Train</a>
		</td>
                <td valign="top">
		<a href="showrecord.php"class="mystyle">Showrecord</a>
		</td>
                <td valign="top">
		
                    <?php if(isset($_SESSION['email']))
                 echo "<a href='logout.php'>Logout</a>";
                        else 
                            echo "<a href='login.php' class='mystyle'>Signup</a>";?>
                </td>
                </tr>
           </table>