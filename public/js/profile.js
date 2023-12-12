var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-2.2.4.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

const avatar = document.getElementById('avatar');
const subInfo = document.getElementById('subInfo');

$(avatar).mouseover(function (e) {
    $(subInfo).css("display", "flex");
});

$(avatar).mouseout(function (e) {
    $(subInfo).hide();
});

$(subInfo).mouseover(function (e) {
    $(subInfo).css("display", "flex");
});

$(subInfo).mouseout(function (e) {
    $(subInfo).hide();
});