@extends('layouts.app')

@section('title', $article->title)

@section('content')
    @component('particals.jumbotron')
        <h4>{{ $article->title }}</h4>

        <h6>{{ $article->subtitle }}</h6>

        <div class="header">
            <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}，
            @if(count($article->tags))
                <i class="fas fa-tags"></i>
                @foreach($article->tags as $tag)
                    <a href="{{ url('tag', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a>，
                @endforeach
            @endif
            <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}
        </div>
    @endcomponent

    <div class="article container">
        <div class="row text-center">
            <div class="col-md-8 offset-md-2">
                <img alt="{{ $article->slug }}" src="{{ $article->page_image }}" style="border-radius:5px"
                     class="img-responsive img-fluid">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <parse content="{{ $article->content['raw'] }}"></parse>

                @if($article->is_original)
                    <div class="publishing alert alert-dismissible alert-info">
                        <button type="button" data-dismiss="alert" class="close">×</button>
                        由 <a xmlns:cc="http://creativecommons.org/ns#" href="https://www.wailess.cn/"
                             property="cc:attributionName" rel="cc:attributionURL">Wailess Xie</a> 创作，采用 <a
                            rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">知识共享 署名-非商业性使用 4.0 国际
                            许可协议</a>进行许可。<br>基于<a xmlns:dct="http://purl.org/dc/terms/" href="https://www.wailess.cn/"
                                                  rel="dct:source">https://www.wailess.cn/</a>上的作品创作。
                    </div>
                @endif
                @if(config('blog.social_share.article_share'))
                    <div class="footing">
                        <div class="social-share"
                             data-title="{{ $article->title }}"
                             data-description="{{ $article->title }}"
                             {{ config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : '' }}
                             {{ config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : '' }}
                             initialized></div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <comment title="Comments"
             commentable-type="articles"
             commentable-id="{{ $article->id }}"
             @can('comment',$article)
             username="{{ Auth::user()->name }}"
             user-avatar="{{ Auth::user()->avatar }}"
             can-comment
             @endcan
    ></comment>

@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection
