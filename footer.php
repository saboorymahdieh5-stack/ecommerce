    <?php
   // $conn=$GLOBALS['newFactory']->test("modelFooter");
   $conn=factory::test("modelFooter");
    $result=$conn->selectFooter();
    $footer=$result->fetch_assoc();
    ?>
    <div style="
        width:              100%;
        height:             50px;
        background-color:   #FF0090;
        margin-top:         10px;
        margin-left:        10px;
        margin-right:       10px;
        ">
        <div style="
            width:                      100px;
            height:                     20px;
            background-color:           #FF66CC;
            margin-top:                 10px;
            float:                      left;
            margin-left:                10px;
            margin-right:50px;color:    white;
            ">
            <?php if($result->num_rows==1){echo $footer['nameDesigner'];}?>
        </div>

        <div style="
            width:                  100px;
            height:                 20px;
            background-color:       #FF66CC;
            margin-top:             10px;
            float:                  left;
            margin-left:            10px;
            margin-right:           50px;
            color:                  white;
            ">
            <?php if($result->num_rows==1){echo $footer['phonNumber'];}?>
        </div>

        <div style="
            width:                      100px;
            height:                     20px;
            background-color:           #FF66CC;
            margin-top:                 10px;
            float:                      left;
            margin-left:                10px;
            margin-right:50px;color:    white;
            ">
            <?php if($result->num_rows==1){echo $footer['description'];}?>
        </div>
    </div>
</div>
</body>
</html>