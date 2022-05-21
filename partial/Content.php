<div class="container mw-body p-4 is-max-desktop" id="content">
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo $this->getSkin()->getConfig()->get( 'StylePath' ) . htmlspecialchars( '/Pure/assets/images/hacker.mp4' ) ?>" type="video/mp4">
    </video>
    <div class="columns mt-2 mw-title">
        <div class="column is-full">
            <h1 class="title"><?php $this->html('title'); ?></h1>
        </div>

    </div>
    <div class="columns">
        <div class="column is-full">
            <?php echo $this->getIndicators(); ?>
        </div>
    </div>
    <div class="columns" id="bodyContent">
        <div class="column is-full" id="bodyContent">
            <?php
            $this->html('bodytext');
            $markers = array("<h1", "<h2", "<h3");
            $tags = array('<h1 class="title is-4"', '<h2 class="title is-5"', '<h3 class="title is-6"');
            $body = str_replace($markers, $tags, $out);
            // $this->html('bodytext'); 
            echo $body;
            ?>
        </div>
    </div>
    <div class="columns">
        <div class="column is-full">
            <?php $this->html('catlinks'); ?>
        </div>
    </div>
    <div class="columns">
        <div class="column is-full">
            <?php $this->html('dataAfterContent'); ?>
        </div>
    </div>
</div>
