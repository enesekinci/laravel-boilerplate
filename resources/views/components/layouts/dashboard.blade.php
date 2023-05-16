<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ config('app.name') }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Laravel projeleriniz için hazırlanmış olan bu admin paneli ile projelerinizi daha hızlı bir şekilde geliştirebilirsiniz.">
    <meta name="keywords"
        content="laravel, admin, panel, dashboard, template, ui, kit, admin panel, admin template, web, app, ui, interface, admin dashboard, admin ui, web dashboard, html template, html admin template, bootstrap, css3, responsive, metronic, admin theme, backend, fronted, flat, flat design, ui components, web components, widgets, responsive web">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="/theme/dashboard/assets/images/favicon.svg" type="image/x-icon">

    <!-- rangeslider css -->
    <link rel="stylesheet" href="/theme/dashboard/assets/css/plugins/bootstrap-slider.min.css">

    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="/theme/dashboard/assets/css/plugins/flatpickr.min.css">

    <!-- notification css -->
    <link rel="stylesheet" href="/theme/dashboard/assets/css/plugins/notifier.css">

    <!-- [Font] Family -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/theme/dashboard/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="/theme/dashboard/assets/css/style-preset.css" />

    <link rel="stylesheet" href="/theme/dashboard/assets/css/plugins/datepicker-bs5.min.css">

    <script src="/theme/dashboard/assets/js/plugins/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/axios/dist/axios.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/choices.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/datepicker-full.min.js"></script>
    <!-- Time picker -->
    <script src="/theme/dashboard/assets/js/plugins/flatpickr.min.js"></script>
    @yield('css')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <x-dashboard.layout.pre-loader />
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <x-dashboard.layout.sidebar />
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <x-dashboard.layout.header />
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <x-dashboard.layout.breadcrumb />
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                @yield('content')
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <x-dashboard.layout.footer />
    <!-- Required Js -->
    <script src="/theme/dashboard/assets/js/plugins/popper.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/simplebar.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/theme/dashboard/assets/js/fonts/custom-font.js"></script>
    <script src="/theme/dashboard/assets/js/config.js"></script>
    <script src="/theme/dashboard/assets/js/pcoded.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/feather.min.js"></script>

    <x-dashboard.layout.sidebar-settings />

    <!-- notification Js -->
    <script src="/theme/dashboard/assets/js/plugins/notifier.js"></script>

    <script>
        function success_alert(text = "", timeout = 3000) {
            return notifier.show('İşlem başarılı!', text, 'success', '/theme/dashboard/assets/images/notification/ok-48.png', timeout);
        }

        function error_alert(text = "", timeout = 3000) {
            notifier.show('İşlem başarısız!', text, 'warning', '/theme/dashboard/assets/images/notification/high_priority-48.png', timeout);
        }
    </script>

    <script src="/theme/dashboard/assets/js/plugins/ckeditor/4.21.0/full/ckeditor.js"></script>

    <!-- Input mask Js -->
    <script src="/theme/dashboard/assets/js/plugins/imask.min.js"></script>
    <!-- form-picker-custom Js -->
    <script src="/theme/dashboard/assets/js/pages/form-masking-custom.js"></script>
    <!-- range slider Js -->
    <script src="/theme/dashboard/assets/js/plugins/bootstrap-slider.min.js"></script>
    <script>
        function ckEditorInit() {
            CKEDITOR.replaceAll(function(textarea, config) {
                if (textarea.className.search("ckeditor-content") != -1) {

                    // add custom templates to the editor
                    config.templates_files = ['/js/ckeditor-templates.js'];

                    config.extraPlugins = 'templates';
                    config.filebrowserImageBrowseUrl = '/dashboard/laravel-filemanager?type=Images';
                    config.filebrowserImageUploadUrl = '/dashboard/laravel-filemanager/upload?type=Images&_token=';
                    config.filebrowserBrowseUrl = '/dashboard/laravel-filemanager?type=Files';
                    config.filebrowserUploadUrl = '/dashboard/laravel-filemanager/upload?type=Files&_token=';
                    return true;
                } else if (textarea.className.search("ckeditor-summary") != -1) {
                    config.toolbarGroups = [{
                            name: 'document',
                            groups: ['mode', 'document', 'doctools']
                        },
                        {
                            name: 'clipboard',
                            groups: ['undo', 'clipboard']
                        },
                        {
                            name: 'editing',
                            groups: ['find', 'selection', 'spellchecker', 'editing']
                        },
                        {
                            name: 'forms',
                            groups: ['forms']
                        },
                        '/',
                        {
                            name: 'basicstyles',
                            groups: ['basicstyles', 'cleanup']
                        },
                        {
                            name: 'paragraph',
                            groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']
                        },
                        {
                            name: 'links',
                            groups: ['links']
                        },
                        {
                            name: 'insert',
                            groups: ['insert']
                        },
                        {
                            name: 'colors',
                            groups: ['colors']
                        },
                        {
                            name: 'styles',
                            groups: ['styles']
                        },
                        {
                            name: 'tools',
                            groups: ['tools']
                        },
                        {
                            name: 'others',
                            groups: ['others']
                        },
                        {
                            name: 'about',
                            groups: ['about']
                        }
                    ];
                    config.removeButtons =
                        'Source,Save,NewPage,ExportPdf,Preview,Print,Templates,Undo,Redo,Cut,Copy,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Superscript,Subscript,Strike,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Indent,Outdent,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,HorizontalRule,Smiley,PageBreak,SpecialChar,Iframe,Styles,Format,Font,FontSize,Maximize,ShowBlocks,About';

                    return true;
                }
                return false;
            });
        }

        function ckEditorUpdate() {
            for (let editorName in CKEDITOR.instances) {
                CKEDITOR.instances[editorName].updateElement();
            }
        }

        ckEditorInit();
    </script>
    @yield('js')

</body>
<!-- [Body] end -->

</html>
