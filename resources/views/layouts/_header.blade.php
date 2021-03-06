<nav class="navbar navbar-default navbar-static-top ">

    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://bock.oss-cn-beijing.aliyuncs.com/uploads/aiysz5.jpg" alt=" logo" width="112" height="30">
            </a>
        </div>

       <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- 导航 -->
            <ul class="nav navbar-nav">
                    <li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">话题</a></li>
                    <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">分享</a></li>
                    <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">问答</a></li>
                    <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">4K专区</a></li>
                </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">
                        <button type="button" class="btn btn-default"><span style="color: #2771e2">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                </span><span>登录</span></button></a></li>

                <li><a href="{{ route('register') }}">
                        <button type="button" class="btn btn-default"><span style="color: #694b90">
                   <span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>
                            </span><span>注册</span></button></a></li>
                @else
                    <!--导航添加＋-->
                    <li>
                        <a href="{{ route('topics.create') }}">
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </a>
                    </li>


                        {{-- 消息通知标记 --}}
                    <li>
                        <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: 0px;">
                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒 " style="margin-top: -5px;">
                                {{ Auth::user()->notification_count }}
                        </span>
                        </a>
                    </li>
                        <li class="dropdown">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-2px;">
                        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" style=" width: 36px; height: 36px; box-shadow: rgb(255, 255, 255) 0px 0px 0px 1px, rgb(0, 0, 0) 0px 0px 1px 1px;">
                        </span>
                            {{--{{ Auth::user()->name }}--}}
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            @can('manage_contents')
                                <li>
                                    <a href="{{ url(config('administrator.uri')) }}">
                                        <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
                                        管理后台
                                    </a>
                                </li>
                            @endcan

                            <li>
                                <a href="{{ route('users.show', Auth::id()) }}">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    个人中心
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('users.edit', Auth::id()) }}">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    编辑资料
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    退出登录
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>
                    </li>


                    @endguest
            </ul>
        </div>
    </div>
</nav>