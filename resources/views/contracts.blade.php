<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العقود</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalart2.min.css') }}">
    <!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
@include('layouts.navigation')
<body>

    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-6 offset-md-3">
                <h4>العقود</h4>
                @livewire('contracts')

            </div>
        </div>
    </div>

    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @livewireScripts
    <script>
        window.addEventListener('OpenAddContractModal', function(){
            $('.addContract').find('span').html('');
            $('.addContract').find('form')[0].reset();
            $('.addContract').modal('show');
        });

       window.addEventListener('CloseAddContractModal', function(){
            $('.addContract').find('span').html('');
            $('.addContract').find('form')[0].reset();
            $('.addContract').modal('hide');
            alert('تمت اضافة العقد جديد بنجاح');
       });

       window.addEventListener('OpenEditContractModal', function(event){
            $('.editContract').find('span').html('');
            $('.editContract').modal('show');
       });

       window.addEventListener('CloseEditContractModal', function(event){
            $('.editContract').find('span').html('');
            $('.editContract').find('form')[0].reset();
            $('.editContract').modal('hide');
            alert('تمت عملية تعديل البيانات بنجاح');
       });

       window.addEventListener('SwalConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'الغاء',
                confirmButtonText:'نعم، احذف',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    
                    window.livewire.emit('delete',event.detail.id);
                }
            })
       });

       window.addEventListener('deleted', function(event){
           alert('تم حذف بيانات ');
       });

       window.addEventListener('swal:deleteContracts', function(event){
            swal.fire({
                title:event.detail.title,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'كلا',
                confirmButtonText:'نعم',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('deleteCheckedContracts',event.detail.checkedIDs);
                }
            })
       });

    </script>
</body>
</html>
