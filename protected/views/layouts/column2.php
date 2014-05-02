<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8">
	        <div id="content">
		        <?php echo $content; ?>
	        </div><!-- content -->
        </div>
    <div class="col-md-3 col-sm-4">
        <h1>&nbsp;</h1>
	    <?php
            $this->beginWidget('bootstrap.widgets.BsPanel', array(
                'title' => '<strong>Tasks</strong>'
            ));
            echo BsHtml::stackedPills(
                $this->menu
            );
            $this->endWidget();
	    ?>
        <!-- sidebar -->
        </div>
    </div>
</div>
<?php $this->endContent(); ?>