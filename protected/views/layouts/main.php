<?php /* @var $this Controller */ ?>
<?php
     function isAdmin() {
            $user=User::model()->active()->findbyPk(Yii::app()->user->id);
            return UserModule::isAdmin();
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    
    <!-- yii-bootstrap3 -->
    <?php
    $cs = Yii::app()->clientScript;
    $themePath = Yii::app()->request->baseUrl;

    /**
    * StyleSHeets
    */
    $cs->registerCssFile($themePath . '/assets/css/blog.css');
    $cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
    $cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

    /**
    * JavaScripts
    */
    $cs->registerCoreScript('jquery', CClientScript::POS_END);
    $cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
    $cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
    $cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo $themePath . '/assets/js/html5shiv.min.js'; ?>"></script>
    <script src="<?php echo $themePath . '/assets/js/respond.min.js'; ?>"></script>
    <![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="padding-top: 70px;padding-bottom: 40px;">

<?php 
    $this->widget('bootstrap.widgets.BsNavbar', array(
    'collapse' => true,
    'brandLabel' => '<img src="assets/logo.png" height="32" style="margin-right:5px;display:inline-block;">'.CHtml::encode(Yii::app()->name),
    'brandUrl' => Yii::app()->homeUrl,
    'color' => BsHtml::NAVBAR_COLOR_INVERSE,
    'position' => BsHtml::NAVBAR_POSITION_FIXED_TOP,
    'htmlOptions' => array(
            'containerOptions' => array(
                'fluid' => true
            ),
    ),
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'Home',
                    'url' => array(
                        '/blog'
                    )
                    ),
                array(
                    'label' => 'Dealers',
                    'url' => array(
                        '/dealers',
                    )
                ),
                array(
                    'label' => 'My Favorites',
                    'url' => array(
                        '/UserFavorites',
                    ),
                    'visible' => !Yii::app()->user->isGuest
                ),
                array(
                    'label' => 'Contact Us',
                    'url' => array(
                        '/site/contact'
                    )
                ),
                   
                   )
        ),
        array(
            'class' => 'bootstrap.widgets.BsNav',
            'type' => 'navbar',
            'activateParents' => true,
            'items' => array(
                array(
                    'label' => 'Admin',
                    'visible' => isAdmin(),
                    'items' => array(
                    array(
                            'label' => 'Blog',
                            'url' => array(
                                '/blog/admin',
                            )
                        ),
                        array(
                            'label' => 'Dealers',
                            'url' => array(
                                '/dealers/admin',
                            )
                        ),
                        array(
                            'label' => 'User Favorites',
                            'url' => array(
                                '/UserFavorites/admin',
                            )
                        ),
                        array(
                            'label' => 'Ratings',
                            'url' => array(
                                '/dealerRatings/admin',
                            )
                        ),
                        array(
                            'label' => 'Users',
                            'url' => array(
                                '/user'
                            )
                        ),
                        array(
                            'label' => 'Rights',
                            'url' => array(
                                '/rights',
                            )
                        )
                        )
                        ),
                array(
                    'label' => 'Login',
                    'url' => array(
                        '/user/login'
                    ),
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'visible' => Yii::app()->user->isGuest
                ),
                array(
                    'label' => 'Logout (' . Yii::app()->user->name . ')',
                    'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,
                    'url' => array(
                        '/user/logout'
                    ),
                    'visible' => !Yii::app()->user->isGuest
                )
            ),
            'htmlOptions' => array(
                'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
            )
        )
        
    )
));
?>
<!-- mainmenu -->
<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php
        $this->widget('bootstrap.widgets.BsBreadcrumb', array(
            'links' => $this->breadcrumbs,
            // will change the container to ul
            'tagName' => 'ul',
            // will generate the clickable breadcrumb links
            'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
            // will generate the current page url : <li>News</li>
            'inactiveLinkTemplate' => '<li>{label}</li>',
            // will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
            'homeLink' => BsHtml::openTag('li') . BsHtml::icon(BsHtml::GLYPHICON_HOME) . BsHtml::closeTag('li')
        ));
        ?><!-- breadcrumbs -->
	<?php endif?>
    
	    <?php echo $content; ?>
    </div>
    <hr class="featurette-divider">
    <!-- FOOTER -->
    <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 ffldealers.org &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        <?php echo Yii::powered(); ?>
      </footer>
      </div>
<!-- page -->
</body>
</html>
