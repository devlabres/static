<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        *{margin: 0;padding:0;}
    </style>
</head>
<body>
<script>
    (function () {
        var web_id = getParameter('web_id');
        if(!web_id) return;
        document.write('<script src="//s22.cnzz.com/z_stat.php?id='+web_id+'&web_id='+web_id+'" language="JavaScript"><\/script>');
        function getParameter(name, cancelBubble) {
            var r = new RegExp("(\\?|#|&)" + name + "=([^&#]*)(&|#|$)");
            var m = location.href.match(r);
            if ((!m || m == "") && !cancelBubble) m = window.location.href.match(r);
            return (!m ? "" : m[2]);
        }
    })();

</script>
</body>
</html>
