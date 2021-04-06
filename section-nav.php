<!-- NAVBAR -->
<nav class="nvbr">
        <div class="container-fluid nvbr__container">
            
            <div class="nvbr__div nvbr-logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/envx-logo.png" alt="ENVX" class="nvbr-logo__img">
            </div>
            
            <div class="nvbr__div nvbr-menu">
                <ul class="nvbr-menu__ul">
                    <li class="nvbr-menu__li"><a href="<?php echo home_url(); ?>" class="nvbr-menu__link"> <span class="nvbr-menu__span">Home</span> </a></li>
                    <li class="nvbr-menu__li"><a href="http://envx.test/category/blog/" class="nvbr-menu__link"> <span class="nvbr-menu__span">Blog</span></a></li>
                    <li class="nvbr-menu__li nvbr-menu-dropdown">
                        <a href="#" class="nvbr-menu__link">
                            <span class="nvbr-menu__span">Category</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/dropdown-caret.png" alt="ENVX Product Category" class="nvbr-menu__caret">
                        </a>
                        <ul class="nvbr-menu-dropdown__ul ">
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="#" class="nvbr-menu-dropdown__link">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/full-face-helmet.png" alt="FULL FACE HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">FULL FACE HELMET</span>
                                </a>
                            </li>
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="#" class="nvbr-menu-dropdown__link">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/modular-helmet.png" alt="MODULAR HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">MODULAR HELMET</span>
                                </a>
                            </li>
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="#" class="nvbr-menu-dropdown__link">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/half-face-helmet.png" alt="HALF FACE HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">HALF FACE HELMET</span>
                                </a>
                            </li>                                                        
                        </ul>
                    </li>
                    <li class="nvbr-menu__li"><a href="#" class="nvbr-menu__link"><span class="nvbr-menu__span">Contact</span></a></li>
                </ul>
            </div>

            <div class="nvbr__div nvbr-info">
                <div class="nvbr-info__div nvbr-currency">
                    <select name="" id="" class="nvbr-currency__select">
                        <option value="USD" class="nvbr-currency__choices">USD</option>
                        <option value="PHP" class="nvbr-currency__choices">PHP</option>
                    </select>
                </div>

                <div class="nvbr-info__div nvbr-search">
                    <form action="" class="nvbr-search__form">
                        <input type="text" class="nvbr-search__input" placeholder="Search">
                        <button class="nvbr-search__btn">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/search-icon.png" alt="" class="nvbr-search__img">
                        </button>
                    </form>
                </div>
       
            </div>

            <div class="nvbr__div nvbr-hamburger">
                <div class="hamburger" id="navburger">
                    <span class="hamburger__span"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- NAVBAR MARGIN (FOR STICKY HEADER) -->
    <div class="nvbr-margin"></div>

    <!-- SIDEBAR (MOBILE) -->
    <aside class="sdbr">
        <div class="sdbr__div sdbr-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/envx-logo.png" alt="ENVX" class="sdbr-logo__img">

            <div class="hamburger" id="sidebarburger">
                <span class="hamburger__span"></span>
            </div>            
        </div>

        <div class="sdbr__div sdbr-info">
            <div class="sdbr-info__div sdbr-search">
                <form action="" class="sdbr-search__form">
                    <input type="text" class="sdbr-search__input" name="search" placeholder="Search">
                    <button class="sdbr-search__btn">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/search-icon.png" alt="" class="sdbr-search__img">
                    </button>
                </form>
            </div>            
        </div>

        <div class="sdbr__div sdbr-menu">
            <ul class="sdbr-menu__ul">
                <li class="sdbr-menu__li"><a href="<?php echo home_url(); ?>" class="sdbr-menu__link"><span class="sdbr-menu__span">Home</span></a></li>
                <li class="sdbr-menu__li"><a href="http://envx.test/category/blog/" class="sdbr-menu__link"><span class="sdbr-menu__span">Blog</span></a></li>
                <li class="sdbr-menu__li sdbr-dropdown" id="productCategory">
                    <a href="#" class=" sdbr-menu__link ">
                        <span class="sdbr-menu__span">Category</span>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/dropdown-caret.png" alt="" class="sdbr-menu__caret" id="sdbrcaret" data-dropdown="productCategory">
                    </a>
                    <ul class="sdbr-dropdown__ul">
                        <li class="sdbr-dropdown__li">
                            <a href="" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/full-face-helmet.png" alt="FULL FACE HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">FULL FACE HELMET</span>
                            </a>
                        </li>
                        <li class="sdbr-dropdown__li">
                            <a href="" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/modular-helmet.png" alt="MODULAR HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">MODULAR HELMET</span>
                            </a>
                        </li>
                        <li class="sdbr-dropdown__li">
                            <a href="" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/half-face-helmet.png" alt="HALF FACE HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">HALF FACE HELMET</span>
                            </a>
                        </li>                                                
                    </ul>
                </li>
                <li class="sdbr-menu__li"><a href="#" class="sdbr-menu__link"><span class="sdbr-menu__span">Contact</span></a></li>
            </ul>
        </div>

    </aside>

    <!-- SIDEBAR OVERLAY -->
    <div class="sdbr-overlay"></div>