@extends('layout')

@section('title')main~~vepvep.com @endsection

@section('main_content')
<section class="main-info">
    <div class="left-side">
        <img class="info-image" src="{{ asset('images/asuka_promo.png') }}">
    </div>
    <div class="right-side">
        <h5 class="rs-title">VepVep.com — you see an interactive DEMO version made by a252.dev</h5>
        <p class="rs-desc">Веселая игра в разработке, скрины тоже есть на этой страничке, заценитя:
            <a href="#" class="rs-link"> https://voznya.vepvep.com</a>
        </p>
    </div>
</section>
<section class="info-data">
    <div class="info-block">
        <h5 class="info-title">Активность</h5>
        <p class="info-desc">Зарегистрировано <span style="color: #fff;">78</span> пользователей.</p>
        <p class="info-desc">В сети за 24 часа было <span style="color: #fff;">0</span> пользователей.</p>
    </div>
    <div class="info-block">
        <h5 class="info-title">Маркет</h5>
        <p class="info-desc">Продано <span style="color: #fff;">83</span> лота на сумму <span
                style="color: #78A809;">5.63 $</span>.</p>
        <p class="info-desc">В продаже <span style="color: #fff;">163</span> лота на сумму <span
                style="color: #78A809;">449.48 $</span>.</p>
    </div>
    <div class="info-block">
        <h5 class="info-title">Оборот</h5>
        <p class="info-desc">Предметов в инвентарях пользователей <span style="color: #fff;">1,032</span>.</p>
    </div>
</section>
@endsection
