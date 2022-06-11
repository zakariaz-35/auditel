<?php
    if(isset($_GET['id'])){
        $lignes = $connection->select('select * from service where id = '.$_GET['id']);
        $service = $lignes[0];
        var_dump($lignes);
    }else{
        header('location:index.php');
    }
?>
        <div class="row align-items-center justify-content-center blog">
            
          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img text-center ">
                <img style="width: 100%;" src="assets/img/service/<?php echo $service['media'] ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html"><?php echo $service['Nom'] ?></a>
              </h2>


              <div class="entry-content">
                <p>
                    <?php echo $service['description'] ?>
                </p>
              </div>

            </article><!-- End blog entry -->
          </div>
        </div>
        <?php include_once('fournissers.php'); ?>