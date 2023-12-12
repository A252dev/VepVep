@extends('layout')

@section('title') profile~~vepvep.com @endsection

@section('main_content')
<section class="profile-info">
    <div class="pr-bg">
        <nav class="user-control-sub" id="subInfo">
            <div class="user-control-left">
                <h5 class="user-title-nav">Аккаунт</h5>
                <a class="user-sub-link" href="#">Профиль</a>
                <a class="user-sub-link" href="#">Инвентарь</a>
                <a class="user-sub-link" href="#">Счета</a>
                <a class="user-sub-link" href="{{ url('/settings') }}">Настройки</a>
            </div>
            <div class="user-control-right">
                <h5 class="user-title-balance">Баланс VepVep</h5>
                <h5 class="user-balance-sub">₽0</h5>
                <div class="user-action-buttons">
                    <a class="action-button" href="#">Пополнить <svg class="action_svg"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M24 34.1q.65 0 1.075-.425.425-.425.425-1.075v-6.9h6.9q.65 0 1.075-.425.425-.425.425-1.075 0-.65-.425-1.075-.425-.425-1.075-.425h-6.9v-6.9q0-.65-.425-1.075Q24.65 14.3 24 14.3q-.65 0-1.075.425-.425.425-.425 1.075v6.9h-6.9q-.65 0-1.075.425-.425.425-.425 1.075 0 .65.425 1.075.425.425 1.075.425h6.9v6.9q0 .65.425 1.075.425.425 1.075.425Zm0 9.9q-4.15 0-7.8-1.575-3.65-1.575-6.35-4.275-2.7-2.7-4.275-6.35Q4 28.15 4 24t1.575-7.8Q7.15 12.55 9.85 9.85q2.7-2.7 6.35-4.275Q19.85 4 24 4t7.8 1.575q3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24v15.9q0 1.7-1.2 2.9T39.9 44Z">
                            </path>
                        </svg></a>
                    <a class="action-button" href="#">Вывод <svg class="action_svg"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path
                                d="M5.1 34.9q-.45-.45-.425-1.05.025-.6.425-1.05l12.45-12.45q.25-.25.5-.35.25-.1.55-.1.3 0 .55.1.25.1.5.35l7.3 7.3L39 15.6h-4.85q-.65 0-1.075-.425-.425-.425-.425-1.075 0-.65.425-1.075.425-.425 1.075-.425h8.35q.65 0 1.075.425Q44 13.45 44 14.1v8.35q0 .6-.425 1.05-.425.45-1.025.45-.6 0-1.05-.45-.45-.45-.45-1.05V17.8l-13.1 13.1q-.25.25-.5.35-.25.1-.55.1-.3 0-.55-.1-.25-.1-.5-.35l-7.3-7.3L7.2 34.95q-.4.4-1.025.4-.625 0-1.075-.45Z">
                            </path>
                        </svg></a>
                </div>
                <div class="sub-info">
                    <p class="sub-info-text">Обслуживанием платежей занимается UFOPay (ОГО БЛЯТЬ).</p>
                </div>
            </div>
        </nav>
        <section class="user-info-ct">
            <img class="user-avatar" src="{{ asset($id->avatar) }}" alt="avatar">
            <div class="user-info">
                <h5 class="user-title">{{ $id->nickname }}</h5>
                <p class="user-status">Онлайн</p>                
                <!-- <p class="user-status-offline">Заходил(а) 1 мин. назад</p> -->
            </div>
        </section>
        <section class="user-posts-ct">
            <h5 class="user-title-nav">Стенка</h5>
            <div class="posts-content">
                <p class="post-text">
                    {{ $id->about }}
                </p>               
            </div>
        </section>
        <section class="user-nav">
            <h5 class="user-title-nav">Навигация</h5>
            <nav class="user-link-ct">
                <a class="user-link rs-link" href="#">Инвентарь <span class="user-stats">(0)</span></a>
                <a class="user-link rs-link" href="#">Счета <span class="user-stats">(0)</span></a>
                <a class="user-link rs-link" href="{{ url('/settings') }}">Настройки</a>
            </nav>
        </section>
    </div>
</section>
<script src="{{ asset('js/profile.js') }}"></script>
@endsection