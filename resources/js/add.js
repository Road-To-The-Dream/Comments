$(document).ready(function () {
    $(".tag").click(function () {
        let value = $(this).text();
        value = value.replace(/ /g, '').replace('[', '').replace(']', '');

        let content = $("#message").text();

        if (value === 'a') {
            content += '<' + value + ' href="" title="">' + '</' + value + '>'
        } else {
            content += '<' + value + '>' + '</' + value + '>'
        }

        $("#message").text(content);
    });

    $.notify(
        "Комментарий успешно добавлен !", {
            className: 'success',
            globalPosition: 'bottom left'
        }
    );

    $('#info').click(function () {
        $("#info").notify(
            "File size: < 100 KB" + "\n"
            + "Image format: PNG, JPG, GIF" + "\n"
            + "Image size: < 320x240 px", {
                className: 'info',
                position: "right"
            }
        );
    });
});
