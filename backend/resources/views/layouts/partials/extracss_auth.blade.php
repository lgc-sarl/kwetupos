   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background-color: #243949;
        }

        h1 {
            color: #fff;
        }
    </style>

    <style type="text/css">
        /*
      * Pattern lock css
      * Pattern direction
      * http://ignitersworld.com/lab/patternLock.html
      */
        .patt-wrap {
            z-index: 10;
        }

        .patt-circ.hovered {
            background-color: #cde2f2;
            border: none;
        }

        .patt-circ.hovered .patt-dots {
            display: none;
        }

        .patt-circ.dir {
            background-image: url("http://pos.test/img/pattern-directionicon-arrow.png");
            background-position: center;
            background-repeat: no-repeat;
        }

        .patt-circ.e {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .patt-circ.s-e {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .patt-circ.s {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .patt-circ.s-w {
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .patt-circ.w {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .patt-circ.n-w {
            -webkit-transform: rotate(225deg);
            transform: rotate(225deg);
        }

        .patt-circ.n {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .patt-circ.n-e {
            -webkit-transform: rotate(315deg);
            transform: rotate(315deg);
        }
    </style>
    <style>
        body {
            position: relative;
            background-image: url('{{ asset('img/man-pos.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f0f0f0;
            z-index: 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0F184ABD;
            z-index: -1;
        }

        h1 {
            color: #fff;
        }
    </style>
    <style>
        .action-link[data-v-1552a5b6] {
            cursor: pointer;
        }
    </style>
    <style>
        .action-link[data-v-397d14ca] {
            cursor: pointer;
        }
    </style>
    <style>
        .action-link[data-v-49962cc0] {
            cursor: pointer;
        }
    </style>

<link href="{{ asset('css/tailwind/app.css') }}" rel="stylesheet">
