@extends('layout')

@section('title') community~~vepvep.com @endsection

@section('main_content')
<section class="community-info">
    <div class="community-container">
        <div class="community-hd">
            <h5 class="info-title">Кто там?</h5>
            <p class="info-desc">Залогиньтесь и попадете на первые места по активности.</p>
        </div>
        <div class="community-list">
            <table id="community_table">
            {{-- @foreach($list as $user) --}}
                <tbody>
                    <tr>
                        <td>
                            {{-- <hr class="users-line">
                            <div class="community-user">
                                <img class="comm-user-avatar" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpiq.codeus.net%2Fstatic%2Fmedia%2Fuserpics%2Fpiq_181568_400x400.png&f=1&nofb=1&ipt=cf6362823d53563664e4892378967ddd63b976f3ed364e4a07565156a964b405&ipo=images" alt="avatar">
                                <div class="comm-user-info">
                                    <a href="{{ url('/profile') }}/{{ $user->userId }}" class="rs-link">{{ $user->nickname }}</a>
                                    <p class="info-desc smaller">{{ $user->about }}</p>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                </tbody>
            {{-- @endforeach --}}
            </table>
            <nav class="item-navigation">
                {{-- <p class="info-desc smaller">Показано <span class="info-title smaller">1-10</span> из <span class="info-title smaller">80</span> результатов</p> --}}
            </nav>
            <section class="item-nav-container">
                {{-- content from the js file --}}
            </section>
        </div>
    </div>
</section>
@endsection
<script>
    var jsonArrObj = {!! $list !!};
    console.log(jsonArrObj);
</script>
