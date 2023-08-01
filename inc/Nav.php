<nav class="nav-wrapper">

    <div class="nav-inner">
        <div class="nav-brand">
            <a href="/"><img src="/assets/img/logo/logo.svg" alt="Parrot Media Logo" /></a>
        </div>
        <div class="nav-links" data-state="closed">
            <div class="nav-links-header">
                <button class="btn-close" aria-label="Close Menu" id="nav-close"><svg class="feather">
                        <use xlink:href="/assets/icons/feather.svg#x"></use>
                    </svg></button>

            </div>
            <ul class="nav-menu">
            <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0):?>
                <li>
                    <a href="cart" aria-label="view shopping cart" class="nav-cart">
                        <div class="cart-icon">
                            <svg class="feather ">
                                <use xlink:href="/assets/icons/feather.svg#shopping-cart"></use>
                            </svg>
                            <span class="cart-item-count"><?php echo count($_SESSION['cart']);?></span>
                        </div>
                    </a>
                </li>
                <?php endif;?>
                <li>
                    <a class="" href="/">Home</a>
                </li>
                <li>
                    <a class="" href="../website-design-lincolnshire">Websites</a>
                </li>
                <li>
                    <a class="" href="../website-design-lincolnshire#pricing">Pricing</a>
                </li>

                <li>
                    <a class="" href="../website-portfolio">Portfolio</a>
                </li>

                <li>
                    <a class="" href="../about">About Us</a>
                </li>
                <li>
                    <a class="" href="contact">Contact Us</a>
                </li>

                <li>
                    <a class="cta" href="">Weddings</a>
                </li>
            </ul>

        </div>
        <div class="nav-btn-wrapper">
            <button class="nav-btn" aria-controls="nav-menu" id="nav-open" type="button">
                <svg class="lines" viewBox="0 0 100 100" width="50">
                    <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                    <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                    <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>
                </svg>
            </button>
        </div>
    </div>
</nav>