$(function () {

    $.get('dashboard/xhrGetList', (data) => {
        for (var i = 0; i < data.length; i++) {
            $('#tableList').append('<tr>');
            //$('#tableList').append('<td>' + data[i].id + '</td>');
            $('#tableList').append('<td>' + data[i].text + '</td>');
            $('#tableList').append('</tr>');
        }

    }, 'json');

    $('#send').click(function (event) {
        event.preventDefault();
        var url = $('#randomInsert').attr('action');
        var data = $('#randomInsert').serialize();
        $.post(url, data, () => {
            $('#tableList').append('<tr>');
            //$('#tableList').append('<td>' + null + '</td>');
            $('#tableList').append('<td>' + data.substring(5) + '</td>');
            $('#tableList').append('</tr>');
        })
    })
})
