$(function () {

    $.get('dashboard/xhrGetList', (data) => {
        for (let i = 0; i < data.length; i++) {
            let cells = 
            `<tr>
                <td> ${data[i].id} </td>
                <td> ${data[i].text} </td>
                <td>
                  <a href="#" class="del btn btn-danger" rel="${data[i].id}">Eliminar</a>
                </td>
            </tr>`;
            //$('#tableList').append('<tr><td>' + data[i].id + '</td><td>' + data[i].text + '</td><td><a href="#" class="del btn btn-secondary" rel="' + data[i].id + '">Eliminar</a></td></tr>');
            $('#tableList').append(cells);
        }

        $('.del').click(function (event) {
            event.preventDefault();
            let data = { 'id': $(this).attr('rel') };
            $.post('dashboard/xhrDelete', data, (rs) => {
                console.log('eliminado: ' + data.id);
                $(this).parent().parent().remove();
            })
            return false;
        })
        return false;

    }, 'json');//get function

    $('#send').click(function (event) {
        event.preventDefault();
        let url = $('#randomInsert').attr('action');
        let data = $('#randomInsert').serialize();
        $.post(url, data, (data) => {
            $('#tableList').append('<tr><td>' + data.id + '</td><td>' + data.text + '</td><td><a href="#" class="del btn btn-secondary" rel="' + data.id + '">Eliminar</a></td></tr>');
            $('.del').click(function (event) {
                event.preventDefault();
                id = $(this).attr('rel');
                let data = { 'id': id };
                $.post('dashboard/xhrDelete', data, (rs) => {
                    console.log('eliminado: ' + data.id);
                    $(this).parent().parent().remove();
                })
                return false;
            })

        }, 'json')

    })

})//main function
