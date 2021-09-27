<?php 

// Products List and details.
$products = [
    ["id"=>1,"pname"=>"Red Canvas Shoe","price"=>500,"quality"=>5,"image"=>"Photo/shoe1.jpg"],
    ["id"=>2,"pname"=>"Hand Bag","price"=>200,"quality"=>5,"image"=>"Photo/bag2.jpg"],
    ["id"=>3,"pname"=>"Round hat","price"=>700,"quality"=>5,"image"=>"Photo/hat1.jpg"],
    ["id"=>4,"pname"=>"Bag Travellers","price"=>800,"quality"=>5,"image"=>"Photo/tbag1.jpeg"],
    ["id"=>5,"pname"=>"Goggle Round","price"=>900,"quality"=>5,"image"=>"Photo/gogle1.jpg"],
    ["id"=>6,"pname"=>"Red Canvas Shoe","price"=>500,"quality"=>5,"image"=>"Photo/shoe1.jpg"],
    ["id"=>7,"pname"=>"Travellers Bag","price"=>600,"quality"=>5,"image"=>"Photo/tbag1.jpeg"],
    ["id"=>8,"pname"=>"Round hat","price"=>700,"quality"=>5,"image"=>"Photo/hat1.jpg"],
    ["id"=>9,"pname"=>"Bag Travellers","price"=>800,"quality"=>5,"image"=>"Photo/tbag1.jpeg"],
    ["id"=>10,"pname"=>"Goggle Round","price"=>900,"quality"=>5,"image"=>"Photo/gogle1.jpg"],
    ["id"=>11,"pname"=>"Cap","price"=>900,"quality"=>5,"image"=>"Photo/caps1.jpg"],
    ["id"=>12,"pname"=>"Shoe Canvas Red","price"=>500,"quality"=>5,"image"=>"Photo/shoe1.jpg"]
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
            <!-- Including head tags and other scripting files. -->
<?php include('head.php')?>     
</head>
<body>
    <?php include('nav.php')?>
    <section class="p-4"></section>
    <section class="container">
    <h1 class="text-center">Our Products</h1><br>
        <!-- define the products on page in row. -->
        <div class='row'>
        <?php 
         foreach($products as $val){
             ?>
             <div class='col-sm-4'>
             <div class="card mb-2" style="width: 18rem;">
                <img src="<?php echo $val['image'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product ID :-<?php echo $val['id'];?></h5>
                    <h5 class="card-title">Name :-<?php echo $val['pname'];?></h5>
                    <p class="card-text">
                     <h6 class="card-title text-danger">Cost :- $ <?php echo $val['price'];?></h6>
                     <h6 class="card-title">Product Quality Ratings :- <?php echo $val['quality'];?></h6>
                    </p>
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                </div>
                </div>
             </div>
        
            <?php
         }
        ?>
        </div>
    </section>
    <section class="container-fluid">
        <!-- include footer file, for page footer -->
        <?php include('footer.php')?>
    </section>
    
    <?php include('foot.php')?>
</body>
</html>