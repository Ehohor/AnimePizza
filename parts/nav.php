<?php
$content = convertContentToAssoc(db_select(
    from:"content",
    conditions: "name = 'navigation'"
));
if (!empty($content['navigation'])):
?>
<header id="header">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div id="logo">
                <a href="<?= $content['navigation']['logo']['link'] ?>">
                    <img src="<?= ASSETS_URI . $content['navigation']['logo']['image']?>" alt="Logo"/>
                </a>
            </div>
            <nav id="nav-menu-container">
                <!-- <?php if (!empty($content['navigation']['links'])): ?>
                    <ul class="nav-menu">
                        <?php foreach ($content['navigation']['links'] as $key => $link): ?>
                            <li class="<?= ($key === 0 ? 'menu-active' : '') ?>">
                                <a href="<?= ($link['ancor'] ? $link['href'] : DOMAIN . $link['href']) ?>"
                                ><?= $link['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?> -->
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#banner">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pizza">Pizza</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                    <li>|</li>
                    <li><a href="<?= DOMAIN ?>/login">Sign In</a></li>
                    <li><a href="<?= DOMAIN ?>/register">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php endif; ?>