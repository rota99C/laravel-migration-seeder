@extends ('layout.app')

@section('title', 'Travel Packages')
@section('content')
<main>
    <div class="main_header w-100">
        <div class="image_container">
            <img src="{{asset('img/logo.png')}}" alt="" srcset="">
        </div>
        <h1>My Travel Site</h1>
    </div>
    <div class="main_body d-flex flex-wrap justify-content-center">
        @foreach ($packages as $package)

        <div class="singolo">
            <div class="slideshow_container position-relative">
                <button class="information rounded-pill">More Information</button>
                <img src="{{$package -> image }}" alt="">
                <div class="price position-absolute bg-white rounded-pill"><strong>{{$package -> price }} euro</strong></div>
            </div>
            <div class="description p-3">
                <div>
                    @if($package ->means_of_transport == 'plane')
                    <i class="fas fa-plane"></i>
                    @elseif($package ->means_of_transport == 'ship')
                    <i class="fas fa-ship"></i>
                    @elseif($package ->means_of_transport == 'train')
                    <i class="fas fa-train"></i>
                    @elseif($package ->means_of_transport == 'autobus')
                    <i class="fas fa-bus"></i>
                    @elseif($package ->means_of_transport == 'Rocket')
                    <i class="fas fa-rocket"></i>
                    @endif

                    {{$package -> means_of_transport}} -

                    <i class="fas fa-bed"></i>
                    {{$package -> stay_length}} nights
                </div>
                <h3>{{$package -> destination}}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quod laboriosam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quod laboriosam.</p>

            </div>
        </div>

        @endforeach



    </div>
</main>






@endsection