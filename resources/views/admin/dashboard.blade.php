@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col d-flex align-items-center">
            <h1 class="text-uppercase mt-5 fw-bold">Jack - Chinchillà developer portfolio</h1>
        </div>
    </div>
    <div class="row row-cols-1 mt-5">
        <div class="col text-uppercase mb-4 fw-bold text-center"><h6>About</h6></div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <img class="profile-img" src="{{ Vite::asset('resources/img/Senza titolo.png') }}" alt="">
                </div>
                <div class="col-9">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam incidunt aliquid sed fugit culpa a obcaecati dolore asperiores? Quasi sed cum recusandae ipsa officia facere iure aliquam repellendus! Cupiditate, ipsa!
                    Labore eos quia, explicabo neque placeat debitis, fugit quidem nesciunt aliquid laboriosam atque quo hic velit temporibus incidunt in. Veritatis, nam placeat? Reiciendis dicta tempore accusantium blanditiis voluptas, a deleniti?
                    Tenetur accusantium harum, earum nemo voluptatum nisi quos odio impedit ipsam reprehenderit officia porro dolorum error sequi odit soluta dignissimos consectetur dicta! Itaque necessitatibus tenetur illo pariatur iste qui consequatur!
                    Possimus quis ipsum exercitationem, ad nobis praesentium, minus at aspernatur temporibus amet suscipit dolor omnis officia. Possimus vel, sit perferendis ratione ipsa ipsum harum velit, adipisci laborum debitis eum dolorem!
                    Vel, nemo molestias et repudiandae sint nihil placeat eius enim labore harum a temporibus suscipit recusandae dignissimos consectetur incidunt modi assumenda quasi dolor iste, molestiae in! Deserunt quis ab unde.
                    Perspiciatis repellat deserunt tempora ipsa harum eaque laudantium cumque ullam voluptatem minus sed enim saepe nobis deleniti sunt, veritatis quaerat aspernatur in eius asperiores quia architecto. Labore ab fugiat asperiores!</p>
                </div>
            </div>
            
        </div>
        <div class="col mt-3">
            <ul class="d-flex welcome-li-social">
                <li><i class="fa-brands fa-invision"></i></li>
                <li><i class="fa-brands fa-square-instagram"></i></li>
                <li><i class="fa-brands fa-linkedin-in"></i></li>
                <li><i class="fa-brands fa-youtube"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
            </ul>
        </div>
    </div>
</div>
@endsection
