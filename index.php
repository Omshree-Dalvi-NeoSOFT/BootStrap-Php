<?php 

 $profiles = [
     ["image"=>"Photo/profile1.jpg","heading"=>"Olivia Emma","bio"=>"Daily affirmations have long been used to boost self-esteem. They compel people to start their days on the right foot. But while letting a smile be your umbrella might fortify your positive attitude, it’s not going to inspire your business ventures.","link"=>""],
     ["image"=>"Photo/profile2.jpg","heading"=>"Jocab Biden","bio"=>"To all the entrepreneurs and go-getters out there, these 30 inspiring business quotes are for you. Now, get out there and change the world—one project at a time!","link"=>""],
     ["image"=>"Photo/profile3.jpg","heading"=>"Amelia Mia","bio"=>"The brand that gave us “Just do it!” qualifies that tagline, which always felt a bit broad, to include boundaries. You can’t “just do it” without regard to the rules, as Knight clearly states. Those rules are what level the playing field and protect fair competition. But rules have nothing to do with the passion in which you play within them.","link"=>""],
     ["image"=>"Photo/profile4.jpg","heading"=>"James Benjamin","bio"=>"Branson’s Virgin has proven that from record labels to airlines, where there is a will there is a way. The door isn’t always open, but sometimes it’s ajar or the key is on the floor. All you must do is pick it up and turn the lock. Basically, the right environment for success ebbs and flows, but a keen businessperson is never passive.","link"=>""],
     ["image"=>"Photo/profile1.jpg","heading"=>"Olivia Emma","bio"=>"Daily affirmations have long been used to boost self-esteem. They compel people to start their days on the right foot. But while letting a smile be your umbrella might fortify your positive attitude, it’s not going to inspire your business ventures.","link"=>""],
     ["image"=>"Photo/profile2.jpg","heading"=>"Jocab Biden","bio"=>"To all the entrepreneurs and go-getters out there, these 30 inspiring business quotes are for you. Now, get out there and change the world—one project at a time!","link"=>""],
     ["image"=>"Photo/profile4.jpg","heading"=>"James Benjamin","bio"=>"Branson’s Virgin has proven that from record labels to airlines, where there is a will there is a way. The door isn’t always open, but sometimes it’s ajar or the key is on the floor. All you must do is pick it up and turn the lock. Basically, the right environment for success ebbs and flows, but a keen businessperson is never passive.","link"=>""],
     ["image"=>"Photo/profile3.jpg","heading"=>"Amelia Mia","bio"=>"The brand that gave us “Just do it!” qualifies that tagline, which always felt a bit broad, to include boundaries. You can’t “just do it” without regard to the rules, as Knight clearly states. Those rules are what level the playing field and protect fair competition. But rules have nothing to do with the passion in which you play within them.","link"=>""]
 ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php')?>
</head>
<body>
    <?php include('nav.php')?>
    <section class="p-1"></section>
    <section class="container">
    <div class="jumbotron">
  <h1 class="display-4">Hello, buddies!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="products.php" role="button">Shop Now</a>
  </p>
</div>

    <?php 
        foreach($profiles as $val){
    ?>
    <div class="row g-0 bg-light position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="<?php echo $val['image'];?>" class="w-100" alt="...">
        </div>
        <div class="col-md-6 p-4 ps-md-0">
            <h2 class="mt-4"><?php echo $val['heading'];?></h2>
            <p class="mt-4"><?php echo $val['bio'];?></p>
            <button type="submit" class="btn btn-primary mb-3">Visit Profile</button>
        </div>
    </div>
    <section class="p-2"></section>
    <?php 
        };
    ?>

    </section>
    <section class="container-fluid">
    <?php include('footer.php')?>
    </section>
    <?php include('foot.php')?>
</body>
</html>