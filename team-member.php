<!-- Header area -->
<?php include("common/header.php");?>
<!-- Header area -->
<?php $pages = _fetch("pages","pg_name='about-us'");?>
  </header>
  <!-- ====== About Section Start -->
  <section class="pt-20 overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <img style="width:90%;height:400px;object-fit:fill" src="admin/upload/image.png" alt="">
        </div>

        <div class="w-full lg:w-1/2 xl:w-5/12">
          <div class="lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
              Why Choose Us
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
            <?php echo $pages['title']?>
            </h2>
            <?php echo $pages['content']?>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
  <!-- Header area -->
  <?php include("common/footer.php");?>
<!-- Header area -->