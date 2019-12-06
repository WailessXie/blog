@extends('layouts.app')
@section('styles')
    <style>
        .card {
            width: 100%;
        }
        .nav-tabs{
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
                <img src="https://s.gravatar.com/avatar/e73430b596922e7f468c2efd02ac7f90?s=80" class="mr-3" alt="..."
                     height="80">
                <div class="media-body">
                    <h4 class="mt-0">谢彪业（Wailess Xie）</h4>
                     <h5>一个90后的后端程序员。这个是本人首个正式的blog，希望能记录下自己一路走来的风风雨雨，这里不仅是技术，还有精彩的个人生活。</h5>
                </div>
            </div>
            <div class="card mt-4">
                <h5 class="card-header">为什么要做这个博客</h5>
                <div class="card-body">
                    <p>感谢这个博客的原作者
                        <a href="https://www.pigjian.com/about">PJ Blog</a>。
                    </p>
                    <p>
                        现在是博客运行初期，可能文章会比较少。
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab" aria-controls="nav-home" aria-selected="true">基本信息</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="false">技能</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                           role="tab" aria-controls="nav-contact" aria-selected="false">爱好</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        基本信息
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        技能
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        爱好
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection