<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_heading">
            <div class="heading_actions uk-visible-large">
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Print"><i class="md-icon material-icons">&#xE8AD;</i></a>
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Archive"><i class="md-icon material-icons">&#xE149;</i></a>
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Spam"><i class="md-icon material-icons">&#xE160;</i></a>
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Delete"><i class="md-icon material-icons">&#xE872;</i></a>
                <div data-uk-dropdown>
                    <a href="#" data-uk-tooltip="{pos:'top'}" title="Move to"><i class="md-icon material-icons">&#xE2C7;</i></a>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Other Action</a></li>
                            <li><a href="#">Other Action</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="heading_actions uk-hidden-large">
                <div data-uk-dropdown>
                    <a href="#"><i class="md-icon material-icons">&#xE5D4;</i></a>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Archive</a></li>
                            <li><a href="#">Spam</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div data-uk-dropdown>
                    <a href="#"><i class="md-icon material-icons">&#xE2C7;</i></a>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Other Action</a></li>
                            <li><a href="#">Other Action</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1>Inbox</h1>
            <span class="uk-text-muted uk-text-upper uk-text-small">247 messages</span>
        </div>
        <div class="uk-clearfix uk-position-relative">
            <aside id="page_aside" class="page_aside md-bg-grey-200">
                <div class="page_aside_inner">
                    <ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="{multiple:true}">
                        <li class="uk-active"><a href="#"><i class="material-icons">&#xE0E1;</i>Inbox</a></li>
                        <li><a href="#"><i class="material-icons">&#xE151;</i>Drafts</a></li>
                        <li><a href="#"><i class="material-icons">&#xE872;</i>Deleted Items</a></li>
                        <li><a href="#"><i class="material-icons">&#xE002;</i>Junk e-mail</a></li>
                        <li><a href="#"><i class="material-icons">&#xE149;</i>Archive</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header">Labels</li>
                        <li><a href="#"><span class="uk-nav-label md-bg-orange-500"></span>Work</a></li>
                        <li><a href="#"><span class="uk-nav-label md-bg-green-500"></span>Family</a></li>
                        <li><a href="#"><span class="uk-nav-label md-bg-red-500"></span>Important</a></li>
                        <li><a href="#"><span class="uk-nav-label md-bg-blue-500"></span>TODO</a></li>
                    </ul>
                </div>
                <div class="page_aside_toggle"></div>
            </aside>
            <div id="page_overflow">
                <div class="uk-overflow-container">
                    <table class="uk-table uk-table-nowrap uk-table-hover md-bg-white" id="mailboxV2">
                        <tbody>
                        <?php for($i=0;$i<48;$i++) { ?>
                            <tr class="table-row">
                                <td><input type="checkbox" name="checkbox_" id="checkbox_" data-md-icheck /></td>
                                <td><?php echo $faker->email; ?></td>
                                <td><?php echo $faker->sentence(10); ?></td>
                                <td><?php echo $faker->date(); ?></td>
                            </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
            <form>
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Compose Message</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" class="md-input" id="mail_new_to"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="mail_new_message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div id="mail_upload-drop" class="uk-file-upload">
                    <p class="uk-text">Drop file to upload</p>
                    <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                    <a class="uk-form-file md-btn">choose file<input id="mail_upload-select" type="file"></a>
                </div>
                <div id="mail_progressbar" class="uk-progress uk-hidden">
                    <div class="uk-progress-bar" style="width:0">0%</div>
                </div>
                <div class="uk-modal-footer">
                    <a href="#" class="md-icon-btn"><i class="md-icon material-icons">&#xE226;</i></a>
                    <button type="button" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">Send</button>
                </div>
            </form>
        </div>
    </div>