<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Image Cropper</h3>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-large-3-5">
                    <div class="md-card">
                        <img src="assets/img/gallery/image_cropp.jpg" alt="" id="image_cropper">
                    </div>
                    <div class="uk-margin-top">
                        <div class="uk-form-file md-btn md-btn-primary" data-uk-tooltip title="Import image with Blob URLs">
                            Import image
                            <input type="file" id="inputImage" name="file">
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-2-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="cr_preview cr_preview_lg"></div>
                            <div class="uk-clearfix">
                                <div class="cr_preview cr_preview_md uk-float-left"></div><!--
                                --><div class="cr_preview cr_preview_sm uk-float-left"></div><!--
                                --><div class="cr_preview cr_preview_xs uk-float-left"></div>
                            </div>
                        </div>
                    </div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="croper-toggles">
                                <h2 class="heading_c uk-margin-small-bottom">Aspect Ratio:</h2>
                                <div class="md-btn-group uk-margin-medium-bottom" data-uk-button-radio="{target:'.md-btn'}">
                                    <button class="md-btn md-btn-primary md-btn-wave" data-value="1.7777777777777777">16:9</button>
                                    <button class="md-btn md-btn-primary md-btn-wave" data-value="1.3333333333333333">4:3</button>
                                    <button class="md-btn md-btn-primary md-btn-wave" data-value="1">1:1</button>
                                    <button class="md-btn md-btn-primary md-btn-wave" data-value="0.6666666666666666">2:3</button>
                                    <button class="md-btn md-btn-primary md-btn-wave" data-value="NaN">Free</button>
                                </div>
                            </div>
                            <div class="cropper-buttons">
                                <h2 class="heading_c uk-margin-small-bottom">Tools:</h2>
                                <div>
                                    <div class="md-btn-group" data-uk-button-radio="{target:'.md-btn'}">
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="setDragMode" data-option="move"><i class="uk-icon-arrows"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="setDragMode" data-option="crop"><i class="uk-icon-crop"></i></button>
                                    </div>
                                </div>
                                <div class="uk-margin-top">
                                    <div class="md-btn-group">
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="zoom" data-option="0.1"><i class="uk-icon-search-plus"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="zoom" data-option="-0.1"><i class="uk-icon-search-minus"></i></button>
                                    </div>
                                </div>
                                <div class="uk-margin-top">
                                    <div class="md-btn-group">
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="move" data-option="-10" data-second-option="0"><i class="uk-icon-arrow-left"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="move" data-option="10" data-second-option="0"><i class="uk-icon-arrow-right"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="move" data-option="0" data-second-option="-10"><i class="uk-icon-arrow-up"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="move" data-option="0" data-second-option="10"><i class="uk-icon-arrow-down"></i></button>
                                    </div>
                                </div>
                                <div class="uk-margin-top">
                                    <div class="md-btn-group">
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="rotate" data-option="-45"><i class="uk-icon-rotate-left"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="rotate" data-option="45"><i class="uk-icon-rotate-right"></i></button>
                                    </div><!--
                                    --><div class="md-btn-group uk-margin-left" >
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="scaleX" data-option="-1"><i class="uk-icon-arrows-h"></i></button>
                                        <button class="md-btn md-btn-primary md-btn-wave" data-method="scaleY" data-option="-1"><i class="uk-icon-arrows-v"></i></button>
                                    </div>
                                </div>
                                <div class="uk-margin-medium-top">
                                    <h2 class="heading_c uk-margin-small-bottom">Get Cropped Canvas:</h2>
                                    <div class="md-btn-group">
                                        <button class="md-btn md-btn-success md-btn-wave" data-method="getCroppedCanvas">Default</button>
                                        <button class="md-btn md-btn-success md-btn-wave" data-method="getCroppedCanvas" data-option='{ "width": 320, "height": 180 }'>320x180</button>
                                        <button class="md-btn md-btn-success md-btn-wave" data-method="getCroppedCanvas" data-option='{ "width": 160, "height": 90 }'>160x90</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-modal" id="getCroppedCanvasModal">
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">Cropped Image <span class="canvasModalImageSize"></span></h3>
            </div>
            <div class="canvasModalImage"></div>
            <div class="uk-modal-footer uk-text-right">
                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                <a class="md-btn md-btn-flat md-btn-flat-primary" id="image_download" href="javascript:void(0);" download="cropped_image.jpg">Download</a>
            </div>
        </div>
    </div>
