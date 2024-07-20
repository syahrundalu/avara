<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i>info@kinaryaadikaaskari.com</li>
            <li><i class="fa fa-map"></i> Jl. Rose Garden Galaxy City 2/65 JakaSetia Bekasi Selatan</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/copy.png" alt="Logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="index.php#featured">Tentang Kami</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Layanan Kami</a>
                                <ul class="sub-menu">
                                    <li><a href="audio_specialist.php">Audio Specialist</a></li>
                                    <li><a href="hvac.php">HVAC</a></li>
                                    <li><a href="signage.php">Signage Specialist</a></li>
                                    <li><a href="facade.php">Facade Specialist</a></li>
                                    <li><a href="pipamekanikal.php">Pipa Mekanikal</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="contact.php">Hubungi Kami</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuTrigger = document.querySelector('.menu-trigger');
            const mainNav = document.querySelector('.main-nav .nav');

            menuTrigger.addEventListener('click', function() {
                mainNav.classList.toggle('active');
            });

            const submenuItems = document.querySelectorAll('.header-area .main-nav .nav li.has-sub');
            submenuItems.forEach(item => {
                item.addEventListener('click', function() {
                    const subMenu = this.querySelector('ul.sub-menu');
                    if (subMenu.style.height === '0px' || subMenu.style.height === '') {
                        subMenu.style.height = `${subMenu.scrollHeight}px`;
                    } else {
                        subMenu.style.height = '0px';
                    }
                });
            });
        });
    </script>
