$(document).on("click", ".open-ketersediaan", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
});