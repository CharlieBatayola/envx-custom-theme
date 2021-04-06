
    <div class="owl-carousel hdrcarousel">
        <div class="item">

        <?php for($i=0;$i<2;$i++): ?>
            <!-- SLIDE -->
            <div class="hdrslide background">
                <div class="container hdrslide__container">

                    <div class="hdrslide__div hdrslide-info">
                        <h1 class="hdrslide-info__title">Teixeira <br> Adventure</h1>
                        <p class="hdrslide-info__desc">Advanced Polycarbonate </p>
                        <p class="hdrslide-info__desc">Composite Shell</p>
                    </div>
                    
                    <div class="hdrslide__div hdrslide-pic">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/header-ftproduct.png" alt="Teixeira Adventure" class="hdrslide-pic__img">
                    </div>
                    
                    <div class="hdrslid__div hdrslide-cta">
                        <div class="hdrslide-cta__div">
                            <p class="hdrslide-cta__p hdrslide-cta__p--color">Color <img src="<?php bloginfo('template_directory'); ?>/assets/img/color-sample.png" alt="" class="hdrslide-cta__img"></p>
                            <p class="hdrslide-cta__p">Price <span>$125.9</span></p>
                            <a href="#" class="btn-setup btn-setup--orange hdrslide-cta__btn">View Product</a>
                        </div>
                        <div class="hdrslide-cta__div hdrslide-ctashare">
                            <a href="#" class="btn-setup btn-setup--white hdrslide-cta__sharebtn">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/share-icon.png" alt="Share Product">
                            </a>
                        </div>
                    </div>
                
                </div>
            </div>

        </div>
        <?php endfor; ?>
     
    </div>
</header>
