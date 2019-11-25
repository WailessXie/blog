@extends('layouts.app')
@section('styles')
    <style>
        .card{
            width: 100%;
        }
    </style>
@endsection
@section('content')
    @component('particals.jumbotron')
        <h3>{{ lang('About Me') }}</h3>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="media" style="display: flex">
                <img src="https://s.gravatar.com/avatar/e73430b596922e7f468c2efd02ac7f90?s=80" class="mr-3" alt="..." height="80">
                <div class="media-body">
                    <h4 class="mt-0">谢彪业（Wailess Xie）</h4>
                     <h5>一个90后的后端程序员。这个是本人首个正式的blog，希望能记录下自己一路走来的风风雨雨，这里不仅是技术，还有精彩的个人生活。</h5>
                </div>
            </div>
            <div class="card mt-4">
                <h5 class="card-header">为什么要做这个博客</h5>
                <div class="card-body">
                   <p>一直以来都想做一个博客，但是一直抽不出时间，而且自己的页面设计功夫太辣眼睛，所以一直搁置。
                       这个博客是我在搞laravel时候看到的，这风格马上就吸引了我，一看还是开源的，我立马就拿到了源码，并且搭建了起来，加入了自己一些风格，于是就是现在看的样子了。在这里非常的感谢这个博客的原作者
                       <a href="https://www.pigjian.com/about">PJ Blog</a>。
                   </p>
                    <p>
                        现在是博客运行初期，可能文章会比较少。我打算2020年元旦正式开始写文章，这段时间抽时间慢慢添加功能和优化。
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection