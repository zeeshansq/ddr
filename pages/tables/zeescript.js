$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        pagingType: 'full_numbers',
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-5:eq(0)');
});

function playSound(id) {
    showModal(id);
    var audio = new Audio('ding.m4a');
    var audio2 = new Audio('newslip.m4a');
    audio.play();
    setTimeout(function() {
        audio2.play();
        //your code to be executed after 2.5 second
    }, 2500);
    setTimeout(function() {
        $('#modal-lg').modal('hide');
        //your code to be executed after 15 second
    }, 13000);
}

function showModal(id) {
    $('#modal-lg').modal('show');
    $.post("info.php", {
            eid: id
        },
        function(data, status) {
            $(".modal-body").html(data);
        });
}
function test() {
    alert("OK");
};