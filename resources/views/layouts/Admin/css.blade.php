
<!--begin::Web font -->

<link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">




{{--<link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet" type="text/css" />--}}

<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" type="text/css" />

{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

{{--<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">--}}

{{--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">--}}




<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
    WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->


<!-- ================== styles datatabele =================== -->

<style type="text/css">

.dt-button-collection{
    width: 1%;
    right: 57.5%!important;

}
    /*--------- Main Content ---------*/

    .box
    {
        margin: 25px;
        padding: 25px;
        background: #fff
    }

    th
    {
        text-align: center;
    }

    tbody tr
    {
        text-align: center;
    }
    .select2-selection__rendered{
        top: -20%;
    }
    .dropify-wrapper
    {
        border-radius: 20px;
    }

    .imageuploadify-container button:before
    {
        content: "remove";
    }
    .imageuploadify .imageuploadify-images-list .imageuploadify-container button.btn-danger
    {
        width: 51px;
    }


</style>

<style media="screen">
    .dz-image
    {
        border-radius:5px !important;
        margin-bottom: 10px;
    }
    .dz-remove
    {
        color: red;
    }
    .dz-image img
    {
        text-align: center;
        width:100%;
        height:100%;

    }

    .dropzone
    {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
    }

</style>




<style>
    .modal_body
    {
        position: relative;
    }
    .overlay
    {
        position: absolute;
        width: 94%;
        height: 95%;
        background: #fffffffa;
        z-index: 9999999;
        border-radius: 10px;
        display: none;
    }
    #loady
    {
        position: absolute;
        top: 50%;
        left: 38%;
    }
</style>

<style>
    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    /* Style the input fields */
    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/dropzone.css">




<link rel="shortcut icon" href="{{get_file('Admin/img/logo.png')}}" />



<!--begin:: Global Mandatory Vendors -->
<link href="{{url('admin')}}/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />


<link href="{{url('admin')}}/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />


<!--end::Global Theme Styles -->

<!--begin::Page Vendors Styles -->
{{--    <link href="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />--}}

<link href="{{url('admin')}}/assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles -->



<!--begin::Web font -->
<script src="{{url('admin')}}/js/webfont.js"></script>
<script src="{{url('admin')}}/js/webfont.js"></script>
<script src="{{url('admin')}}/css/action.css"></script>
<script>
    WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->

<!--begin::Global Theme Styles -->
<!--		<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />-->
<!--		<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />-->



{{--------------RTL version:---------------------}}
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('admin')}}/assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
<link href="{{url('admin')}}/assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
<link href="{{url('admin')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />

<!-- ================== styles datatabele =================== -->

<style type="text/css">

    .m-brand{
        width: 255.5px;
    }
    body
    {
        font-family: 'Almarai', sans-serif;
    }


    /*--------- Main Content ---------*/



    th
    {
        text-align: center;
    }

    tbody tr
    {
        text-align: center;
    }
    .p-span{
        left: 5%!important;
    }
</style>
<link href="{{url('admin')}}/css/action.css" rel="stylesheet">

{{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
<style>
    @import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    .loader {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: none;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        z-index: 9999;
        background-color: rgba(0,0,0,0.5);
    }

    .loader img {
        width: 300px;
        height: 300px;
    }

    .loader .triple-spinner {
        display: block;
        position: relative;
        width: 125px;
        height: 125px;
        border-radius: 50%;
        border: 5px solid transparent;
        border-top: 5px solid #0E485F;
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
    }

    .loader .triple-spinner::before,
    .loader .triple-spinner::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        border: 5px solid transparent;
    }

    .loader .triple-spinner::before {
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-top-color: #98B748;
        -webkit-animation: spin 3s linear infinite;
        animation: spin 3.5s linear infinite;
    }

    .loader .triple-spinner::after {
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-top-color: #E08A33;
        -webkit-animation: spin 1.5s linear infinite;
        animation: spin 1.75s linear infinite;
    }

    @-webkit-keyframes spin {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spin {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<style>
    li{
        margin-top: 1%;
        font-size: 20px;
    }
    ul{
        margin-right: 1%!important;
    }
    /*ul, #myUL {*/
    /*    list-style-type: none;*/
    /*}*/

    #myUL {
        margin: 0;
        padding: 0;
    }
    span.select2-selection.select2-selection--single {
        min-height: 39px;
    }
    span#select2-select2-container {
        padding: 5px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 17px !important;
    }
    .caret {
        cursor: pointer;
        -webkit-user-select: none; /* Safari 3.1+ */
        -moz-user-select: none; /* Firefox 2+ */
        -ms-user-select: none; /* IE 10+ */
        user-select: none;
    }

    .caret::before {
        content: "\25B6";
        color: black;
        display: inline-block;
        margin-right: 6px;
        direction: rtl;
    }

    .caret-down::before {
        -ms-transform: rotate(90deg); /* IE 9 */
        -webkit-transform: rotate(90deg); /* Safari */'
    transform: rotate(90deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
</style>
{{--=========================  select to  ===============================--}}

{{--<link rel="stylesheet" href="{{url('css/fastselect.min.css')}}">--}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2-selection.select2-selection--multiple {
        height: 50px;
        overflow: auto;
        box-shadow: -2px 3px 10px #0000003d;
        border: 1px solid #cecece;
    }
    /*#load{*/
    /*    width:100%;*/
    /*    height:100%;*/
    /*    position:fixed;*/
    /*    z-index:9999;*/
    /*    background:url("https://www.creditmutuel.fr/cmne/fr/banques/webservices/nswr/images/loading.gif") no-repeat center center rgba(0,0,0,0.25)*/
    /*}*/
    span.cke_button_icon.cke_button__about_icon{
        display: none;!important;
    }
    .m-radio>input:checked ~ span:after, .m-checkbox>input:checked ~ span:after {
        transform: rotate(45deg);
    }
    .OfferActive{
        display: block !important;
    }
    .OfferNotActive{
        display: none!important;
    }
</style>

