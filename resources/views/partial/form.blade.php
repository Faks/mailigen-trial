@extends('layout')

@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <h1>Create new lists</h1>
    </div>
    <div class="FullscreenLayout-headerActions">
        <a href="#" role="button" class="Button Button--medium">Cancel</a>
    </div>
@stop

@section('content')
    <form id="CrateNewListForm" action="index.html" method="post">
        <div class="u-row">
            <div class="u-column">
                <div class="Form-group">
                    <label class="Form-label" for="default">Campaign title<span class="Icon Icon-ic_info Tooltip"
                                                                                data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="assets/svg/symbols.svg#ic_info"></use></svg></span></label>
                    <input type="text" class="FormText CreateList-publicName" name="default"
                           value="Mailigen Newsletter">
                </div>
                
                <div class="Form-group">
                    <label class="Form-label" for="default">Public list name <span class="Icon Icon-ic_info Tooltip"
                                                                                   data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="assets/svg/symbols.svg#ic_info"></use></svg></span>
                        <div class="u-groupRight">
                            <div class="Checkbox">
                                <label>
                                    <input type="checkbox" checked class="Checkbox-input CreateList-publicTitle">
                                    <span class="Checkbox-icon"><span></span></span>
                                    <span class="Checkbox-label">Use list title as public</span>
                                </label>
                                <span class="Icon Icon-ic_info Tooltip" data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xlink:href="assets/svg/symbols.svg#ic_info"></use></svg></span>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="FormText CreateList-publicText" name="default" disabled="true"
                           value="Mailigen Newsletter">
                </div>
                <div class="u-spaceTop">
                    <label class="Form-label">Subscription permission reminder</label>
                    <div class="FormTextareaOverlay">
                                            <span class="FormTextareaOverlay-value">
                                                Your subscribers will see this information. <a href="#"> Where?</a>
                                            </span>
                        <textarea
                            placeholder="Write a short reminder about how your subscribers got on your email list.Example: “You subscribed to our newsletter on www.examplepage.comor through our company Facebook page"
                            formtextareaautoresize class="FormTextarea">You subscribed to our newsletter from www.mailigen.com</textarea>
                    </div>
                    <div class="Reminder u-spaceTopSmall">
                        <span class="Reminder-heading">Examlple of a short permission reminder:</span><br/>
                        <p>'You subscribed to our newsletter on www.mailigen.com or through our company Facebook
                            page'</p>
                    </div>
                </div>
            </div>
            <div class="u-column">
                <div class="Form-group">
                    <label class="Form-label" for="default">Email me when... <span class="Icon Icon-ic_info Tooltip"
                                                                                   data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="assets/svg/symbols.svg#ic_info"></use></svg></span></label>
                    <div class="Checkbox">
                        <label>
                            <input type="checkbox" class="Checkbox-input" checked>
                            <span class="Checkbox-icon"><span></span></span>
                            <span class="Checkbox-label">People subscribe</span>
                        </label>
                    </div>
                    <div class="Checkbox">
                        <label>
                            <input type="checkbox" class="Checkbox-input" checked>
                            <span class="Checkbox-icon"><span></span></span>
                            <span class="Checkbox-label">People unsubscribe</span>
                        </label>
                    </div>
                    <div class="Checkbox">
                        <label>
                            <input type="checkbox" class="Checkbox-input" checked>
                            <span class="Checkbox-icon"><span></span></span>
                            <span class="Checkbox-label">people change preferences</span>
                        </label>
                    </div>
                    <div class="InputFieldEditable u-spaceTop on-edit">
                        <label class="Form-label">to:</label>
                        <div class="InputFieldEditable-item">
                            <span class="u-spaceBottomMini">john.doe@example.com</span>
                            <a href="#" class="BoxHeader-actionsItem CreateListEmail-edit">
                                                    <span class="Icon">
                                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                  xlink:href="assets/svg/symbols.svg#ic_create"></use></svg>
                                                    </span>
                            </a>
                        </div>
                        <div class="InputFieldEditable-edit u-hide">
                            <input class="FormText" type="text" data-default="john.doe@example.com"
                                   value="john.doe@example.com">
                        </div>
                    </div>
                    <label class="Form-label u-spaceTopSmall">Manage your contact list fields and merge tags</label>
                    <p>Lorem ipsum dolor sit amet</p>
                    <a href="/lists/manage-fields.html" role="button"
                       class="Button Button--invert Button--small u-spaceTopMini">Managa list fields</a>
                </div>
            </div>
        </div>
    </form>
@stop

@section('footer')
    <div class="FullscreenLayout-footerRight">
        <a href="#" role="button" onclick="sidebar.open(); return false;" class="Button Button--medium">Create</a>
    </div>
@stop