<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 video-box">
        <a href="./view/showBerita.php?Id_Berita=<?php echo $obj->getID() ?>"><img src="<?php echo $obj->getUrl(); ?>" class="img-fluid" alt="" style="width:700px"></a>
    </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
            <div class="test">
                <h4 class="title"><a href="./view/showBerita.php?Id_Berita=<?php echo $obj->getID()?>"><?php echo $obj->getJudul(); ?></a></h4>
                <p class="description"><?php echo $obj->getTanggal(); ?></p>
            </div>
        </div>
    </div>
    </div>
</section>