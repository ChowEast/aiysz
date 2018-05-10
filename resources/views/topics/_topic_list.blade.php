@if (count($topics))

    <ul class="media-list">
        @foreach ($topics as $topic)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$topic->user_id]) }}">
                        <img class="media-object img-rounded" style="width: 42px; height: 42px;" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">
                    </a>
                </div>

                <div class="media-body">


                    <div class="media-heading">
                        <a href="{{ $topic->link() }}" title="{{ $topic->title }}">
                           {{ $topic->title }}
                        </a>

                        <a class="pull-right" href="{{ route('topics.show', [$topic->id]) }}" >
                            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <span class="label label-info">{{ $topic->category->name }}</span>  <span class="badge"> {{ $topic->reply_count }} </span>
                        </a>
                    </div>

                    <div class="media-body meta">
                        {{--<a href="{{ route('categories.show', $topic->category->id) }}" title="{{ $topic->category->name }}">--}}
                            {{--<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>--}}
                            {{--{{ $topic->category->name }}--}}
                        {{--</a>--}}

                        {{--<span> • </span>--}}
                        <a href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
                            <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                            {{ $topic->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $topic->updated_at->diffForHumans() }}</span>
                    </div>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
    <div class="empty-block">暂无数据😶</div>
@endif