$(document).ready(function () {

    // load jsonArrObj array from the blade page

    var page_number = 1;
    var records_per_page = 5;
    var total_page = Math.ceil(jsonArrObj.length / records_per_page);

    $.fn.displayPaginationButtons = function () {
        var buttons_text = '<a href="#" onClick="javascript:$.fn.prevPage();" class="item-nav-button"><-</a>' + '<a href="#" onClick="javascript:$.fn.nextPage();" class="item-nav-button">-></a>';
        // for (var i = 0; i <= total_page; i++) {

        // }
        $(".item-nav-container").text('');
        $(".item-nav-container").append(buttons_text);
    }
    $.fn.displayPaginationButtons();

    $.fn.displayTableData = function () {
        var start_index = (page_number - 1) * records_per_page;
        var end_index = start_index + (records_per_page - 1);
        end_index = (end_index >= jsonArrObj.length) ? jsonArrObj.length - 1 : end_index;

        var inner_html = '';

        for (var i = start_index; i <= end_index; i++) {
            inner_html = inner_html + '<tr>' +
                '<td>' +
                '<hr class="users-line">' +
                '<div class="community-user">' +
                '<img class="comm-user-avatar" src="../' + jsonArrObj[i].avatar + '" alt="avatar">' +
                '<div class="comm-user-info">' +
                '<a href="{{ url(' + jsonArrObj[i].userId + ') }}/" class="rs-link">' + jsonArrObj[i].nickname + '</a>' +
                '<p class="info-desc smaller">' + jsonArrObj[i].about + '</p>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '</tr>';
        }

        $("tbody tr").remove();
        $("tbody").append(inner_html);
        // $(".item-navigation").remove();
        $(".item-navigation").text('Показано ' + (start_index) + '-' + (end_index + 1) + ' из ' + jsonArrObj.length + '.');
        // $(".item-navigation").text('<p class="info-desc smaller">Показано <span class="info-title smaller">' + (start_index) + '-' + (end_index + 1) + '</span> из <span class="info-title smaller">' + jsonArrObj.length + '</span> результатов</p>');
    }

    $.fn.nextPage = function () {
        page_number++;
        $.fn.displayTableData();
    }

    $.fn.prevPage = function () {
        page_number--;
        $.fn.displayTableData();
    }

    $.fn.displayTableData();
});