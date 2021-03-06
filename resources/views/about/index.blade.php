@extends('layouts.app')
@section('styles')
    <style>
        .card {
            width: 100%;
        }

        .nav-tabs {
            width: 100%;
        }
        .list-group-item:hover{
            background-color: white;
        }

        .list-group-item:hover span{
            color: #212529;
        }

        #progress {
            font-size: 1rem;
        }

        #skill-item .col-2, .col-10 {
            padding-right: 0;
            padding-left: 0;
        }
        .list-group-item{
            margin-bottom: 4px;
        }
        .progress .progress-bar{
            -webkit-animation: animate-positive 2s;
            animation: animate-positive 2s;
        }
        @-webkit-keyframes animate-positive{
            0%{ width: 0; }
        }
        @keyframes animate-positive {
            0%{ width: 0; }
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
                <img src="https://s.gravatar.com/avatar/e73430b596922e7f468c2efd02ac7f90?s=80" class="img-fluid mr-3"
                     alt="头像"
                >
                <div class="media-body">
                    <h4 class="mt-0">谢彪业（Wailess Xie）</h4>
                    <h5>一个90后的后端程序员。这个是本人首个正式的blog，希望能记录下自己一路走来的风风雨雨，这里不仅是技术，还有精彩的个人生活。</h5>
                </div>
            </div>
            <div class="card mt-4">
                <h5 class="card-header">关于博客</h5>
                <div class="card-body">
                    <p>感谢这个博客的原作者
                        <a href="https://www.pigjian.com/about">PJ Blog</a>。
                    </p>
                </div>
            </div>
            <div class="row ml-0 w-100 mt-2">
                <div class="col-xs-12 w-100">
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
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <table class="table table-borderless table-responsive ">
                                <tbody>
                                <tr>
                                    <th><i class="fas fa-user"></i> </th>
                                    <td>谢彪业</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-phone"></i> </th>
                                    <td>13414901297</td>
                                </tr>
                                <tr>
                                    <th><i class="fab fa-weixin"></i> </th>
                                    <td>XBY95912010</td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-envelope"></i> </th>
                                    <td>1607815744@qq.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <ul class="list-group" id="skills">
                                <li class="list-group-item">
                                    <div class="row ml-0 mr-0" id="skill-item">
                                        <div class="col-2">
                                            <span style="display: block;font-size:1rem" class="w-100 text-center">Java</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress h-100" id="progress">
                                                <div class="progress-bar  bg-primary" role="progressbar" style="width: 75%;"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row ml-0 mr-0" id="skill-item">
                                        <div class="col-2">
                                            <span style="display: block;font-size:1rem" class="w-100 text-center">spring</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress h-100" id="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%;"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row ml-0 mr-0" id="skill-item">
                                        <div class="col-2">
                                            <span style="display: block;font-size:1rem" class="w-100 text-center">Linux</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress h-100" id="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row ml-0 mr-0" id="skill-item">
                                        <div class="col-2">
                                            <span style="display: block;font-size:1rem" class="w-100 text-center">PHP</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress h-100" id="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row ml-0 mr-0" id="skill-item">
                                        <div class="col-2">
                                            <span style="display: block;font-size:1rem" class="w-100 text-center">HTML</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress h-100" id="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-decoration-none stretched-link"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                看剧
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2  col-sm-6">
                                                    <div class="card position-relative">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/ef8c6827756ecd74e29b96f5aae79e11.jpeg"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://movie.douban.com/people/171763982/collect"
                                                               class="stretched-link"
                                                               target="_blank">看过</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-sm-6">
                                                    <div class="card">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/032088f547efc7286971012702008c2d.jpg"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://movie.douban.com/people/171763982/do"
                                                               class="stretched-link"
                                                               target="_blank">正在看</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-sm-6">
                                                    <div class="card">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/2148a04fb0b8947d334eb4d7b86f661d.jpg"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://movie.douban.com/people/171763982/wish"
                                                               class="stretched-link"
                                                               target="_blank">想看</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed text-decoration-none stretched-link"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                听歌
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-6">
                                                    <div class="card">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/a6ecc97b11e5dc9a2892abd68d694d19.jpg"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://c.y.qq.com/base/fcgi-bin/u?__=I4mVt1Q"
                                                               class="stretched-link"
                                                               target="_blank">QQ音乐</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6">
                                                    <div class="card">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/f259981a6fd59c9d40cc9b285fb2c092.jpg"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://music.163.com/#/user/home?id=112491854"
                                                               class="stretched-link"
                                                               target="_blank">网易云音乐</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed text-decoration-none stretched-link"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                休闲
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-2  col-sm-6">
                                                    <div class="card">
                                                        <img
                                                            src="https://lychee.wailess.cn/uploads/medium/4d8ffa6f68e17af015fdcccaf72511b1.png"
                                                            class="card-img-top w-100 img-fluid" alt="">
                                                        <div class="card-body">
                                                            <a href="https://steamcommunity.com/profiles/76561198274144693/"
                                                               class="stretched-link"
                                                               target="_blank">Steam</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">

                                                </div>
                                                <div class="col-lg-2 ">

                                                </div>
                                                <div class="col-lg-2">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection