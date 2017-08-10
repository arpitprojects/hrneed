<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-3 uk-grid-medium listNavWrapper" id="contact_list_v2" data-uk-grid-match="{target:'.md-card'}">
                <?php
                $companies = ['Goodwin-Nienow', 'Strosin Groupa', 'Schamberger PLC '];
                for($i=0;$i<48;$i++) {
                    $thisCompany = $companies[array_rand($companies)];
                    $userFname = $faker->firstName;
                    $userLname = $faker->lastName;
                    $thisEmail = $faker->email;
                    $thisPhone = $faker->phoneNumber;
                    $randImg = rand(1,12);
                ?>
                    <div class="uk-margin-medium-top">
                        <div class="md-card md-card-hover md-card-horizontal">
                            <div class="md-card-head">
                                <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="uk-text-center">
                                    <img class="md-card-head-avatar" src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>.png" alt=""/>
                                </div>
                                <h3 class="md-card-head-text uk-text-center">
                                    <?php echo $userFname; ?>
                                    <span class="listNavSelector"><?php echo $userLname; ?></span>
                                    <span class="uk-text-truncate"><?php echo $thisCompany ?></span>
                                </h3>
                            </div>
                            <div class="md-card-content">
                                <ul class="md-list">
                                    <li>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Info</span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(10);?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Email</span>
                                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $thisEmail; ?></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <span class="md-list-heading">Phone</span>
                                            <span class="uk-text-small uk-text-muted"><?php echo $thisPhone; ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>

        </div>
    </div>
