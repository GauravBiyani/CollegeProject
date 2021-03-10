<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article" style="font-family: book antiqua; font-size: 14px">
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2" class="colorb">
                  <tr>
                    <td class="trcolorb"><strong>Name:</strong></td>
                    <td class="trcolorb"><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Address:</strong></td>
                    <td class="trcolorb"><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>City:</strong></td>
                    <td class="trcolorb"><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Email:</strong></td>
                    <td class="trcolorb"><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Mobile:</strong></td>
                    <td class="trcolorb"><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Highest Qualification:</strong></td>
                    <td class="trcolorb"><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Gender:</strong></td>
                    <td class="trcolorb"><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Birth Date:</strong></td>
                    <td class="trcolorb"><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td class="trcolorb"><strong>Resume:</strong></td>
                    <td class="trcolorb"><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td class="trcolorb">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <?php
            mysqli_close($con);
            ?>

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
