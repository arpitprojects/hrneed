<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-large-2-3 uk-container-center">
                <div class="timeline timeline-center">
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_success uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible', delay:300, repeat: true}"><i class="material-icons">&#xE85D;</i></div>
                        <div class="timeline_date uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible', delay:300}">
                            <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible', delay:300}">
                            <span class="timeline_content_info">Created ticket</span>
                            <a href="#"><strong>#3289</strong></a>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_danger uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible', delay:300, repeat: true}"><i class="material-icons">&#xE5CD;</i></div>
                        <div class="timeline_date uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible', delay:300}">
                            <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(14)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible', delay:300}">
                            <span class="timeline_content_info">Deleted post</span>
                            <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible', delay:300, repeat: true}"><i class="material-icons">&#xE410;</i></div>
                        <div class="timeline_date uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible', delay:300}">
                            <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(18)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible', delay:300}">
                            <span class="timeline_content_info">Added photo</span>
                            <div class="timeline_content_addon">
                                <img src="<?php echo $img_path ?>/gallery/Image01.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_primary uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible', delay:300, repeat: true}"><i class="material-icons">&#xE0B9;</i></div>
                        <div class="timeline_date uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible', delay:300}">
                            <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(20)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible', delay:300}">
                            <span class="timeline_content_info">New comment on post</span>
                            <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                            <div class="timeline_content_addon">
                                <blockquote>
                                    <?php echo $faker->sentence(20); ?>&hellip;
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="timeline_item">
                        <div class="timeline_icon timeline_icon_warning uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible', delay:300, repeat: true}"><i class="material-icons">&#xE7FE;</i></div>
                        <div class="timeline_date uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible', delay:300}">
                            <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('d'); ?>
                            <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                        </div>
                        <div class="timeline_content uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible', delay:300}">
                            <span class="timeline_content_info">Added to Friends</span>
                            <div class="timeline_content_addon">
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-2-3">
                    <h3 class="heading_a uk-margin-bottom">Regular</h3>
                    <div class="timeline">
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(14)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">Deleted post <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(18)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                Added photo
                                <div class="timeline_content_addon">
                                    <img src="<?php echo $img_path ?>/gallery/Image16.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(20)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                New comment on post <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                                <div class="timeline_content_addon">
                                    <blockquote>
                                        <?php echo $faker->sentence(20); ?>&hellip;
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                Added to Friends
                                <div class="timeline_content_addon">
                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <h3 class="heading_a uk-margin-bottom">Mini</h3>
                    <div class="timeline timeline_small uk-margin-bottom">
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(8)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(14)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">Deleted post <a href="#"><strong><?php echo $faker->sentence(6); ?></strong></a></div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(18)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                Added photo
                                <div class="timeline_content_addon">
                                    <img src="<?php echo $img_path ?>/gallery/Image16.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(20)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                New comment on post <a href="#"><strong><?php echo $faker->sentence(4); ?></strong></a>
                                <div class="timeline_content_addon">
                                    <blockquote>
                                        <?php echo $faker->sentence(10); ?>&hellip;
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                            <div class="timeline_date">
                                <?php $moment = new Moment\Moment(); echo $moment->startOf('month')->addDays(28)->format('d'); ?>
                                <span><?php $moment = new Moment\Moment(); echo $moment->format('M'); ?></span>
                            </div>
                            <div class="timeline_content">
                                Added to Friends
                                <div class="timeline_content_addon">
                                    <ul class="md-list md-list-addon">
                                        <li>
                                            <div class="md-list-addon-element">
                                                <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading"><?php echo $faker->firstNameFemale;?> <?php echo $faker->lastName;?></span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(4); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>