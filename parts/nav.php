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
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#banner">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pizza">Pizza</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php endif; ?>