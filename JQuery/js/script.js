/**
 * Created by interntwo on 9/26/15.
 */
function addRow() {
    var shopName = $("#shopName").val();
    var phoneName = $("#phoneName").val();
    var price = $("#price").val();

    $(".myTable").append('<tr><td>' + phoneName + '</td><td>' + shopName + '</td><td>' + price +'</td>' +
        '</td><td><button class="edit" onclick="editRow(this)">Edit</button></td> <td>' +
        '<button class="edit" onclick="deleteRow(this)">Delete</button></td></tr>');
}

function deleteRow(data) {
    var $row = $(data).parent().parent();
    $row.remove();
}

function editRow(data) {
    var buttonValue = $(data).text();
    var $row = $(data).parent().parent();
    if (buttonValue == "Edit") {
        $row.attr("contenteditable", true);
        $(data).text("Stop Edit");
    }else {
        $row.attr("contenteditable", false);
        $(data).text("Edit");
    }
}

$(document).ready(function () {
    $(".myTable").append('<tr><td>Huawei</td><td>Genesis</td><td>40000</td>' +
        '</td><td><button class="edit" onclick="editRow(this)">Edit</button></td>' +
        ' <td><button class="edit" onclick="deleteRow(this)">Delete</button></td></tr>');
});
