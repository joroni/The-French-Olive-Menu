<script>
var id='leafBtn';
var myClassName=" navlink"; //must keep a space before class name
var d;
d=document.getElementById(id);
d.className=d.className.replace(myClassName,"");

</script>
<?php
	/*$con=mysql_connect("localhost", "root", "") or die('Server connexion not possible.');
mysql_select_db("adminfrench",$con) or die('Database connexion not possible.');
$qry="SELECT * FROM categorylist where status=1";
$result=mysql_query($qry,$con);*/
    include '../DBConfig.php';
    $con=mysql_connect($host, $user, $pass) or die('Server connexion not possible.');
    mysql_select_db($db,$con) or die('Database connexion not possible.');
   // $qry="SELECT * FROM categorylist where status=1 ORDER BY weight ASC";
    $qry = "select id, pid, weight, cname, url from categorylist where status=1 order by weight asc";
    $result=mysql_query($qry,$con);
    $arrayMenu = array();
    while($row = mysql_fetch_assoc($result)){
        $arrayMenu[$row['pid']] = array("pid" => $row['pid'], "name" => $row['cname'], "url" => $row['url']);
    }

    createTree($arrayCategories, 0);
	function createTree($array, $curParent, $currLevel = 0, $prevLevel = -1) {
        foreach ($array as $categoryId => $category) {
            
            if ($curParent == $category['pid']) {
                
                if($category['pid']=0) $class="cd-navigation cd-single-item-wrapper"; else $class="sub_menu";
                
                if ($currLevel > $prevLevel) echo " <ul class='$class'> ";
                
                if ($currLevel == $prevLevel) echo " </li> ";
                echo '<li id="'.$categoryId['pid'].'" ><a  id="leafBtn" href="#catalog.php?&category='.$categoryId.'" class="ui-link">'.$category['name'].' </a>';
            } else {
                echo '<li id="'.$categoryId['pid'].'" ><a href="#0" id="leafBtn" class="ui-link">'.$category['name'].' </a>';
            }

            
            if ($currLevel > $prevLevel) {
                $prevLevel = $currLevel;
            }

            $currLevel++;
            createTree ($array, $categoryId, $currLevel, $prevLevel);
            $currLevel--;
        }

        ?>
</pre>
<?php
	}

    
    if ($currLevel == $prevLevel) echo " </li> </ul> ";
    //}
    ?>
<div id="nav">
<?php
    
    if(mysql_num_rows($result)!=0){
        createTree($arrayMenu, 0);
    }

    ?>
</div> 
