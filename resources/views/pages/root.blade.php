@extends('layouts.app')
@section('title', '首页')

@section('content')


    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    {{--<script src="js/scripts.js"></script>--}}
</head>
<div>

<section class="hero">
    <div class="row hero-content">
        <div class="col-md-12 text-center">
            <h1 class="animated fadeInDown">MARVEL STUD10S</h1><a href="{{ route('topics.index') }}" class="read-btn animated fadeInUp">进入社区</a>
        </div>
    </div>
</section>

<section class="services-list page-section" id="features">
    <div class="container">
        <div class="row">
            <div class="title-section text-center">
                <h2>MARAVEL STUD10S</h2>
                <div class="divider"><i class="fa fa-star-o fa-lg"></i></div>
            </div>
            <div class="disc-section text-center">
                <p>漫威电影宇宙（Marvel Cinematic Universe，缩写为MCU），是以超级英雄电影为中心的共同的架空世界，由漫威影业（Marvel Studios）基于漫威漫画出版物中的角色独立制作的系列电影。它像漫画中的漫威主宇宙一样，是由共同的元素、设定、表演和角色通过跨界作品所建立的。漫威电视（Marvel Television）将宇宙进一步扩大，制作位于该宇宙中的电视剧系列。
                    漫威电影宇宙独立于漫威宇宙中的主宇宙（Earth-616）和终极宇宙（Earth-1610），编号为Earth-199999。</p>
            </div>
        </div>
    </div>
</section>

<section class="hero2">
    <div class="row hero-content">
    </div>
</section>
    <section class="services-list page-section" id="features">
        <div class="container">
            <div class="row">
                <div class="title-section text-center">
                    <h2>Detective Comics</h2>
                    <div class="divider"><i class="fa fa-star-o fa-lg"></i></div>
                </div>
                <div class="disc-section text-center">
                    <p>DC宇宙是指以美国DC漫画旗下漫画所组成的统一的世界观，其中包括漫画中人物（超人、蝙蝠侠、神奇女侠、闪电侠、绿灯侠、海王等）、宇宙、神灵（上帝、新神等）、历史走向、物理规律等。
                        DC宇宙曾经包含有无数个平行宇宙，但在1986年的《无限地球危机》后控制在了一个，2005年后《无限危机》后DC又将DC宇宙中的平行宇宙控制在52个。在2015年的《多元熔汇》和《动作漫画》中提到52个平行宇宙之外还含有其他宇宙
                        虽然DC在1986年到2005年之间取消了平行世界概念，但是又创造了超时间流和口袋宇宙慨念来顶替多元宇宙概念。
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@stop