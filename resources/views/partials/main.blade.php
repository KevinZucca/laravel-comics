<div id="main-section-container" class="my-container">

    {{-- comics --}}
    <div id="card-container" class="container-centered">
        @foreach ($cards as $singleCard)
            <div class="my-card">
                <img class="comic-img" src="{{$singleCard['thumb']}}" alt="cover-img">
                <h4>{{$singleCard['title']}}</h4>
            </div>
        @endforeach

        <div id="comics-title">
            <h2>CURRENT SERIES</h2>
        </div>
    </div>

    <button class="blue-button">
        <a href="#">LOAD MORE</a>
    </button>


    {{-- shop section --}}
    <div id="shop-container" class="my-container">
        <div id="shop-links-container" class="container-centered">
            @foreach ($shopLinks as $key => $value)
                <img src="{{Vite::asset($value)}}" alt="shop-img">
                <a href="#">{{$key}}</a>
            @endforeach
        </div>
    </div>

</div>