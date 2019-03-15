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
    <form id="app" action="/store" method="POST" @submit.prevent="onSubmit" ref="form" name="main-form" id="main-form">
        {{ csrf_field() }}
        <div class="u-row">
            <div class="u-column">
                <div class="Form-group">
                    <label class="Form-label" for="default">Campaign title<span class="Icon Icon-ic_info Tooltip"
                                                                                data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="/svg/symbols.svg#ic_info"></use></svg></span>
                    </label>
                    <input v-model="form.public_name" type="text" class="FormText CreateList-publicName"
                           name="public_name"
                           value="Mailigen Newsletter">
                    
                    <div>
                        <span
                            v-if="allerros.public_name"
                            :class="['text-danger']">%allerros.public_name[0] %</span>
                    </div>
                </div>
                
                <div class="Form-group">
                    <label class="Form-label" for="default">Public list name <span class="Icon Icon-ic_info Tooltip"
                                                                                   data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="/svg/symbols.svg#ic_info"></use></svg></span>
                        <div class="u-groupRight">
                            <div class="Checkbox">
                                <label>
                                    <input v-model="checked" v-bind:aria-checked="checked"
                                           name="use-as-list-title-public"
                                           id="public-title"
                                           type="checkbox"
                                           class="Checkbox-input
                                    CreateList-publicTitle">
                                    <span class="Checkbox-icon"
                                          v-bind:aria-checked="checked"><span></span></span>
                                    <span class="Checkbox-label">Use list title as public</span>
                                </label>
                                <span class="Icon Icon-ic_info Tooltip" data-tooltip="Hi, I'm a Tooltip!"><svg><use
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xlink:href="/svg/symbols.svg#ic_info"></use></svg></span>
                            </div>
                        </div>
                    </label>
                    <input
                        name="public_list_name"
                        v-model="form.public_list_name"
                        id="public-list-name"
                        type="text"
                        class="FormText CreateList-publicText"
                        disabled="true"
                        v-bind:disabled="!checked"
                    >
                    
                    <div>
                        <span
                            v-if="allerros.public_list_name"
                            :class="['text-danger']">%allerros.public_list_name[0] %</span>
                    </div>
                </div>
                <div class="u-spaceTop">
                    <label class="Form-label">Subscription permission reminder</label>
                    <div class="FormTextareaOverlay">
                                            <span class="FormTextareaOverlay-value">
                                                Your subscribers will see this information. <a href="#"> Where?</a>
                                            </span>
                        <textarea v-model="form.subscription_permission_reminder"
                                  name="subscription_permission_reminder"
                                  placeholder="Write a short reminder about how your subscribers got on your email list.Example: “You subscribed to our newsletter on www.examplepage.comor through our company Facebook page"
                                  formtextareaautoresize
                                  class="FormTextarea">% form.subscription_permission_reminder %</textarea>
                        
                        <span class="FormTextareaOverlay-value" v-if="allerros.subscription_permission_reminder"
                              :class="['text-danger']">%allerros.subscription_permission_reminder[0] %</span>
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
                                    xlink:href="/svg/symbols.svg#ic_info"></use></svg></span></label>
                    <div class="Checkbox">
                        <label>
                            {{--<input type="checkbox" class="Checkbox-input" checked>--}}
                            
                            <input
                                name="checked_people_subscribe"
                                type="checkbox"
                                v-model="form.checked_people_subscribe"
                                v-bind:aria-checked="checked_people_subscribe"
                                v-bind:value="(checked_people_subscribe == true) ? 'yes' : 'no'"
                                class="Checkbox-input"
                                id="checked-people-subscribe"
                                aria-checked="false"
                            >
                            <span class="Checkbox-icon"
                                  @click="checked_people_subscribe = !checked_people_subscribe"
                                  v-bind:aria-checked="checked_people_subscribe"><span
                                    @click="checked_people_subscribe = !checked_people_subscribe"></span></span>
                            <span class="Checkbox-label">People subscribe</span>
                        
                        </label>
                    </div>
                    <div class="Checkbox">
                        <label>
                            <input
                                name="checked_people_unsubscribe"
                                type="checkbox"
                                v-model="form.checked_people_unsubscribe"
                                v-bind:aria-checked="checked_people_unsubscribe"
                                v-bind:value="(checked_people_unsubscribe == true) ? 'yes' : 'no'"
                                class="Checkbox-input"
                                id="checked-people-unsubscribe"
                                aria-checked="false"
                            >
                            
                            <span class="Checkbox-icon"
                                  @click="checked_people_unsubscribe = !checked_people_unsubscribe"
                                  v-bind:aria-checked="checked_people_unsubscribe"><span
                                    @click="checked_people_unsubscribe = !checked_people_unsubscribe"></span></span>
                            <span class="Checkbox-label">People unsubscribe</span>
                        </label>
                    </div>
                    <div class="Checkbox">
                        <label>
                            <input
                                name="checked_people_change_preferences"
                                type="checkbox"
                                v-model="form.checked_people_change_preferences"
                                v-bind:aria-checked="checked_people_change_preferences"
                                v-bind:value="(checked_people_change_preferences == true) ? 'yes' : 'no'"
                                class="Checkbox-input"
                                id="checked-people-change-preferences"
                                aria-checked="false"
                            >
                            
                            <span class="Checkbox-icon"
                                  @click="checked_people_change_preferences = !checked_people_change_preferences"
                                  v-bind:aria-checked="checked_people_change_preferences"><span
                                    @click="checked_people_change_preferences = !checked_people_change_preferences"></span></span>
                            <span class="Checkbox-label">people change preferences</span>
                        </label>
                    </div>
                    <div class="InputFieldEditable u-spaceTop on-edit">
                        <label class="Form-label">to:</label>
                        <div class="InputFieldEditable-item">
                            <span
                                v-show="!inline" v-bind:aria-checked="false" class="u-spaceBottomMini">% form.to
                                %</span>
                            
                            <input name="to"
                                   v-show="inline"
                                   v-model="form.to"
                                   v-bind:aria-disabled="false"
                                   type="email"
                                   class="FormText"
                            >
                            
                            <a @click="inline = !inline" v-bind:aria-checked="false"
                               class="BoxHeader-actionsItem CreateListEmail-edit">
                                    <span class="Icon">
                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                  xlink:href="/svg/symbols.svg#ic_create"></use></svg>
                                    </span>
                            </a>
                        </div>
                        
                        <div class="InputFieldEditable-item">
                            <span
                                v-show="inline"
                                v-if="allerros.to"
                                :class="['text-danger']">%allerros.to[0] %</span>
                        </div>
                    </div>
                    <label class="Form-label u-spaceTopSmall">Manage your contact list fields and merge tags</label>
                    <p>Lorem ipsum dolor sit amet</p>
                    <a aria-disabled="true" role="button"
                       class="Button Button--invert Button--small u-spaceTopMini">Managa list fields</a>
                </div>
            </div>
        </div>
        
        <input type="submit" id="submit-form" hidden/>
    </form>
@stop

@section('footer')
    <div id="app" class="FullscreenLayout-footerRight">
        <label class="Button Button--medium" for="submit-form" tabindex="0">Create</label>
    </div>
@stop

@push('footer_scripts')
    <script>
        var app = new Vue({
            el: '#app',
            delimiters: ["%", "%"],
            data: {
                checked: false,
                checked_people_subscribe: false,
                checked_people_unsubscribe: false,
                checked_people_change_preferences: false,
                inline: false,
                form: {
                    public_name: '',
                    public_list_name: '',
                    subscription_permission_reminder: '',
                    to: 'sample@mailigen.com',
                    checked_people_subscribe: false,
                    checked_people_unsubscribe: false,
                    checked_people_change_preferences: false,
                },
                allerros: [],
                success: false,
            },
            methods: {
                onSubmit() {
                    dataform = new FormData();
                    dataform.append('public_name', this.form.public_name);
                    /**
                     * If field is checked
                     * if true pass data
                     * if false no data passes to validation
                     */
                    (this.checked) ? dataform.append('public_list_name', this.form.public_list_name) : false;
                    dataform.append('subscription_permission_reminder', this.form.subscription_permission_reminder);
                    dataform.append('to', this.form.to);
                    dataform.append('checked_people_subscribe', this.form.checked_people_subscribe);
                    dataform.append('checked_people_unsubscribe', this.form.checked_people_unsubscribe);
                    dataform.append('checked_people_change_preferences', this.form.checked_people_change_preferences);
                    
                    axios.post('/store', dataform).
                    then(response => {
                        this.allerros = [];
                        /**
                         * if success redirect
                         */
                        if (this.success = true)
                        {
                            window.location = response.data.redirect;
                        }
                    }).catch((error) => {
                        this.allerros = error.response.data.errors;
                        this.success = false;
                    });
                }
            }
        });
    
    </script>
@endpush