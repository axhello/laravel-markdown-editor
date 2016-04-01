<link rel="stylesheet" href="{{ asset('plugin/editor/css/editormd.css') }}"/>
<script src="{{ asset('plugin/editor/js/jquery.min.js') }}"></script>
<script src="{{ asset('plugin/editor/js/editormd.min.js') }}"></script>
<meta name="token" content="{{ csrf_token() }}" />

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
        }
    });
    var MDEditor;
    $(function() {
        MDEditor = editormd("mdeditor", {
            width   : "90%",
            height  : 640,
            syncScrolling : "single",
            path    : "/public/plugin/editor/lib/"
        });
    });
</script>