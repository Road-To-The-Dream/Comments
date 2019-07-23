$(document).ready(function () {

    $(".tag").click(function () {
        let value = $(this).text();
        value = value.replace(/ /g, '').replace('[', '').replace(']', '');

        let content = $("#message").val();

        if (value === 'a') {
            content += '<' + value + ' href="" title="">' + '</' + value + '>'
        } else {
            content += '<' + value + '>' + '</' + value + '>'
        }

        $("#message").val(content);
    });

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

    $("#comment_form:first").submit(function (event) {
        event.preventDefault();
        let data = new FormData(this);
        $.ajax({
            type: 'POST',
            url: this.action,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function () {
                scrollPageUp();
                $.notify(
                    "Комментарий успешно добавлен !", {
                        className: 'success',
                        globalPosition: 'bottom left'
                    }
                );

                $('#comment_form')[0].reset();
                $(".request").empty();
            },
            error: function (errorResponse) {
                $.notify(
                    "Ошибка при отправке данных !", {
                        className: 'error',
                        globalPosition: 'bottom left'
                    }
                );

                scrollPageUp();
                $(".request").empty();

                if (errorResponse['status'] === 403) {
                    $(".request").append("<div class=\"mb-3 alert alert-danger\">" + errorResponse['responseText'] + "</div>");
                } else {
                    $.each(errorResponse['responseJSON']['errors'], function (key, value) {
                        $(".request").append("<div class=\"mb-3 alert alert-danger\">" + value + "</div></br>");
                    });
                }
            }
        });
    })
});

function scrollPageUp() {
    $('html, body').animate({
        scrollTop: 0
    }, 500);
}