<!-- Order your soul. Reduce your wants. - Augustine -->
<html>
<head>
    <link href="{{asset('vendor/yellowcms/assets/js/editor.md/css/editormd.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>{{$pageTitle}}</title>
</head>
<body class="">
    <div class="grid grid-cols-12 border-b border-gray-200">
        <div class="col-span-3">
             <div class="">
                <x-yellowcms-admin-logo />
            </div>
        </div>
        <div class="col-span-9  ">
            <div class="  text-gray-500 text-sm flex pt-4">
                {{$quote}}
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-3">
            <x-yellowcms-admin-navigation></x-yellowcms-admin-navigation>
        </div>
        <div class="col-span-9">
            <x-yellowcms-breadcrumb />
            <div class="p-2">
                <div class="py-2 font-bold text-2xl border-b-2 border-gray-300 mb-3">
                    {{$pageTitle}}
                </div>
                {{$slot}}
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('vendor/yellowcms/assets/js/editor.md/editormd.min.js')}}"></script>
    <script src="{{asset('vendor/yellowcms/assets/js/editor.md/languages/fr.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            var editor = editormd("editormd", {
                // width  : "100%",
                height : "600px",
                tocm : true,
                toc : true,
                path   : '/vendor/yellowcms/assets/js/editor.md/lib/'
            });
        });
    </script>
</body>
</html>
