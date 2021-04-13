<?php include __DIR__ . '/parts/config.php' ?>
<?php
$tilte = '新增資料';
$pageName = 'ab-insert';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<style>
    .error {
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

                    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false">
                        <div class="form-group">
                            <label for="name">**姓名</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">信箱</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}-?">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <?php include __DIR__ . '/parts/scripts.php' ?>
    <script>
        const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
        const $name = $('#name'),
            $email = $('#email'),
            $mobile = $('#mobile');
        const fileds = [$name, $email, $mobile];

        function checkForm() {
            // 回復原來的狀態
            fileds.forEach(el => {
                el.css('border', '1px solid #CCCCCC');
                el.next().text('');
            });

            let isPass = true;

            if ($name.val().length < 2) {
                isPass = false;
                $name.css('border', '1px solid red');
                $name.next().text('請輸入正確的姓名');
            }
            if (!email_re.test($email.val())) {
                isPass = false;
                $email.css('border', '1px solid red');
                $email.next().text('請輸入正確的 email');
            }
            if (!mobile_re.test($mobile.val())) {
                isPass = false;
                $mobile.css('border', '1px solid red');
                $mobile.next().text('請輸入正確的手機號碼');
            }
            if (isPass) {
                $.post(
                    //傳給誰
                    'ab-insert-api.php',
                    //傳送的物件 serialize()把物件變成key=value的格式
                    $(document.form1).serialize(),
                    function(data) {
                        alert('資料新增成功');
                    },
                    'json'
                )
            }
        }



        //不用普通表單驗證去回傳
        // function checkForm() {
        //     if (document.form1.name.value.length < 2) {
        //         alert('error name');
        //         return;
        //     }
        //     if (!email_re.test(document.form1.email.value)) {
        //         alert('error email');
        //         return;
        //     }
        //     if(!mobile_re.test(document.form1.mobile.value)){
        //         alert('error mobile');
        //         return;
        //     }
        // }
    </script>
    <?php include __DIR__ . '/parts/html-foot.php' ?>