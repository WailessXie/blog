@extends('layouts.app')
@section('styles')
    <style>
        .jumbotron {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    @component('particals.jumbotron')
        <h3>{{ lang('Archives') }}</h3>

        <h6>{{ lang('Archives Meta') }}</h6>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if( $articles != [] )
                    <div class="VivaTimeline">
                        <dl>
                            @foreach( $articles as $index => $article)
                                <dt>{{ $index }}</dt>
                                @foreach( $article as $date => $list)
                                    <dd class="{{ rand(1,2)==1 ? 'pos-left': 'pos-right' }} clearfix wow animated fadeIn">
                                        <div class="circ"></div>
                                        <div class="time">{{ $date }}</div>
                                        <div class="events">
                                            <div class="events-body">
                                                @foreach( $list as $data )
                                                    <div class="row" style="transform: rotate(0);">
                                                        <div class="col-md-6 float-left">
                                                            <img alt="{{ $data->slug }}" src="{{ $data->page_image }}"
                                                                 class="events-object img-responsive img-rounded"
                                                                 style="width: 100%;">
                                                        </div>
                                                        <div class="events-desc">
                                                            {{ $data->meta_description }}
                                                        </div>
                                                        <a  href="{{ url($data->slug) }}" class="stretched-link"></a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="events-footer">

                                            </div>
                                        </div>
                                    </dd>
                                @endforeach
                            @endforeach
                        </dl>
                    </div>
                @else
                    <h3 class="text-center">{{ lang('Nothing') }}</h3>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.VivaTimeline').vivaTimeline({
            carousel: true,
            carouselTime: 3000
        });
    </script>
@endsection