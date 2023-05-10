<div id="footer-container" class="my-container">
    <div id="footer-links-container" class="container-centered">
        @foreach ($footerLinks as $list)
        <ul>
            @foreach ($list as $singleLink)
                <li>{{$singleLink}}</li>  
            @endforeach
        </ul>
        @endforeach

        <img id="big-logo" src="{{Vite::asset("/resources/img/images/dc-logo-bg.png")}}" alt="big-logo">

    </div>
</div>