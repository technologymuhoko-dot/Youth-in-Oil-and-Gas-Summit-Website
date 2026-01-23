<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="top-header-info">
                    <ul>
                        <li><i class="bi bi-geo-alt"></i>Meersig-Walvis Bay</li>
                        <li><i class="bi bi-envelope-open"></i>info@yiogs.com.na</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="top-header-right">
                    <div class="top-header-contact">
                        <span><i class="bi bi-telephone-fill"></i>+264 81 216 5752</span>
                    </div>
                    <div class="top-header-social-icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Desktop Header Area -->
<div class="header-area d-none d-lg-block" id="sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('front_end/assets/images/home/logo.svg') }}" 
                             alt="logo" 
                             class="desktop-logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="header-menu">
                    <ul>
                        <li class="menu-item-has-children"><a href="/about">About Us <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/about/whywalvisbay">Why Walvis Bay?</a></li>
                                <li><a href="/about/why-now">Why Now?</a></li>
                                <li><a href="/about/welcome">Welcome</a></li>
                                <li><a href="/about/advisory-board">Advisory Board</a></li>
                            </ul>
                        </li>
                        <li><a href="/sponsor">Sponser/Exhibit</a></li>
                        <li class="menu-item-has-children"><a href="/programme">Programme<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/programme/schedule">Schedule</a></li>
                                <li><a href="/programme/call-for-papers">Call for Papers</a></li>
                            </ul>
                        </li>
                        <li><a href="/partners">Partners</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li class="menu-item-has-children"><a href="/recap">2025 Recap<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="/recap/gallery">Gallery</a></li>
                                <li><a href="/recap/report">Post-Event Report</a></li>
                                <li><a href="/recap/info">2025 info</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="header-secrch-icon search-box-outer">
                        <a href="#"><i class="bi bi-search"></i></a>
                    </div>
                    <div class="header-button">
                        <a href="contact.html">Early Bird Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Header with Logo on Left and Hamburger on Right -->
<div class="mobile-header-bar d-lg-none">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-2 px-3">
            <!-- Logo on Left - NOW VISIBLE -->
            <div class="mobile-logo-left">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('front_end/assets/images/home/logo.svg') }}" alt="logo" class="mobile-top-logo">
                </a>
            </div>
            
            <!-- Hamburger Menu on Right -->
            <button id="mobile-menu-btn" class="btn btn-light">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>
</div>

<!-- Mobile Menu Overlay & Sidebar - NOW ON RIGHT SIDE -->
<div class="mobile-menu-wrapper d-lg-none" id="mobile-menu">
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-sidebar">
        <!-- Mobile Menu Header - Logo on left, Close button on right -->
        <div class="mobile-menu-header">
            <!-- Logo on left -->
            <div class="mobile-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('front_end/assets/images/home/logo.svg') }}" alt="logo" class="mobile-menu-logo">
                </a>
            </div>
            <!-- Close button on right -->
            <button class="btn-close-menu" id="mobile-menu-close">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- Mobile Menu Content -->
        <div class="mobile-menu-content">
            <!-- Contact Information -->
            <div class="mobile-contact-info mb-4 pb-3 border-bottom">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Meersig-Walvis Bay</li>
                    <li class="mb-2"><i class="bi bi-envelope-open me-2"></i>info@yiogs.com.na</li>
                    <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+264 81 216 5752</li>
                </ul>
            </div>

            <!-- Navigation Menu -->
            <nav class="mobile-navigation">
                <ul class="list-unstyled mb-0">
                    <li class="menu-item-has-children">
                        <a href="/about" class="d-flex justify-content-between align-items-center">
                            About Us <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu list-unstyled">
                            <li><a href="/about/whywalvisbay">Why Walvis Bay?</a></li>
                            <li><a href="/about/why-now">Why Now?</a></li>
                            <li><a href="/about/welcome">Welcome</a></li>
                            <li><a href="/about/advisory-board">Advisory Board</a></li>
                        </ul>
                    </li>
                    <li><a href="/sponsor">Sponsor/Exhibit</a></li>
                    <li class="menu-item-has-children">
                        <a href="/programme" class="d-flex justify-content-between align-items-center">
                            Programme <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu list-unstyled">
                            <li><a href="/programme/schedule">Schedule</a></li>
                            <li><a href="/programme/call-for-papers">Call for Papers</a></li>
                        </ul>
                    </li>
                    <li><a href="/partners">Partners</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="/recap" class="d-flex justify-content-between align-items-center">
                            2025 Recap <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu list-unstyled">
                            <li><a href="/recap/gallery">Gallery</a></li>
                            <li><a href="/recap/report">Post-Event Report</a></li>
                            <li><a href="/recap/info">2025 info</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Search Icon -->
            <div class="mobile-search my-3">
                <a href="#" class="d-flex align-items-center">
                    <i class="bi bi-search me-2"></i> Search
                </a>
            </div>

            <!-- Early Bird Button -->
            <div class="mobile-cta-button my-4">
                <a href="contact.html" class="btn btn-primary w-100">Early Bird Booking</a>
            </div>

            <!-- Social Media Icons -->
            <div class="mobile-social-icons pt-3 border-top">
                <ul class="list-unstyled d-flex gap-3 mb-0">
                    <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
/* Desktop Logo - Responsive Sizing */
.desktop-logo {
    max-height: 70px;
    width: auto;
    transition: max-height 0.3s ease;
}

@media (max-width: 1400px) {
    .desktop-logo {
        max-height: 60px;
    }
}

@media (max-width: 1200px) {
    .desktop-logo {
        max-height: 50px;
    }
}

/* Header Menu Styling */
.header-menu {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.header-menu ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    align-items: center;
}

.header-menu > ul > li {
    margin: 0 5px;
}

.header-menu > ul > li > a {
    display: block;
    padding: 10px 8px;
    font-size: 15px;
    text-decoration: none;
    white-space: nowrap;
}

.header-secrch-icon {
    margin: 0 8px;
}

.header-button {
    margin-left: 8px;
}

@media (max-width: 1400px) {
    .header-menu > ul > li {
        margin: 0 3px;
    }
    
    .header-menu > ul > li > a {
        padding: 10px 6px;
        font-size: 14px;
    }
    
    .header-secrch-icon {
        margin: 0 5px;
    }
    
    .header-button {
        margin-left: 5px;
    }
    
    .header-button a {
        font-size: 13px;
        padding: 8px 12px;
    }
}

@media (max-width: 1200px) {
    .header-menu > ul > li {
        margin: 0;
    }
    
    .header-menu > ul > li > a {
        padding: 10px 4px;
        font-size: 13px;
    }
    
    .header-button a {
        font-size: 12px;
        padding: 8px 8px;
    }
    
    .header-secrch-icon {
        margin: 0 2px;
    }
    
    .header-button {
        margin-left: 2px;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .top-header-area {
        display: block;
    }
    
    .desktop-logo {
        max-height: 45px;
        display: block;
        margin: 0 auto;
    }
    
    .header-logo {
        text-align: center;
    }
    
    .header-menu > ul > li {
        margin: 0;
    }
    
    .header-menu > ul > li > a {
        padding: 10px 2px;
        font-size: 11px;
    }
    
    .header-button a {
        font-size: 11px;
        padding: 6px 8px;
    }
    
    .header-secrch-icon {
        font-size: 12px;
    }
}

/* Mobile Header Bar - LOGO NOW VISIBLE ON LEFT */
.mobile-header-bar {
    position: sticky;
    top: 0;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    z-index: 998;
}

/* Logo on left side - NOW VISIBLE */
.mobile-logo-left {
    display: flex;
    align-items: center;
}

.mobile-logo-left .mobile-top-logo {
    height: 40px;
    width: auto;
    max-width: 200px;
    display: block;
}

/* Ensure logo is visible */
.mobile-top-logo {
    height: 40px !important;
    width: auto !important;
    max-width: 200px !important;
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
}

#mobile-menu-btn {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    border: 1px solid #dee2e6;
}

#mobile-menu-btn i {
    font-size: 22px;
}

/* Mobile Menu Wrapper */
.mobile-menu-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    visibility: hidden;
}

.mobile-menu-wrapper.active {
    visibility: visible;
}

/* Overlay */
.mobile-menu-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.mobile-menu-wrapper.active .mobile-menu-overlay {
    opacity: 1;
}

/* Sidebar - NOW ON RIGHT SIDE */
.mobile-menu-sidebar {
    position: absolute;
    top: 0;
    right: 0; /* Changed from left: 0 to right: 0 */
    width: 320px;
    max-width: 85%;
    height: 100%;
    background: #fff;
    transform: translateX(100%); /* Changed from -100% to 100% */
    transition: transform 0.3s ease;
    overflow-y: auto;
    box-shadow: -2px 0 15px rgba(0,0,0,0.2); /* Changed shadow direction */
}

.mobile-menu-wrapper.active .mobile-menu-sidebar {
    transform: translateX(0); /* Now slides in from right */
}

/* Mobile Menu Header */
.mobile-menu-header {
    position: sticky;
    top: 0;
    background: #fff;
    z-index: 10;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 70px;
}

/* Mobile Logo in Menu Header */
.mobile-menu-header .mobile-logo img.mobile-menu-logo {
    height: 40px !important;
    width: auto !important;
    max-width: 150px;
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
}

.btn-close-menu {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    padding: 5px;
    color: #333;
    transition: color 0.3s ease;
}

.btn-close-menu:hover {
    color: #dc3545;
}

/* Mobile Menu Content */
.mobile-menu-content {
    padding: 20px;
}

/* Contact Info */
.mobile-contact-info li {
    font-size: 14px;
    color: #6c757d;
}

.mobile-contact-info i {
    color: #0d6efd;
    width: 20px;
}

/* Navigation */
.mobile-navigation > ul > li {
    border-bottom: 1px solid #e9ecef;
}

.mobile-navigation > ul > li > a {
    display: block;
    padding: 15px 0;
    color: #212529;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.mobile-navigation > ul > li > a:hover {
    color: #0d6efd;
}

.mobile-navigation .menu-item-has-children > a i {
    font-size: 12px;
    transition: transform 0.3s ease;
}

.mobile-navigation .menu-item-has-children.active > a i {
    transform: rotate(180deg);
}

/* Submenu */
.mobile-navigation .sub-menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    padding-left: 20px;
}

.mobile-navigation .menu-item-has-children.active .sub-menu {
    max-height: 500px;
}

.mobile-navigation .sub-menu li {
    border-bottom: none;
}

.mobile-navigation .sub-menu li a {
    display: block;
    padding: 10px 0;
    color: #6c757d;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}

.mobile-navigation .sub-menu li a:hover {
    color: #0d6efd;
}

/* Search */
.mobile-search a {
    color: #212529;
    text-decoration: none;
    font-weight: 500;
    padding: 10px 0;
}

.mobile-search a:hover {
    color: #0d6efd;
}

/* Social Icons */
.mobile-social-icons ul li a {
    width: 40px;
    height: 40px;
    background: #f8f9fa;
    border-radius: 50%;
    color: #212529;
    transition: all 0.3s ease;
    text-decoration: none;
}

.mobile-social-icons ul li a:hover {
    background: #0d6efd;
    color: #fff;
}

/* Body scroll lock when menu is open */
body.mobile-menu-open {
    overflow: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuClose = document.getElementById('mobile-menu-close');
    const menuOverlay = document.querySelector('.mobile-menu-overlay');
    const menuItems = document.querySelectorAll('.mobile-navigation .menu-item-has-children > a');

    // Open menu
    if (menuBtn) {
        menuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            document.body.classList.add('mobile-menu-open');
        });
    }

    // Close menu function
    function closeMenu() {
        mobileMenu.classList.remove('active');
        document.body.classList.remove('mobile-menu-open');
    }

    // Close button
    if (menuClose) {
        menuClose.addEventListener('click', closeMenu);
    }

    // Click overlay to close
    if (menuOverlay) {
        menuOverlay.addEventListener('click', closeMenu);
    }

    // Toggle submenu
    menuItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const parent = this.parentElement;
            
            // Close other open submenus
            document.querySelectorAll('.mobile-navigation .menu-item-has-children').forEach(function(el) {
                if (el !== parent) {
                    el.classList.remove('active');
                }
            });
            
            // Toggle current submenu
            parent.classList.toggle('active');
        });
    });

    // Close menu on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMenu();
        }
    });
});
</script>