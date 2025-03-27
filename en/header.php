<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top" id="navbar-custom">
    <div class="header-top">
        <div style="padding-right: 4%;padding-left: 4%;">
            <div class="flex-row justify-end">
                <div class="language-switcher">
                    <a href="/" class="lang-btn">
                        <svg class="flag-icon" viewBox="0 0 1200 800">
                            <rect width="1200" height="800" fill="#E30A17"/>
                            <circle cx="425" cy="400" r="200" fill="#ffffff"/>
                            <circle cx="475" cy="400" r="160" fill="#E30A17"/>
                            <polygon points="583.334,400 764.235,458.779 652.431,304.894 652.431,495.106 764.235,341.221" fill="#ffffff"/>
                        </svg>
                        TR
                    </a>
                    <a href="/en/" class="lang-btn active">
                        <svg class="flag-icon" viewBox="0 0 60 30">
                            <clipPath id="s">
                                <path d="M0,0 v30 h60 v-30 z"/>
                            </clipPath>
                            <path d="M0,0 v30 h60 v-30 z" fill="#012169"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#s)" stroke="#C8102E" stroke-width="4"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                        </svg>
                        EN
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-right: 4%;padding-left: 4%;">
        <!-- Logo and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#navbar-brand" data-toggle="collapse" type="button"><i class="fa fa-bars"></i></button> <!-- Logo -->
            <div class="navbar-brand page-scroll">
                <a href="index.php"><img alt="" class="img-responsive" src="https://cbmd.org.tr/uploads/logo.png"></a>
            </div>
        </div><!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand">
            <ul class="nav navbar-nav page-scroll navbar-right">
                <li class="<?php echo $page == 'index' ? 'active' : '' ?>">
                    <a href="/en/index.php">Home</a>
                </li>
                <li class="<?php echo $page == 'invitation' ? 'active' : '' ?>">
                    <a href="/en/invitation.php">Invitation</a>
                </li>
                <li class="<?php echo $page == 'committees' ? 'active' : '' ?>">
                    <a href="/en/committees.php">Committees</a>
                </li>
                <li class="<?php echo $page == 'general-information' ? 'active' : '' ?>">
                    <a href="/en/general-information.php">General Information</a>
                </li>
                <li class="<?php echo $page == 'registration-accommodation' ? 'active' : '' ?>">
                    <a href="/en/registration-accommodation.php">Registration & Accommodation</a>
                </li>
                <li class="<?php echo $page == 'program' ? 'active' : '' ?>">
                    <a href="/en/program.php">Scientific Program</a>
                </li>
                <li class="<?php echo $page == 'abstract' ? 'active' : '' ?>">
                    <a href="/en/abstract-submission.php">Abstract Submission</a>
                </li>
                <li class="<?php echo $page == 'contact' ? 'active' : '' ?>">
                    <a href="/en/contact.php">Contact</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /container -->
</nav><!-- /nav -->

<style>
.language-switcher {
    text-align: right;
}

.lang-btn {
    display: inline-flex;
    align-items: center;
    padding: 5px 10px;
    margin: 0 5px;
    color: #004e68;
    text-decoration: none;
    border: 1px solid #004e68;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.lang-btn:hover, .lang-btn.active {
    background-color: #004e68;
    color: #fff;
}

.flag-icon {
    width: 20px;
    height: 15px;
    margin-right: 5px;
    border: 1px solid #ddd;
}

.lang-btn:hover .flag-icon {
    border-color: #fff;
}

@media (max-width: 768px) {
    .language-switcher {
        text-align: center;
        padding: 5px 0;
    }
    
    .lang-btn {
        padding: 3px 8px;
        font-size: 12px;
    }
    
    .flag-icon {
        width: 16px;
        height: 12px;
    }
    .d-md-hidden{
        display:none !important;
    }
}
@media (min-width:768px) {
    .d-sm-block{
        display: none !important;
    }
}
</style>
