<html>
<title>home</title>

<style type="text/css">

.search_bar{
position: absolute;
top: 10px;
right: 10px;
}

imgx{
width: 150px;
height: 150px;
}

.description{
font-size: 10px;
}

.icons{
height:5%;
width:5%;
}

.search {
font-family: arial;
font-size: 32px;
color: #666666;
border: 2px solid #AAAAAA;
border-radius: 10px 10px 10px 10px;
padding: 20px;
margin: 5px;
}

body{
font-family: arial;
font-size: 16px;
color: #666666;
}

</style>



</head>

<body>
<body>

<form action="search.php" method="post">

<span class="search_bar">
<input type="text" id="search01" name="search" placeholder="search...">

<input type="submit" id="button02" value="search">
</span>
</form>

<a href="upload.php"><img src="TEMPLATES/fatcow/compile.png""></a>
<a href="index02.php"><img class="icons" src="TEMPLATES/fatcow/http.png"></a>
<a href="source_code.zip"><img class="icons" src="TEMPLATES/fatcow/backpack.png"></a>
<a href="search.php?search=jpg"><img class="icons" src="TEMPLATES/fatcow/image.png"></a>
<a href="search.php?search=mp4"><img class="icons" src="TEMPLATES/fatcow/movies.png"></a>
<a href="about.php"><img class="icons" src="TEMPLATES/fatcow/help.png"></a>

</br>

<span class="description">Icons by <a href="http://www.fatcow.com/free-icons" target="_blank">fatcow</a> under  CC Attribution 3.0 License.</span>
</br></br>RECENT FILES</br>

<?php

include ("recent_files.php");

?>


</div>



</body>
</html>
