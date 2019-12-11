$(document).ready(function() {
    $(".edit-td").keyup(function() {
        var col_val = $(this).text();
        var dataName = $(this).attr('data-name');
        var arr = dataName.split('-');  
       console.log(arr);
        var col_name = arr[0];
        var rowId = arr[1];

        console.log(col_name);
        console.log(rowId);
        $.ajax({
            type: "POST",
            url: "../api/ajax/changedataondash.php",
            data: ({col_name: col_name, rowId: rowId, col_val: col_val}),
            dataType: 'json',
            cache: false,
            success: function(data) {
                console.log(data);
            }
        });

    });
});
        // var id = $(this).attr('id');
        // var name = $(this).attr('data-name');
        // console.log(id);
        // console.log(name);

//         $(name).hide();
//         $(this).find('span').hide();
//         $(this).find('input').show();


//         $("#migzer_span_" + id).hide();
        
//         $("#migzer_input_" + id).show();
  

//     }).change(function() {
//         var ID = $(this).attr('id');
//         var status = $("#status_input_" + ID).val();
//         var comment = $("#comment_input_" + ID).val();
//         var del = $("#del_input_" + ID).val();
//         var dataString = 'id=' + ID + '&lead_status=' + status + '&lead_comment=' + comment;
//         $("#status_" + ID).html('<img src="load.gif" />');


//         if (status.length && comment.length > 0) {
//             $.ajax({
//                 type: "POST",
//                 url: "../inc/updateTable.php",
//                 data: dataString,
//                 cache: false,
//                 success: function(html) {

//                     $("#status_" + ID).html(status);
//                     $("#comment_" + ID).html(comment);
//                     $("#del_" + ID).html(del);
//                 }
//             });
//         } else {
//             alert('Enter something.');
//         }

//     })



//     /*call table ajax function*/

//     $(".call_tr").click(function() {
//         var ID = $(this).attr('id');

//         $("#status_" + ID).hide();
//         $("#comment_" + ID).hide();
//         $("#status_input_" + ID).show();
//         $("#comment_input_" + ID).show();
//     }).change(function() {
//         var ID = $(this).attr('id');
//         var status = $("#status_input_" + ID).val();
//         var comment = $("#comment_input_" + ID).val();
//         var dataString = 'id=' + ID + '&call_status=' + status + '&call_comment=' + comment;
//         $("#status_" + ID).html('<img src="load.gif" />');


//         if (status.length && comment.length > 0) {
//             $.ajax({
//                 type: "POST",
//                 url: "../inc/updatetablecalls.php",
//                 data: dataString,
//                 cache: false,
//                 success: function(html) {

//                     $("#status_" + ID).html(status);
//                     $("#comment_" + ID).html(comment);
//                 }
//             });
//         } else {
//             alert('Enter something.');
//         }

//     });


// });

//     //     var ID = $(this).attr('id');

//     //     $("#status_" + ID).hide();
//     //     $("#comment_" + ID).hide();
//     //     $("#del_input_" + ID).hide();
//     //     $("#status_input_" + ID).show();
//     //     $("#comment_input_" + ID).show();
//     //     $("#del_input_" + ID).show();

//     // }).change(function() {
//     //     var ID = $(this).attr('id');
//     //     var status = $("#status_input_" + ID).val();
//     //     var comment = $("#comment_input_" + ID).val();
//     //     var del = $("#del_input_" + ID).val();
//     //     var dataString = 'id=' + ID + '&lead_status=' + status + '&lead_comment=' + comment;
//     //     $("#status_" + ID).html('<img src="load.gif" />');


//     //     if (status.length && comment.length > 0) {
//     //         $.ajax({
//     //             type: "POST",
//     //             url: "../inc/updateTable.php",
//     //             data: dataString,
//     //             cache: false,
//     //             success: function(html) {

//     //                 $("#status_" + ID).html(status);
//     //                 $("#comment_" + ID).html(comment);
//     //                 $("#del_" + ID).html(del);
//     //             }
//     //         });
//     //     } else {
//     //         alert('Enter something.');
//     //     }

//     // })



//     // /*call table ajax function*/

//     // $(".call_tr").click(function() {
//     //     var ID = $(this).attr('id');

//     //     $("#status_" + ID).hide();
//     //     $("#comment_" + ID).hide();
//     //     $("#status_input_" + ID).show();
//     //     $("#comment_input_" + ID).show();
//     // }).change(function() {
//     //     var ID = $(this).attr('id');
//     //     var status = $("#status_input_" + ID).val();
//     //     var comment = $("#comment_input_" + ID).val();
//     //     var dataString = 'id=' + ID + '&call_status=' + status + '&call_comment=' + comment;
//     //     $("#status_" + ID).html('<img src="load.gif" />');


//     //     if (status.length && comment.length > 0) {
//     //         $.ajax({
//     //             type: "POST",
//     //             url: "../inc/updatetablecalls.php",
//     //             data: dataString,
//     //             cache: false,
//     //             success: function(html) {

//     //                 $("#status_" + ID).html(status);
//     //                 $("#comment_" + ID).html(comment);
//     //             }
//     //         });
//     //     } else {
//     //         alert('Enter something.');
//     //     }

   

