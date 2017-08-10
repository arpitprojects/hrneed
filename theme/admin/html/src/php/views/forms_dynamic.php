<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-content">
                            <form action="" data-parsley-validate>
                                <div data-dynamic-fields="field_template_a"></div>
                                <div class="uk-grid uk-margin-medium-top">
                                    <div class="uk-width-1-1">
                                        <button type="submit" href="#" class="md-btn md-btn-primary">Validate</button>
                                    </div>
                                </div>
                            </form>
                            <script id="field_template_a" type="text/x-handlebars-template">
                                {{#ifCond index '>' 0 }}
                                <hr class="form_hr">
                                {{/ifCond}}
                                <div class="uk-grid uk-grid-medium form_section" data-uk-grid-match>
                                    <div class="uk-width-9-10">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>First Name</label>
                                                    <input type="text" class="md-input" name="d_form_fname{{ counter }}" required>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>Last Name</label>
                                                    <input type="text" class="md-input" name="d_form_lname{{ counter }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="parsley-row">
                                                    <label>Company</label>
                                                    <input type="text" class="md-input" name="d_form_company{{ counter }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <label>Gender:</label>
                                                    <div class="dynamic_radio uk-margin-small-top">
                                                        <span class="icheck-inline">
                                                            <input type="radio" name="d_form_gender{{ counter }}" id="d_form_gender_m{{ counter }}" data-md-icheck required />
                                                            <label for="d_form_gender_m{{ counter }}" class="inline-label">Man</label>
                                                        </span>
                                                        <span class="icheck-inline">
                                                            <input type="radio" name="d_form_gender{{ counter }}" id="d_form_gender_f{{ counter }}" data-md-icheck required />
                                                            <label for="d_form_gender_f{{ counter }}" class="inline-label">Women</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <label>Contact:</label>
                                                <div class="uk-margin-small-top">
                                                    <div class="parsley-row">
                                                        <input type="checkbox" id="d_form_mail{{ counter }}" data-switchery />
                                                        <label for="d_form_mail{{ counter }}" class="inline-label">Email</label>
                                                    </div>
                                                    <div class="parsley-row">
                                                        <input type="checkbox" id="d_form_phone{{ counter }}" data-switchery />
                                                        <label for="d_form_phone{{ counter }}" class="inline-label">Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <select id="d_form_select_country{{ counter }}" required>
                                                        <option value="">Country...</option>
                                                        <option value="a">country A</option>
                                                        <option value="b">country B</option>
                                                        <option value="c">country C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-2">
                                                <div class="parsley-row">
                                                    <select id="d_form_select_city{{ counter }}" required>
                                                        <option value="">City...</option>
                                                        <option value="1">City 1</option>
                                                        <option value="2">City 2</option>
                                                        <option value="3">City 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-10 uk-text-center">
                                        <div class="uk-vertical-align uk-height-1-1">
                                            <div class="uk-vertical-align-middle">
                                                <a href="#" class="btnSectionClone"><i class="material-icons md-36">&#xE146;</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </script>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-5">
                    <button class="md-btn uk-margin-bottom" data-uk-modal="{target:'#modal_default'}">Dynamic Form in Modal</button>
                    <div class="uk-modal" id="modal_default">
                        <div class="uk-modal-dialog">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <div data-dynamic-fields="field_template_modal"></div>
                            <script id="field_template_modal" type="text/x-handlebars-template">
                                <div class="uk-grid form_section">
                                    <div class="uk-width-1-1">
                                        <div class="uk-input-group">
                                            <label for="d_form_address{{counter}}">Address</label>
                                            <input type="text" class="md-input" name="d_form_address{{counter}}" id="d_form_address{{counter}}">
                                            <span class="uk-input-group-addon">
                                                <a href="#" class="btnSectionClone"><i class="material-icons md-24">&#xE146;</i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </script>
                        </div>
                    </div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div data-dynamic-fields="field_template_b"></div>
                            <script id="field_template_b" type="text/x-handlebars-template">
                                <div class="uk-grid form_section">
                                    <div class="uk-width-1-1">
                                        <div class="uk-input-group">
                                            <label for="d_form_input{{counter}}">Company Name</label>
                                            <input type="text" class="md-input" name="d_form_input{{counter}}" id="d_form_input{{counter}}">
                                            <span class="uk-input-group-addon">
                                                <a href="#" class="btnSectionClone"><i class="material-icons md-24">&#xE146;</i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>