<header style="background-color: #242424; color: #fff" class="u-box-shadow u-clearfix u-header u-header" id="sec-68d1">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="musteri.php" class="u-image u-logo u-image-1">
            <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                    href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>

            <?php
            include("baglan.php");
            $KullaniciID = $_SESSION["KullaniciID"];
            // 1 yerine hafızadaki idyi yazdırcaz DÜZENLENECEK
            $sorgu = "SELECT Adi FROM `kullanicilar` WHERE KullaniciID= $KullaniciID ";
            $sonuc = mysqli_query($conn, $sorgu);

            if ($sonuc) {
                $sutun = mysqli_fetch_assoc($sonuc);
                $adimiz = $sutun['Adi'];
                ?>

                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base"
                                style="padding: 10px 20px;">
                                <?php echo $adimiz; ?>
                            </a>

                        <?php }
            ?>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="order.php">Siparişlerim</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="hesap.php">Hesabım</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="#">Yardım Merkezi</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="logout.php">Çıkış Yap </a>
                                </li>
                            </ul>
                        </div>



                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">user_name</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="#">Siparişlerim</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Hesabım</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Yardım
                                                Merkezi</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="logout.php">Çıkış Yap</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav><span class="u-file-icon u-icon u-icon-1" data-href="#"><img src="images/102665.png" alt=""></span>
    </div>
    
</header>

