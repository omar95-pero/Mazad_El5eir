<!--begin::Global Theme Bundle -->
<script src="{{url('admin')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{url('admin')}}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{url('admin')}}/assets/app/js/dashboard.js" type="text/javascript"></script>

<!--end::Page Scripts -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>



{{---------------------------------------------------------------------------------------------------------------}}
{{--<script src="http://localhost/hasry/public/dashboard/imageuploadify/imageuploadify.min.js"></script>--}}
{{--<script src="http://localhost/hasry/public/dashboard/ckeditor/ckeditor.js" type="text/javascript"></script>--}}
{{--<script src="http://localhost/hasry/public/dashboard/ckeditor/adapters/jquery.js" type="text/javascript"></script>--}}
{{--<script src="http://localhost/hasry/public/dashboard/datatable_btn/dataTables.buttons.min.js"></script>--}}
{{--<script src="http://localhost/hasry/public/vendor/datatables/buttons.server-side.js"></script>--}}
{{--<script type="text/javascript" charset="utf8" src="http://localhost/hasry/public/dashboard/assets/app/js/check.js"></script>--}}

                                {{-----------------------------------}}
<script src="{{url('admin/js')}}/dataTables.buttons.min.js"></script>
<script src="{{url('admin/js')}}/buttons.server-side.js"></script>
{{--<script src="{{url('admin/js')}}/ckeditor.js" type="text/javascript"></script>--}}
<script src="{{url('admin/js')}}/jquery.js" type="text/javascript"></script>
<script src="{{url('admin/js')}}/imageuploadify.min.js"></script>
<script type="text/javascript" charset="utf8" src="{{url('admin/js')}}/check.js"></script>
<script type="text/javascript"  src="{{url('admin/js')}}/jquery.form-validator.js"></script>
<script type="text/javascript"  src="{{url('admin/js')}}/jquery.validate.js"></script>






{{----------------------------------------------------------------------------------------------------------------}}

<!-- DataTable fixedHeader -->
<!-- <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>  -->

<!-- DataTable responsive -->
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        //spinner
        // document.onreadystatechange = function () {
        //     var state = document.readyState
        //     if (state == 'interactive') {
        //         $(".loader ").css("background-color","#fff");
        //         $(".loader ").css("display","flex");
        //         } else if (state == 'complete') {
        //         setTimeout(function(){
        //             $(".loader ").css("background-color","rgba(0,0,0,0.5)");
        //             $(".loader ").css("display","none");
        //         },1000);
        //     }
        // }
        $(".loader ").css("background-color","#fff");
        $(".loader ").css("display","flex");
        setTimeout(function(){
          $(".loader ").css("background-color","rgba(0,0,0,0.5)");
            $(".loader ").css("display","none");
        },1000);
    })
    function check_all()
    {
        $('input[class="item_checkbox"]:checkbox').each(function(){
            if ( $('input[class="check_all"]:checkbox:checked').length == 0 ) {
                $(this).prop('checked', false);
            }else {
                $(this).prop('checked', true);
            }
        });
    }

    function delete_all()
    {

        $(document).on('click', '.del_all', function(){
            $('#form_data').submit();
        });

        $(document).on('click', '.delBtn', function(){
            var item_checked = $('input[class="item_checkbox"]:checkbox').filter(":checked").length;

            if (item_checked > 0) {
                $('.record_count').text(item_checked);
                $('.not_empty_record').removeClass('hidden');
                $('.empty_record').addClass('hidden');
            }else {
                $('.record_count').text(item_checked);
                $('.not_empty_record').addClass('hidden');
                $('.empty_record').removeClass('hidden');
                $('.del_all').hide();
            }

            $('#mutlipleDelete').modal('show');
        });
    }

</script>


<script>
    // $('.textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });//end jquery
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.file_upload').imageuploadify();
    })
</script>


<script>
    $(function () {
        $('.selectpicker').selectpicker();
    });
</script>


<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready( function () {
        $('.myTable').dataTable({

            initComplete: function () {
                this.api().columns().every(function () {
                    var column = this;
                    var search = $(`<input style="font-size: 115%" class="form-control form-control-sm" type="text" placeholder="بحث .... ">`)
                        .appendTo($(column.footer()).empty())
                        .on('change input', function () {
                            var val = $(this).val()

                            column
                                .search(val ? val : '', true, false)
                                .draw();
                        });
                });
            }
        });
    });
</script>



<script lang='javascript'>
    $(document).ready(function(){
        $('#printPage').click(function(){
            var data = '<input type="button" value="Print this page" onClick="window.print()">';
            data += '<div id="div_print">';
            data += $('#').html();
            data += '</div>';

            myWindow=window.open('','','width=500,height=300');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        });
    });
</script>
<script lang='javascript'>
    $(document).ready(function(){
        $('#print_contacts').click(function(){
            var data = '<input type="button" value="Print this page" onClick="window.print()">';
            data += '<div id="div_print">';
            data += $('#report').html();
            data += '</div>';

            myWindow=window.open('','','width=500,height=300');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        });
    });
</script>



<script type="text/javascript" charset="utf8">
    $("#checkAl").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $("#checkAlll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.js"></script>


<script>
    delete_all();
</script>


<script type="text/javascript">
    $( document ).ready(function() {
        $('.loady').css('width','100%').parent().fadeOut(2000);
    });
</script>

<script>

    // Write scripts here

</script>



<script type="text/javascript">toastr.options = {"closeButton":true,"closeClass":"toast-close-button","closeDuration":300,"closeEasing":"swing","closeHtml":"<button><i class=\"icon-off\"><\/i><\/button>","closeMethod":"fadeOut","closeOnHover":true,"containerId":"toast-container","debug":false,"escapeHtml":false,"extendedTimeOut":10000,"hideDuration":1000,"hideEasing":"linear","hideMethod":"fadeOut","iconClass":"toast-info","iconClasses":{"error":"toast-error","info":"toast-info","success":"toast-success","warning":"toast-warning"},"messageClass":"toast-message","newestOnTop":false,"onHidden":null,"onShown":null,"positionClass":"toast-top-right","preventDuplicates":true,"progressBar":true,"progressClass":"toast-progress","rtl":false,"showDuration":300,"showEasing":"swing","showMethod":"fadeIn","tapToDismiss":true,"target":"body","timeOut":5000,"titleClass":"toast-title","toastClass":"toast"};</script>
<!-- begin::Quick Nav -->

<!--begin:: Global Mandatory Vendors -->
{{-----------------------------------------------------------------------------}}
{{--<script src="{{url('admin')}}/vendors/jquery/dist/jquery.js" type="text/javascript"></script>--}}


<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{url('admin')}}/assets/demo/custom/crud/datatables/extensions/buttons.js" type="text/javascript"></script>

<!--end::Page Scripts -->













<script src="{{url('admin/js')}}/tostar.js"></script>
<script>

        @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{Session::get('message')}}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
    }
    @endif
</script>

{{--/////////////////////////////////////  recaptcha ////////////////////--}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--end_tostar--->
{{--<script>--}}

{{--    @if (Session::has('message'))--}}
{{--    var type = "{{ Session::get('alert-type', 'info') }}"--}}
{{--    switch(type){--}}
{{--        case 'info':--}}

{{--            toastr.options.timeOut = 10000;--}}
{{--            toastr.info("{{Session::get('message')}}","{{Session::get('title')}}");--}}
{{--            var audio = new Audio('audio.mp3');--}}
{{--            audio.play();--}}
{{--            break;--}}
{{--        case 'success':--}}

{{--            toastr.options.timeOut = 10000;--}}
{{--            toastr.success("{{Session::get('message')}}","{{Session::get('title')}}");--}}
{{--            var audio = new Audio('audio.mp3');--}}
{{--            audio.play();--}}

{{--            break;--}}
{{--        case 'warning':--}}

{{--            toastr.options.timeOut = 10000;--}}
{{--            toastr.warning("{{Session::get('title')}}","{{Session::get('message')}}");--}}
{{--            var audio = new Audio('audio.mp3');--}}
{{--            audio.play();--}}

{{--            break;--}}
{{--        case 'error':--}}

{{--            toastr.options.timeOut = 10000;--}}
{{--            toastr.error("{{Session::get('message')}}","{{Session::get('title')}}");--}}
{{--            var audio = new Audio('audio.mp3');--}}
{{--            audio.play();--}}

{{--            break;--}}
{{--    }--}}
{{--    @endif--}}
{{--</script>--}}



<!--begin::Global Theme Bundle -->

{{------------------------------------------------------------------}}
{{--<script src="{{url('admin')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>--}}



<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->

<!--end::Page Vendors -->

<!--begin::Page Scripts -->

<!--end::Page Scripts -->
<script>
    function check_all()
    {
        $('input[class="item_checkbox"]:checkbox').each(function(){
            if ( $('input[class="check_all"]:checkbox:checked').length == 0 ) {
                $(this).prop('checked', false);
            }else {
                $(this).prop('checked', true);
            }
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            initComplete: function () {
                this.api().columns([@stack("column")]).every(function () {
                    var column = this;
                    var search = $(`<input style="font-size: 85%;height: 15px;width: 100%" class="form-control form-control-sm" type="text" placeholder="بحث .... ">`)
                        .appendTo($(column.footer()).empty())
                        .on('change input', function () {
                            var val = $(this).val()

                            column
                                .search(val ? val : '', true, false)
                                .draw();
                        });
                });
            },
            'select': {style: 'multi', selector: 'td:first-child'},
            "language": {
                "lengthMenu": "عرض _MENU_ من المدخلات",
                "zeroRecords": "نأسف لم نجد أى بيانات",
                "info": "  * عرض الصفحه _PAGE_ من _PAGES_ *  ",
                "infoEmpty": "لا يوجد بيانات متاحه",
                "infoFiltered": "(تم البحث فى _MAX_ من المدخلات)"
            },
            dom: 'Blfrtip',
            buttons: [
                'copy',  {
                            extend:'print',
                            exportOptions: {
                                columns: ':visible:Not(.not-exported)',
                                rows: ':visible',
                                text:'الطباعة'
                            }
                            }, {
                    extend: 'colvis',                     columns: ':gt(0)',                  text:'التحكم فى اﻷعمدة' }
            ],
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

        } );
    } );
</script>

<script>
    $(document).ready(function() {
        jQuery('.dt-buttons').each(function () {
            $(this).addClass('table-responsive-md')
        });
    } );
</script>
<script>
    // document.onreadystatechange = function () {
    //     var state = document.readyState
    //     if (state == 'interactive') {
    //         $(".loader ").css("background-color","#fff");
    //         $(".loader ").css("display","flex");
    //         } else if (state == 'complete') {
    //         setTimeout(function(){
    //             $(".loader ").css("background-color","rgba(0,0,0,0.5)");
    //             $(".loader ").css("display","none");
    //         },1000);
    //     }
    // }
    $(document).ready(function() {
        // $(".loader ").css("background-color","#fff");
        // $(".loader ").css("display","flex");
        // setTimeout(function () {
        //     $(".loader ").css("display","none");
        // }, 1000);
        if (sessionStorage.getItem("login") == 'login') {
            toastr.success('تم تسجيل الدخول بنجاح');
            sessionStorage.removeItem("login");
        }

    } );
</script>
<script type="text/javascript">
    $(document).on('click','.submit_delete',function () {
        var new_route= $(this).attr('attr_route')
        // var new_val= $(this).attr('attr_val')
        swal({
            title: "تأكيد",
            text: "هل أنت متأكد من الحذف؟",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $(document).ready(function(){
                        $(".loader ").css("display","flex");
                        setTimeout(function () {
                            $(".loader ").css("display","none");
                        }, 3000);
                    });
                    setTimeout(function () {
                        $.ajax({
                            type: 'DELETE',
                            url: new_route,
                            data: {"_token": "{{csrf_token()}}"},
                            success: function (data) {
                                console.log(data)
                                if (data == 'yes') {
                                    swal("تم الحذف", {
                                        icon: "success",
                                    }).then(function () {
                                            location.reload();
                                        }
                                    );
                                }

                                if (data == 'no'){
                                    swal("ليست لديك الصلاحية للحذف", {
                                        icon: "error",
                                    }).then(function () {
                                            location.reload();
                                        }
                                    );
                                }

                            },
                            error: function () {
                                swal("هناك خطأ ماّ!!", {
                                    icon: "error",
                                }).then(function(){
                                        location.reload();
                                    }
                                );
                            }
                        });
                    }, 3020);
                } else {
                    swal("تم التراجع");
                }
            });
    });
</script>
<script type="text/javascript">
    $(document).on('click','#SubmitAccipt',function () {
        var new_route= $(this).attr('attr_route')
        // var new_val= $(this).attr('attr_val')
        swal({
            title: "تأكيد",
            text: "هل أنت متأكد من الموافة؟",
            icon: "success",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $(document).ready(function(){
                        $(".loader ").css("display","flex");
                        setTimeout(function () {
                            $(".loader ").css("display","none");
                        }, 3000);
                    });
                    setTimeout(function () {
                        $.ajax({
                            type: 'GET',
                            url: new_route,
                            data: {},
                            success: function (data) {
                                console.log(data)
                                if (data == 'yes') {
                                    swal("تم القبول", {
                                        icon: "success",
                                    }).then(function () {
                                            location.reload();
                                        }
                                    );
                                }

                                if (data == 'no'){
                                    swal("ليست لديك الصلاحية للقبول", {
                                        icon: "error",
                                    }).then(function () {
                                            location.reload();
                                        }
                                    );
                                }

                            },
                            error: function () {
                                swal("هناك خطأ ماّ!!", {
                                    icon: "error",
                                }).then(function(){
                                        location.reload();
                                    }
                                );
                            }
                        });
                    }, 3020);
                } else {
                    swal("تم التراجع");
                }
            });
    });
</script>
<script>
    jQuery('.numbersOnly').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
</script>

<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>
{{--<script type="text/javascript">--}}
{{--    swal({--}}
{{--        title: "Are you sure?",--}}
{{--        text: "Once deleted, you will not be able to recover this imaginary file!",--}}
{{--        icon: "warning",--}}
{{--        buttons: true,--}}
{{--        dangerMode: true,--}}
{{--    })--}}
{{--        .then((willDelete) => {--}}
{{--            if (willDelete) {--}}
{{--                swal("Poof! Your imaginary file has been deleted!", {--}}
{{--                    icon: "success",--}}
{{--                });--}}
{{--            } else {--}}
{{--                swal("Your imaginary file is safe!");--}}
{{--            }--}}
{{--        });--}}
{{--</script>--}}
<script type="text/javascript">

    $("ul#setting").siblings('a').attr('aria-expanded', 'true');
    $("ul#setting").addClass("show");
    $("ul#setting li").eq(0).addClass("active");

    $("#select_all").on("change", function () {
        if ($(this).is(':checked')) {
            $("tbody input[type='checkbox']").prop('checked', true);
        }
        else {
            $("tbody input[type='checkbox']").prop('checked', false);
        }
    });
</script>
<script>
    $.validate({

    });
</script>
<script>
    jQuery(document).delegate('a.add-record', 'click', function(e) {
            e.preventDefault();
            var content = jQuery('#sample_table tr'),
                size = jQuery('#tbl_posts >tbody >tr').length + 1,
                element = null,
                element = content.clone();
            element.attr('id', 'rec-'+size);
            element.find('.delete-record').attr('data-id', size);
            element.appendTo('#tbl_posts_body');
            element.find('.sn').html(size);

    });
</script>

<script>
    jQuery(document).delegate('a.add-record2', 'click', function(e) {
            e.preventDefault();
            var content = jQuery('#sample_table2 tr'),
                size = jQuery('#tbl_posts2 >tbody >tr').length + 1,
                element = null,
                element = content.clone();
            element.attr('id', 'rec2-'+size);
            element.find('.delete-record2').attr('data-id', size);
            element.appendTo('#tbl_posts_body2');
            element.find('.sn').html(size);

    });
    // $(document).ready(function(){
    //     $("#Myform").on("submit", function(){
    //         $(".loader ").css("background-color","#fff");
    //                 $(".loader ").css("display","flex");
    //         // $(".loader ").css("background-color","rgba(0,0,0,0.5)");
    //         //             $(".loader ").css("display","none");
    //                     });//submit
    // });//document ready
</script>
<script>

    jQuery(document).delegate('a.delete-record', 'click', function(e) {

        e.preventDefault();
        // var didConfirm = confirm("Are you sure You want to delete");
        // if (didConfirm == true) {
        var id = jQuery(this).attr('data-id');
        var targetDiv = jQuery(this).attr('targetDiv');
        jQuery('#rec-' + id).remove();

        //regnerate index number on table
        $('#tbl_posts_body tr').each(function (index) {
            //alert(index);
            $(this).find('span.sn').html(index + 1);
        });
        return true;
        // } else {
        //   return false;
        // }
    });

    // $(document).on('click', 'a#m_aside_left_minimize_toggle', function(){
    //     if($(this).attr('class') == "m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block"){
    //         sessionStorage.removeItem("nav");
    //         sessionStorage.setItem("nav", "open");
    //     }else {
    //         sessionStorage.removeItem("nav");
    //         sessionStorage.setItem("nav", "close");
    //     }
    //
    // });
</script>

<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'details_ar' );
    CKEDITOR.replace( 'details_en' );
    CKEDITOR.replace( 'specification_ar' );
    CKEDITOR.replace( 'specification_en' );
    CKEDITOR.replace( 'biography_ar' );
    CKEDITOR.replace( 'biography_en' );
</script>
{{--=====================  select to  =========================--}}
{{--<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>--}}


@stack('JS')
<script src="{{url('admin/js')}}/select2.js" type="text/javascript"> </script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
        });
        // $('#select1').select2();
    });
</script>
