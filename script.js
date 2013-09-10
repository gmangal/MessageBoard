
$(function() {
    $('form[name="replyform"]').on("submit", function() {
        $.post($(this).attr("action"), $(this).serialize(), function(data) {
            data = JSON.parse(data);
            var tablerow = $("<tr>");

            $("<td>", {
                class: "username",
                text: data['username']
            }).appendTo(tablerow);

            var messagetd = $("<td>", {
                id: data['id'],
                class: "message",
            });

            $("<span>", {
                text: data['message']
            }).appendTo(messagetd);

            $("<textarea>", {
                style: "display:none",
                class: "posttextarea"
            }).appendTo(messagetd);

            messagetd.appendTo(tablerow);

            var td = $("<td>");

            $("<input>", {
                type: "submit",
                value: "Edit Post",
                onclick: "editPost(this);"
            }).appendTo(td);

            $("<input>", {
                type: "submit",
                value: "Edit",
                style: "display:none",
                onclick: "submitEdit(this);"
            }).appendTo(td);

            td.appendTo(tablerow);

            $("#poststable tr:eq(0)").after(tablerow);

            if ($("#poststable").children().children().length > 11)
            {
                $("#poststable tr:nth-child(12)").remove();
            }

            $('textarea[name="message"]').val("");

            return false;
        });
        return false;
    });    
});

function check_passwords()
{
    if (document.getElementById("password").value !=
            document.getElementById("password_rt").value)
        document.getElementById("password_rt")
            .setCustomValidity('Please ensure passwords match.');
    else
        document.getElementById("password_rt").setCustomValidity('');
}

function editPost(element)
{
    var messageElement = element.parentElement.previousElementSibling;
    var message = messageElement.children[0].innerText;
    var messageEdit = messageElement.children[1];
    messageEdit.value = message;
    messageElement.children[0].style.display = 'none';
    messageEdit.style.display = 'block';
    
    var otherButton = element.nextElementSibling;
    element.style.display = 'none';
    otherButton.style.display = 'block';
}

function submitEdit(element)
{
    var editedMessageElement = element.parentElement.previousElementSibling;
    var editedMessage = editedMessageElement.children[1].value;
    var idElement = element.parentElement.previousElementSibling;
    var postid = idElement.getAttribute('id');
    $.ajax({
        type: 'POST',
        url: 'updatepost.php',
        dataType: 'JSON',
        data: {
            'message': editedMessage,
            'postid': postid
        },
        success: function(data) {
            editedMessageElement.children[0].innerText = data['message'];
            editedMessageElement.children[1].value = "";
            editedMessageElement.children[0].style.display = 'block';
            editedMessageElement.children[1].style.display = 'none';

            return false;
        }
    });

    var originalButton = element.previousElementSibling;
    element.style.display='none';
    originalButton.style.display='block';
}

