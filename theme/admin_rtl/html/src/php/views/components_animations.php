<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-xlarge-1-2">
                    <h3 class="heading_a uk-margin-bottom">Hierarchical Show</h3>
                    <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium hierarchical_show" data-uk-grid-margin id="hierarchical-show">
                        <?php for($i=0;$i<10;$i++) { ?>
                            <div>
                                <div class="md-card">
                                    <div class="md-card-content">
                                        <?php echo $faker->sentence(10); ?>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
                <div class="uk-width-xlarge-1-2">
                    <h3 class="heading_a uk-margin-bottom">Hierarchical Slide</h3>
                    <div class="md-card-list-wrapper">
                        <div class="md-card-list">
                            <ul class="hierarchical_slide" id="hierarchical-slide">
                                <?php for($i=0;$i<10;$i++) { ?>
                                    <li>
                                        <?php echo $faker->sentence(20); ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-danger" href="#" id="replay-animations">
            <i class="material-icons">&#xE042;</i>
        </a>
    </div>