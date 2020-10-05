@extends('layout')

@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <h1>Create new lists</h1>
    </div>
    <div class="FullscreenLayout-headerActions">
        <a href="https://bitbucket.org/Faks/mailigen-trial/src/master/"
           role="button"
           class="Button Button--medium"
           style="margin-left: 15px;">Bitbucket</a>

        <a href="https://www.linkedin.com/in/oskars-germovs-a94b3318a/"
           role="button"
           class="Button Button--medium"
           style="margin-left: 15px; margin-right: 15px;">LinkedIn</a>
        <a href="#" role="button" class="Button Button--medium">Cancel</a>
    </div>
@stop

@section('content')
    @include('partial.form', ['route' => route('store') , 'vue_data' => "@submit.prevent='onSubmit'"])
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
                inline: false,
                form: {
                    public_name: '',
                    public_list_name_checked: false,
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
                    dataform.append('public_list_name_checked', this.form.public_list_name_checked);
                    (this.form.public_list_name_checked) ? dataform.append('public_list_name', this.form.public_list_name) : false;
                    dataform.append('subscription_permission_reminder', this.form.subscription_permission_reminder);
                    dataform.append('to', this.form.to);
                    dataform.append('checked_people_subscribe', this.form.checked_people_subscribe);
                    dataform.append('checked_people_unsubscribe', this.form.checked_people_unsubscribe);
                    dataform.append('checked_people_change_preferences', this.form.checked_people_change_preferences);

                    axios.post('/store', dataform).then(response => {
                        this.allerros = [];
                        /**
                         * if success redirect
                         */
                        if (this.success = true) {
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
