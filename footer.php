    <?php
//    $modelFooter=factory::factory("footer");
die();
//  $footer=factory::getInstance("footer");
$result=footer::select(["*"])->from()->get();
var_dump($result);
$footer=$result->fetch_assoc();
     
    ?>
    <div style="
        width:              100%;
        height:             50px;
        background-color:#29B6F6;
        margin-top:         10px;
        margin-left:        10px;
        margin-right:       10px;
        ">
        <div style="
            width:                      100px;
            height:                     20px;
            background-color:           #81D4FA;
            margin-top:                 10px;
            float:                      left;
            margin-left:                10px;
            margin-right:50px;color:    white;
            ">
            <?php if($result->num_rows==1){
            //  $result1=$result->fetch_assoc();
                echo $footer['nameDesigner'];
                
            }
            else{echo "not found";}?>
        </div>

        <div style="
            width:                  100px;
            height:                 20px;
            background-color:       #81D4FA;
            margin-top:             10px;
            float:                  left;
            margin-left:            10px;
            margin-right:           50px;
            color:                  white;
            ">
            <?php if($result->num_rows==1){echo $footer['phonNumber'];}else{
                echo "not found";
            }
            ?>
        </div>

        <div style="
            width:                      100px;
            height:                     20px;
            background-color:           #81D4FA;
            margin-top:                 10px;
            float:                      left;
            margin-left:                10px;
            margin-right:50px;color:    white;
            ">
            <?php if($result->num_rows==1){echo $footer['description'];
            }else{
                echo "not found";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
