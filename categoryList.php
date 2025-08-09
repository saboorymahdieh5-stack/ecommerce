<?php 
//include("autoload/autoload.php");
//include("model/factory.php");
$conn=factory::test("modelCategory");
$result=$conn->select();
?>
<div style="
        width:              1300px;
        height:             360px;
        margin-top:         10px;
        margin-left:        10px;
        ">
    <?php   while($category=$result->fetch_assoc()){ ?>
        <div style="
            background-color:       #D5B85A;
            display:                flex;
            justify-content:        center;
            align-items:            center;
            padding:                10px;
            margin:                 10px;
            border-radius:          15px;
            ">
            <div style="
                width:                  20px;
                height:                 20px;
                background-color:       #F9E29C;
                margin:                 10px;
                float:                  left;
                padding:                10px;
                border-radius:          15px;
                text-align:             center;
                ">
                <?php echo $category['id']; ?>
            </div>
            <div style="
                width:                  100px;
                height:                 20px;
                background-color:       #F9E29C;
                margin:                 10px;
                float:                  left;
                padding:                10px;
                border-radius:          15px;
                text-align:             center;
                ">
                <?php echo $category['title']; ?>
            </div>
            <div style="
                width:                  100px;
                height:                 20px;
                background-color:       #F9E29C;
                margin:                 10px;
                float:                  left;
                padding:                10px;
                border-radius:          15px;
                text-align:             center;
                ">
                <?php echo $category['description']; ?>
            </div>
            <a href="http://localhost/ecommerce/deleteCategoryForm/<?php echo $category['id']?>" 
                style=" 
                    height:             20px;
                    background-color:   #F9E29C;
                    padding:            10px;
                    margin:             10px;
                    border-radius:      15px;
                    text-decoration:    none;
                ">
                حذف
            </a>
            <a href="http://localhost/ecommerce/categorySingle/<?php echo $category['id']?>" 
                style=" 
                    height:             20px;
                    background-color:   #F9E29C;
                    padding:            10px;
                    margin:             10px;
                    border-radius:      15px;
                    text-decoration:    none;
                ">
                نمایش
            </a>
            <a href="http://localhost/ecommerce/editCategoryForm/<?php echo $category['id']?>" 
                style=" 
                    height:             20px;
                    background-color:   #F9E29C;
                    padding:            10px;
                    margin:             10px;
                    border-radius:      15px;
                    text-decoration:    none;
                ">
                ویرایش
            </a>
        </div>
    <?php } ?>
</div>  