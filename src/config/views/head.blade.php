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
        // You can custom Emoji's graphics files url path
        editormd.emoji     = {
            path  : "http://www.emoji-cheat-sheet.com/graphics/emojis/",
            ext   : ".png"
        };
        // Twitter Emoji (Twemoji)  graphics files url path
        editormd.twemoji = {
            path : "http://twemoji.maxcdn.com/72x72/",
            ext  : ".png"
        };
        MDEditor = editormd("mdEditor", {
            width   : "{{ config('editor.width') }}",
            height  : 640,
            path    : "/plugin/editor/lib/",
            saveHTMLToTextarea : true,
            searchReplace : true,
            codeFold : true,
            toc : true,
            emoji : true,
            taskList : true,
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL : "{{ url(config('editor.uploadUrl')) }}"
        });
    });
</script>