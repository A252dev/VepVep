var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-2.2.4.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

const passShow = document.getElementById('pass_show');
const passHide = document.getElementById('pass_hide');

const passShowInput = document.getElementById('password_show');
const passHideInput = document.getElementById('password_hide');

passShow.addEventListener('click', function () {
    $(passShow).addClass('hidden');
    $(passHide).removeClass('hidden');

    $(passShowInput).removeClass('hidden');
    $(passHideInput).addClass('hidden');
});

passHide.addEventListener('click', function () {
    $(passShow).removeClass('hidden');
    $(passHide).addClass('hidden');

    $(passShowInput).addClass('hidden');
    $(passHideInput).removeClass('hidden');
});