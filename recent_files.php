<?php error_reporting(0); ?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="default.css">

</head>

<body>

<?php



include ("riverrun.php");

$x = 0;


foreach (glob("RECENT/$search/*") as $file){


foreach (glob("$file/*") as $file2){


foreach (glob("$file2/*") as $file3){
foreach (glob("$file3/*") as $file4){
$exp = explode("/", $file4);

$files = $exp[5];


$filesize = filesize("FILES/$files");
$filesize = file_size_readable($filesize);

    $j++;

    echo "<table align='left'><tr><td>";	

    $extension = substr($files, -3);

    if ($extension == "mp4"){

    echo "<video controls width='300px' height='300px'><source src='FILES/$files' type='video/mp4'></video> ";

    } else {

    if ($extension == "ebm"){echo "<video controls width='300px' height='300px'><source src='FILES/$files' type='video/webm'></video> ";} 

    }	

    $tag_contents = file_get_contents("FILES_INFO/$files");
	
    
    echo "</td></tr><tr><td>";


    $file_tags = explode (",", $tag_contents);
    
    echo "<a href='FILES/$files'>$file_tags[0]</a>";		

    for ($i=1; $i <= 5; $i++ ){

        if($file_tags[$i] != ""){
	echo ", <a href='search.php?search=$file_tags[$i]'>$file_tags[$i]</a>";
	}
	}	 	   

    echo "</td></tr></table>";

    //if ($j == 4){echo "</br>"; $j = 0;}


if ($x > 100){die;}
}

}

}

}


?>

</body>
</html>