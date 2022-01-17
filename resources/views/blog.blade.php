@extends ('layout.app')

@section('title', 'Travel posts')
@section('content')
<main>
    <div class="main_header w-100">
        <div class="image_container">
            <img src="{{asset('img/logo.png')}}" alt="" srcset="">
        </div>
        <h1>My Travel Site</h1>
    </div>
    <div class="main_body d-flex flex-wrap justify-content-center">
        @foreach ($posts as $post)

        <div class="singolo">
            <div class="slideshow_container position-relative">
                <button class="information rounded-pill">read more</button>
                <img src="{{$post -> image }}" alt="">
                <div class="price position-absolute bg-white rounded-pill"><strong>{{$post -> topic }}</strong></div>
            </div>
            <div class="description p-3">
                <div>

                    {{$post -> author}} -

                    {{$post -> date}}
                </div>
                <h3>{{$post -> title}}</h3>
                <p>{{$post-> article}}</p>

            </div>
        </div>

        @endforeach




    </div>
</main>






@endsection