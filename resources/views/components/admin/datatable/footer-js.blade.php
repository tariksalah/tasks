<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-colvis-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js"></script>

<script>
$(document).ready( function () {


    // Setup - add a text input to each cell
    // $('#kt_table_1 thead tr').clone(true).appendTo( '#kt_table_1 thead' );
    // $('#kt_table_1 thead tr:eq(1) th').each( function (i) {
    //     var title = $(this).text();
    //     $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    //
    //     $( 'input', this ).on( 'keyup change', function () {
    //         if ( table.column(i).search() !== this.value ) {
    //             table
    //                 .column(i)
    //                 .search( this.value )
    //                 .draw();
    //         }
    //     } );
    // } );


    var table = $('#kt_table_1').DataTable({
                    dom: 'fBptipr', // pBfrtip    Blfrtip
                    // buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ]
                    // 'ordering': false,

                    // for filter fileds
                    // orderCellsTop: true,
                    // fixedHeader: true,

                    scrollX: true,
                    language: {
                      paginate: {
                        next: "التالى",
                        previous: "السابق"
                      }
                    },
                    columnDefs: [ { // scheckbox -----
                        // orderable: false,
                        className: 'select-checkbox',
                        targets:   0
                    } ],
                    select: {
                        style:    'multi',
                        selector: 'td:first-child'
                    },
                    // order: [[ 1, 'desc' ]], // end check box ------
                    buttons: [
                       { extend: 'copy' },
                       { extend: 'excel' },
                       { extend: 'csv' },
                       { extend: 'print' },
                       { text: 'pdf' , action: function () {

                                           // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                                           data = document.getElementById("kt_table_1").innerHTML;
                                           // Done but error 414 request url is too larg solved by changing get to post

                                           $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
                                           // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                                           $.ajax({
                                           url: "/pdf",
                                           type: 'post',
                                           // dataType: "json",
                                           data: { 'data':data },
                                           xhrFields: { responseType: 'blob' },
                                           success: function(response, status, xhr) {
                                               // https://github.com/barryvdh/laravel-dompdf/issues/404

                                               // console.log(response);
                                               // var filename = "" ;
                                               // var disposition = xhr.getResponseHeader('Content-Disposition');
                                               // if (disposition) {
                                               //     var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                               //     var matches = filenameRegex.exec(disposition);
                                               //     if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                                               // }
                                               // var blob = new Blob([response], { type: 'application/octet-stream' });
                                               // var URL = window.URL || window.webkitURL;
                                               // var downloadUrl = URL.createObjectURL(blob);
                                               // var a = document.createElement("a");
                                               // a.href = downloadUrl;
                                               // // a.setAttribute('href', );
                                               // a.download = filename;
                                               // document.body.appendChild(a);
                                               // a.target = "_blank";
                                               // a.click();


                                               var filename = "";
                                               var disposition = xhr.getResponseHeader('Content-Disposition');

                                                if (disposition) {
                                                   var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                                   var matches = filenameRegex.exec(disposition);
                                                   if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                                               }
                                               var linkelem = document.createElement('a');
                                               try {
                                                   var blob = new Blob([response], { type: 'application/octet-stream' });

                                                   if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                                       //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                                       window.navigator.msSaveBlob(blob, filename);
                                                   } else {
                                                       var URL = window.URL || window.webkitURL;
                                                       var downloadUrl = URL.createObjectURL(blob);

                                                       if (filename) {
                                                           // use HTML5 a[download] attribute to specify filename
                                                           var a = document.createElement("a");

                                                           // safari doesn't support this yet
                                                           if (typeof a.download === 'undefined') {
                                                               window.location = downloadUrl;
                                                           } else {
                                                               a.href = downloadUrl;
                                                               a.download = filename;
                                                               document.body.appendChild(a);
                                                               a.target = "_blank";
                                                               a.click();
                                                           }
                                                       } else {
                                                           window.location = downloadUrl;
                                                       }
                                                   }

                                               } catch (ex) {
                                                   console.log(ex);
                                               }

                                           },error: function (xhr, status, error)
                                              { console.log(xhr.responseText); },
                                           });
                                      }
                       }
                   ]
                });


                // select all  -------------------------------------------------
                $("#select_all").on( "click", function(e) {
                    if ($(this).is( ":checked" )) {
                        table.rows().select();
                        $('#delete').removeClass('btn btn-outline-danger');
                        $('#delete').addClass('btn btn-danger btn-elevate');
                        $('#delete').text( deleteWord + ' : ' + table.rows('.selected').data().length );
                    } else {
                        table.rows().deselect();
                        $('#delete').removeClass('btn btn-danger btn-elevate');
                        $('#delete').addClass('btn btn-outline-danger');
                        $('#delete').text( deleteWord );
                    }
                });


                // select row  -------------------------------------------------
                deleteWord = "Delete";
                $('#kt_table_1 tbody').on( 'click', 'tr', function () {
                    $(this).toggleClass('selected');

                    if (table.rows('.selected').data().length > 0 ) {
                        $('#delete').removeClass('btn btn-outline-danger');
                        $('#delete').addClass('btn btn-danger btn-elevate');
                        $('#delete').text( deleteWord + ' : ' + table.rows('.selected').data().length );
                    } else {
                      $('#delete').removeClass('btn btn-danger btn-elevate');
                      $('#delete').addClass('btn btn-outline-danger');
                      $('#delete').text( deleteWord );
                    }
                });


                // delete button -----------------------------------------------
              $( '#frm_delete' ).on('submit', function(e) {
                  e.preventDefault();
                  var dataList=[];
                  $("#kt_table_1 .selected").each(function(index) {
                      dataList.push($(this).find('td:first').attr('value'))
                  })

                  if(dataList.length == 0){
                    return;
                  }

                  var type = $(this).attr('method');
                  var url = $(this).attr('action');
                  var data = $(this).serialize();
                  data = data + '&' + 'ids=' + dataList;


                  Swal.fire({
                    title: '{{ __("messages.confirm_delete_title") }}', text: '{{ __("messages.confirm_delete_text") }}', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: '{{ __("messages.yes_delete") }}' , cancelButtonText: '{{ __("messages.cancel") }}'
                  }).then((result) => {
                    if (result.value) {
                              $.ajax({
                              url : url ,
                              type : type ,
                              data : data , // {'ids':dataList},
                              dataType:"JSON",
                              success: function (data) {
                                  // console.log(data);
                                  // return;

                                  if(data['success']) {
                                    location.reload();
                                  }

                                  if(data['error']) {
                                      Swal.fire("{{trans('messages.deleted_faild')}}", data['error'], "error");
                                  }
                              },
                              error: function (xhr, status, error)
                              {
                                if (xhr.status == 419) // httpexeption login expired or user loged out from another tab
                                {window.location.replace( '{{ route("admin.home") }}' );}
                                Swal.fire("", "{{ __('messages.deleted_faild') }}", "error");
                                console.log(xhr.responseText);

                              }
                          });
                    }
                  })

              });
              //  --------------------------------------------------------------



              // $('#kt_table_1 tbody').on( 'mouseover', 'tr', function () {
              //
              //   console.log($(this).find(':last-child'));
              //
              // });




});





</script>
