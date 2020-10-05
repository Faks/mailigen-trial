@extends('layout')

@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <h1>Update list</h1>
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
    @include('partial.form', ['route' => route('update') , 'vue_data' => "@submit.prevent='onSubmit'"])
@stop

@section('footer')
    <div id="app" class="FullscreenLayout-footerRight">
        <label class="Button Button--medium" for="submit-form" tabindex="0">Update</label>
    </div>
@stop

@push('footer_scripts')
    <script>
        var app = new Vue({
            el: '#app',
            delimiters: ["%", "%"],
            data: {
                state: {},
                form: {},
                inline: false,
                allerros: [],
                success: false,
            },
            created: function () {
                axios.get("{{ '/get/edit/' . $id }}")
                    .then(response => {
                        // JSON responses are automatically parsed.
                        this.form = response.data.data[0];
                        this.state = response.data.data.state;

                        /**
                         * Helper Sets state for checkboxes
                         *  enables or disables checkboxes
                         */
                        this.form.public_list_name_checked = this.state.public_list_name_checked;
                        this.form.checked_people_subscribe = this.state.checked_people_subscribe;
                        this.form.checked_people_unsubscribe = this.state.checked_people_unsubscribe;
                        this.form.checked_people_change_preferences = this.state.checked_people_change_preferences;
                    })
                    .catch(e => {
                        this.errors.push(e)
                    });
            },
            methods: {
                onSubmit() {
                    dataform = new FormData();
                    dataform.append('id', this.form.id);
                    dataform.append('public_name', this.form.public_name);
                    dataform.append('public_list_name_checked', this.form.public_list_name_checked);
                    dataform.append('public_list_name', this.form.public_list_name);
                    dataform.append('subscription_permission_reminder', this.form.subscription_permission_reminder);
                    dataform.append('to', this.form.to);
                    dataform.append('checked_people_subscribe', this.form.checked_people_subscribe);
                    dataform.append('checked_people_unsubscribe', this.form.checked_people_unsubscribe);
                    dataform.append('checked_people_change_preferences', this.form.checked_people_change_preferences);

                    axios.post("{{ route('update') }}", dataform).then
                    (response => {
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
