<?php
 

    $fn=$_FILES["file"]["name"];
    if(!empty($fn))
    {
        $res = move_uploaded_file($_FILES["file"]["tmp_name"],"photos/".$fn);
        if($res)
        {
            header("location:index.php?img=".$fn);
        }
    }
?>
