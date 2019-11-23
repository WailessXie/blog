<!DOCTYPE HTML>
<html>
<head>
    <title>500 页面找不到啦</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ config("blog.static") }}/assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ config("blog.static") }}/assets/css/ie9.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="{{ config("blog.static") }}/assets/css/noscript.css" /></noscript>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo">
            <span class="icon fa-paper-plane"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>500</h1>
                <p><!--[-->对不起，网站出错啦。不过，放心，一切都在我的掌控之中，不会太久的！<!--]--></p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="{{ url('/') }}">{{ lang('Articles') }}</a></li>
                <li><a href="{{ url('about') }}">{{ lang('About Me') }}</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->


    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; Wailess Xie. Blog: <a href="/">BLOG</a>.</p>
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="{{ config("blog.static") }}/assets/js/jquery.min.js"></script>
<script src="{{ config("blog.static") }}/assets/js/skel.min.js"></script>
<script src="{{ config("blog.static") }}/assets/js/util.js"></script>
<script src="{{ config("blog.static") }}/assets/js/main.js"></script>

</body>
</html>
