<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <ul class="top_bar_nav" id="list_grid_toggle">
                    <li class="uk-active" data-view="grid_view">
                        <a href="#"><i class="uk-icon-th-large"></i> Grid</a>
                    </li>
                    <li data-view="list_view">
                        <a href="#"><i class="uk-icon-list"></i> List</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">
                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" id="list_grid">
<?php
    for($i=0;$i<24;$i++) {
    $img_n = rand(0,3);
?>
                    <div class="uk-margin-medium-top">
                        <div class="md-card">
                            <div class="md-card-head uk-text-center uk-position-relative">
                                <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ <?php echo rand(450,600); ?>.00</div>
                                <img class="md-card-head-img" src="<?php echo $img_path?>/ecommerce/s6_edge<?php if($img_n > 0) { echo '_'.$img_n; };?>.jpg" alt=""/>
                            </div>
                            <div class="md-card-content">
                                <h4 class="heading_c uk-margin-bottom">
                                    <?php echo $faker->sentence(2); ?>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, est ipsa ipsum laboriosam maiores nihil non quis quisquam rem saepe!</p>
                                <a class="md-btn md-btn-small md-btn-success" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
<?php } ?>
            </div>
        </div>
    </div>
