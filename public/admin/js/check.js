var modalLoading = {

    init : function(start) {
        var _this = this;
        if (start==true) {
            _this.construct();
            window.location.href = "#openModalLoading";
        }else {
          $('#openModalLoading').hide()
        }
    },

    construct : function() {

        var _this = this;
        var html = '<div class="loader"><img src=></div>';

        _this.appendHtml(document.body, html);
        _this.appendCss();
    },

    appendHtml : function(el, str) {
        var div = document.createElement('div');
        div.innerHTML = str;
        while (div.children.length > 0) {
            el.appendChild(div.children[0]);
        }
    },

    appendCss : function() {
        var css = '.modalDialog {position: fixed;font-family: Arial, Helvetica, sans-serif;top: 0;right: 0;bottom: 0;left: 0; background: rgba(0, 0, 0, 0.8);z-index: 99999;opacity:0; -webkit-transition: opacity 400ms ease-in; -moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in; pointer-events: none;}  .modalDialog:target {opacity:1;pointer-events: auto;}  .modalDialog > div {width: 100%;position: relative;margin: 20% auto;}@-webkit-keyframes rotate-forever { 0% { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg); } 100% { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -ms-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg); } } @-moz-keyframes rotate-forever { 0% { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg); } 100% { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -ms-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg); } } @keyframes rotate-forever { 0% { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg); } 100% { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -ms-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg); } } .loading-spinner { -webkit-animation-duration: 0.75s; -moz-animation-duration: 0.75s; animation-duration: 0.75s; -webkit-animation-iteration-count: infinite; -moz-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-name: rotate-forever; -moz-animation-name: rotate-forever; animation-name: rotate-forever; -webkit-animation-timing-function: linear; -moz-animation-timing-function: linear; animation-timing-function: linear; height: 30px; width: 30px; border: 8px solid #ffffff; border-right-color: transparent; border-radius: 50%; display: inline-block; }.loading-spinner { position: absolute; top: 50%; right: 0; bottom: 0; left: 50%; margin: -15px 0 -15px;}',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');

        style.type = 'text/css';
        if (style.styleSheet){
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);
    }

};

// modalLoading.init(true);



function multycheck() {
    var showdata = new Array();
    var n = jQuery("#checkItem:checked").length;
    if (n > 0){
        jQuery("#checkItem:checked").each(function(){
            showdata.push($(this).val());
        });
        document.getElementById('span').innerText=showdata.length;
        var val=showdata;
        if (val==null){
            swal("يجب إختيار العناصر!!", {
                icon: "info",
            })

        }else {
            $('#submit_check_delete').attr("attr_id",val);
            $('#check_id').val(val);
            var new_val= $('#check_id').val()
            var new_route= $('#check_id').attr('attr_route')
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
                                type: 'get',
                                url: new_route,
                                data: {'id': new_val},
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
        }
    }else {
        swal("يجب إختيار العناصر!!", {
            icon: "info",
        })
    }
}
$(document).ready(function () {
    $('body').persianNum();
});

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "حفظ";
    } else {
        document.getElementById("nextBtn").innerHTML = "التالى";
    }
    //... and run a function that will display the correct step indicator:
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
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
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
            // and set the current valid status to false
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
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

// $('.mytable').DataTable({
//     "language": {
//         "sEmptyTable":     "ليست هناك بيانات متاحة في الجدول",
//         "sLoadingRecords": "جارٍ التحميل...",
//         "sProcessing":   "جارٍ التحميل...",
//         "sLengthMenu":   "أظهر _MENU_ مدخلات",
//         "sZeroRecords":  "لم يعثر على أية سجلات",
//         "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
//         "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
//         "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
//         "sInfoPostFix":  "",
//         "sSearch":       "ابحث:",
//         "sUrl":          "",
//         "oPaginate": {
//             "sFirst":    "الأول",
//             "sPrevious": "السابق",
//             "sNext":     "التالي",
//             "sLast":     "الأخير"
//         },
//         "oAria": {
//             "sSortAscending":  ": تفعيل لترتيب العمود تصاعدياً",
//             "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
//         }
//     }
// });
