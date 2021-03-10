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

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}

    </style>
</head>

<body id="www-url-cz" style="font-family: book antiqua; font-size: 14px">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ] 
					
                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ] 
						  
                   ],
                   [//Country
						 
						 
					  
						  				
                   ],
				   [//State
						  
						  
                   ],
				   [//City
						  
						  
                   ],
				   [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ]
						 
						 
						  
                   ],
				   [//Email
						   ["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]
						  
                   ],
				   [//ID
						  
						  
                   ],
				   [//TDType
						  
						  ["minlen=1",
		"Please Select File "
						  ]
						  
                   ],
				   [//UserName
						  
					 ["minlen=1",
		"Please Enter UserName "
						  ]	
                   ],
				   [//Password
						  
						 ["minlen=1",
		"Please Enter Password "
						  ] 
						  
                   ],
				   [//Confirm
						  
						   ["minlen=1",
		"Please Enter Confirm Password "
						  ]
						  
                   ]
            ];
</SCRIPT>

<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   

    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">
            <hr class="noscreen" />
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div>

        <div id="content">
            <div class="article">
                <h2><span><a href="#">Our Job Seekers</a></span></h2>
                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
</tr>
<?php

$con = mysqli_connect("localhost","root","","job");

$sql = "select * from jobseeker_reg where Status='Confirm'";


$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result))
{
$Name=$row['JobSeekerName'];
$City=$row['City'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
</tr>
<?php
}

$records = mysqli_num_rows($result);
?>

<?php

mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
                </p>

                <div align="center"><a href="JobSeekerReg.php"><strong>New Job Seeker? Register Here</strong></a>                  </div>
                <p class="btn-more box noprint">&nbsp;</p>
          </div>

            <hr class="noscreen" />
            
        </div>

<?php
include "right.php"
?>

    </div>
    </div> 
 
<?php
include "footer.php"
?>
</div>

</body>
</html>
