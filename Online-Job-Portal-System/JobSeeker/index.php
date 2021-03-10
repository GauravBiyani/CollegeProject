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
    <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
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
            <div class="article" style="font-family: book antiqua; font-size: 14px" >
                <h2><span><a href="#">Control Panel</a></span></h2>
               

                <table width="100%" border="0">
                  <tr>
                    <td>
                        <div align="center">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="60" height="60">
                            <g>
                              <g>
                                <path class="iconclr" d="M256,0C114.844,0,0,114.844,0,256s114.844,256,256,256s256-114.844,256-256S397.156,0,256,0z M256,74.667
                                  c67.635,0,122.667,55.031,122.667,122.667S323.635,320,256,320s-122.667-55.031-122.667-122.667S188.365,74.667,256,74.667z
                                  M256,469.333c-69.707,0-131.52-33.755-170.473-85.615c42.676-20.534,103.621-42.385,170.473-42.385
                                  c66.857,0,127.807,21.854,170.474,42.383C387.521,435.577,325.708,469.333,256,469.333z"/>
                              </g>
                            </g>
                          </svg>
                        </div>
                    </td>
                    <td>
                      <div align="center">
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          width="64px" height="64px" viewBox="0 0 31.771 31.771" style="enable-background:new 0 0 31.771 31.771;"
                          xml:space="preserve">
                          <g>
                            <g>
                              <path class="iconclr" d="M31.771,20.319c0-0.474-0.279-0.87-0.676-1.066V11.9c0.09-0.034,0.146-0.119,0.145-0.214c0-0.095-0.062-0.179-0.149-0.21
                                L15.92,6.125c-0.194-0.069-0.406-0.069-0.601,0L0.15,11.477c-0.089,0.031-0.149,0.115-0.15,0.21s0.056,0.18,0.144,0.214
                                l15.148,5.896c0.211,0.081,0.444,0.081,0.655,0l14.102-5.492v6.947c-0.396,0.195-0.675,0.594-0.675,1.065
                                c0,0.492,0.3,0.919,0.729,1.102c-0.429,0.847-0.729,2.585-0.729,3.081c0,0.661,0.537,1.197,1.198,1.197
                                c0.66,0,1.197-0.536,1.197-1.197c0-0.496-0.301-2.234-0.729-3.081C31.47,21.238,31.771,20.811,31.771,20.319z"/>
                              <path class="iconclr" d="M4.888,14.87c0.001,1.696,0.002,3.692,0.002,4.009c0,3.158,4.753,5.729,10.73,5.89c5.976-0.161,10.729-2.729,10.729-5.89
                                c0-0.315,0-2.312,0.002-4.009l-10.406,4.051c-0.211,0.082-0.444,0.082-0.655,0L4.888,14.87z"/>
                            </g>
                          </g>
                        </svg>
                      </div>
                    </td>
                    <td><div align="center"><svg height="64px" viewBox="1 1 511 511.9995" width="64px" xmlns="http://www.w3.org/2000/svg"><path class="iconclr" d="m304.699219 214.769531h-17.128907v18.199219h17.128907c5.03125 0 9.101562-4.078125 9.101562-9.097656 0-5.039063-4.070312-9.101563-9.101562-9.101563zm0 0"/><path class="iconclr" d="m196.265625 166.566406c-7.335937 0-13.132813 5.90625-13.132813 13.101563v40.199219c0 7.246093 5.859376 13.101562 13.101563 13.101562 7.332031 0 13.132813-5.90625 13.132813-13.101562v-40.199219c0-7.246094-5.863282-13.101563-13.101563-13.101563zm0 0"/><path class="iconclr" d="m304.699219 166.570312h-17.128907v18.199219h17.128907c5.03125 0 9.101562-4.078125 9.101562-9.097656 0-5.050781-4.082031-9.101563-9.101562-9.101563zm0 0"/><path class="iconclr" d="m498.125 428.210938-56.246094-56.242188c-15.464844-15.46875-38.6875-18.445312-57.148437-8.953125l-32.980469-32.976563c67.640625-78.488281 64.238281-197.074218-10.210938-271.527343-78.015624-78.015625-204.507812-78.015625-282.527343 0-78.015625 78.019531-78.015625 204.511719 0 282.527343 74.453125 74.449219 193.039062 77.851563 271.527343 10.210938l32.976563 32.980469c-9.496094 18.460937-6.515625 41.683593 8.949219 57.148437l56.246094 56.246094c19.167968 19.167969 50.242187 19.167969 69.410156 0 19.171875-19.167969 19.171875-50.246094.003906-69.414062zm-363.191406-204.34375c0 21.558593-17.542969 39.101562-39.101563 39.101562-21.5625 0-39.101562-17.542969-39.101562-39.101562 0-8.285157 6.71875-15 15-15 8.285156 0 15 6.714843 15 15 0 5.019531 4.082031 9.101562 9.101562 9.101562s9.101563-4.082031 9.101563-9.101562v-57.300782h-17.132813c-8.285156 0-15-6.714844-15-15s6.714844-15 15-15h32.132813c8.285156 0 15 6.714844 15 15zm104.433594-4c0 23.835937-19.292969 43.101562-43.101563 43.101562-23.917969 0-43.132813-19.328125-43.132813-43.101562v-40.199219c0-23.835938 19.289063-43.101563 43.101563-43.101563 23.910156 0 43.132813 19.324219 43.132813 43.101563zm104.433593 4.003906c0 21.621094-17.5 39.097656-39.101562 39.097656h-32.128907c-8.292968 0-15-6.71875-15-15v-96.398438c0-8.289062 6.707032-15 15-15h32.128907c21.621093 0 39.101562 17.5 39.101562 39.101563 0 8.847656-2.929687 17.238281-8.320312 24.097656 5.390625 6.851563 8.320312 15.238281 8.320312 24.101563zm0 0"/></svg></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="Profile.php"><strong>Profile</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="Education.php"><strong>Education</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="SearchJob.php"><strong>Search JOB</strong></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><svg height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g id="detail"><path class="iconclr" d="m11 5v51h34a1 1 0 0 1 1 1c0 2.53 4.01 5 7 5v-60h-39a3.009 3.009 0 0 0 -3 3zm4 45h-2v-2h2zm0-4h-2v-2h2zm36 4h-34v-2h34zm0-4h-34v-2h34zm0-4h-34v-2h34zm-19-38a16 16 0 1 1 -16 16 16.021 16.021 0 0 1 16-16zm-17 38h-2v-2h2z"/><path class="iconclr" d="m39 14h-2v5a1 1 0 0 1 -.47.85 1.014 1.014 0 0 1 -.53.15 1.03 1.03 0 0 1 -.45-.11l-3.55-1.77-3.55 1.77a1 1 0 0 1 -1.45-.89v-5h-2v12h14z"/><path class="iconclr" d="m32.45 16.11 2.55 1.27v-3.38h-6v3.38l2.55-1.27a.956.956 0 0 1 .9 0z"/><path class="iconclr" d="m32 34a14 14 0 1 0 -14-14 14.015 14.015 0 0 0 14 14zm-9-21a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1-1z"/><path class="iconclr" d="m44.11 58h-40.01a5.009 5.009 0 0 0 4.9 4h38.11a6.945 6.945 0 0 1 -3-4z"/><path class="iconclr" d="m55 2v4h4.9a5.009 5.009 0 0 0 -4.9-4z"/></g></svg></div></td>
                    <td><div align="center"><svg id="Capa_1" enable-background="new 0 0 512 512" height="64" viewBox="0 0 512 512" width="64" xmlns="http://www.w3.org/2000/svg"><g><g><path class="iconclr" d="m245 301h-44.992v-49.996c0-16.571-13.433-30.004-30.004-30.004-16.571 0-30.004 13.433-30.004 30.004v28.067c0 15.461-9.929 28.905-24.707 33.452l-25.293 7.783v155.694c0 .397-.02.789-.03 1.183 8.847 8.847 20.846 13.817 33.357 13.817h121.673c24.853 0 45-20.147 45-45v-100c0-24.853-20.147-45-45-45z"/><path class="iconclr" d="m45 491h-30c-8.284 0-15-6.716-15-15v-160c0-8.284 6.716-15 15-15h30c8.284 0 15 6.716 15 15v160c0 8.284-6.716 15-15 15z"/></g><g><path class="iconclr" d="m267 211h44.992v49.996c0 16.571 13.433 30.004 30.004 30.004 16.571 0 30.004-13.433 30.004-30.004v-28.067c0-15.461 9.929-28.905 24.707-33.452l25.293-7.783v-155.694c0-.397.02-.789.03-1.183-8.847-8.847-20.846-13.817-33.357-13.817h-121.673c-24.853 0-45 20.147-45 45v100c0 24.853 20.147 45 45 45z"/><path class="iconclr" d="m467 21h30c8.284 0 15 6.716 15 15v160c0 8.284-6.716 15-15 15h-30c-8.284 0-15-6.716-15-15v-160c0-8.284 6.716-15 15-15z"/></g></g></svg></div></td>
                    <td><div align="center"><svg id="bold" enable-background="new 0 0 24 24" height="60" viewBox="0 0 24 24" width="60" xmlns="http://www.w3.org/2000/svg"><g><path class="iconclr" d="m15 13c-.553 0-1 .448-1 1v4c0 .551-.448 1-1 1h-3v-15c0-.854-.544-1.617-1.362-1.901l-.296-.099h4.658c.552 0 1 .449 1 1v3c0 .552.447 1 1 1s1-.448 1-1v-3c0-1.654-1.346-3-3-3h-10.75c-.038 0-.07.017-.107.022-.048-.004-.094-.022-.143-.022-1.103 0-2 .897-2 2v18c0 .854.544 1.617 1.362 1.901l6.018 2.006c.204.063.407.093.62.093 1.103 0 2-.897 2-2v-1h3c1.654 0 3-1.346 3-3v-4c0-.552-.447-1-1-1z"/><path class="iconclr" d="m23.707 9.293-4-4c-.286-.286-.716-.372-1.09-.217-.373.155-.617.52-.617.924v3h-4c-.552 0-1 .448-1 1s.448 1 1 1h4v3c0 .404.244.769.617.924.374.155.804.069 1.09-.217l4-4c.391-.391.391-1.023 0-1.414z"/></g></svg></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="Walkin.php"><strong>Walkin</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="Feedback.php"><strong>Feedback</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center" ><a href="logout.php"><strong>Logout</strong></a></div></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

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
