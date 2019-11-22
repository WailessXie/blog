@extends('layouts.app')
@section('styles')
    <style>
        .jumbotron{
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    @component('particals.jumbotron')
        <h3>{{ config('blog.article.title') }}</h3>

        <h6>{{ config('blog.article.description') }}</h6>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="VivaTimeline">
                    <dl>

                        @forelse( $articles as $index => $article)
                            <dt>{{ $index }}</dt>
                            @foreach( $article as $date => $list)
                                <dd class="{{ rand(1,2)==1 ? 'pos-left': 'pos-right' }} clearfix">
                                    <div class="circ"></div>
                                    <div class="time">{{ $date }}</div>
                                    <div class="events">
                                        <div class="events-body">
                                            @foreach( $list as $data )
                                                <div class="row">
                                                    <div class="col-md-6 float-left">
                                                        <img alt="{{ $data->slug }}" src="{{ $data->page_image }}"
                                                             class="events-object img-responsive img-rounded"
                                                             style="width: 100%;">
                                                    </div>
                                                    <div class="events-desc">
                                                        {{ $data->meta_description }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="events-footer">
                                            123
                                        </div>
                                    </div>
                                </dd>
                            @endforeach
                        @empty
                            <h3 class="text-center">{{ lang('Nothing') }}</h3>
                        @endforelse
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.VivaTimeline').vivaTimeline({
            carousel: false,
            carouselTime: 3000
        });
    </script>
@endsection