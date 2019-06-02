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
});