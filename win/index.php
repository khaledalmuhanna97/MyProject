<?php 
include './inc/connection.php';
include './inc/form.php';
include './inc/select.php';
include './inc/close.php';
?>

<?php include_once './parts/header.php'; ?>


<div class="cont">
<div class="position-relative overflow-hidden p-3 p-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img src="./images/logo.png" width="200" height="75"><br>
            <h1 class="display-4 fw-normal">اربح مع خالد</h1>
             <p class="lead fw-normal">باقي على فتح التسجيل</p>
             <h3 id="countdown"></h3>
             <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
        </div>
        <div class="container">
            <h3>للدخول في السحب اتبع مايلي:</h3>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
        <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة و أجوبة حرة للجميع</li>
        <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك و إميلك</li>
        <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
        <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامناريا</li>
    </ul>
        </div>
</div>  
</div>


    <div class="container">

<div class="position-relative  text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
             <h3>الرجاء أدخل معلوماتك</h3>
             <div class="mb-3">
             <label for="fname" class="form-label">الاسم الاول</label>
             <input type="text" name="fname" class="form-control" id="fname" value="<?php echo $fname ?>">
        <div  class="form-text error"><?php echo $errors['firstNameError'] ?></div>
        </div>

        <div class="mb-3">
             <label for="lname" class="form-label">الاسم الاخير</label>
            <input type="text" name="lname" class="form-control" id="lname" value="<?php echo $lname ?>">
            <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الآلكتروني</label>
             <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
            </form>
        </div>
</div>      

<!--
    <form action="index.php" method="POST">
        <input type="text"  id="fname" placeholder="first name">
        <input type="text"  id="lname" placeholder="last name">
        <input type="text"  id="email" placeholder="e-mail">
        <input type="submit" value="send">
    </form>
-->
<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['fname']) . ' ' . htmlspecialchars($user['lname']) ?> </h1>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<div id="cards" class="row mb-5 pb-5">


<!--
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title"> </h5>
                <p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
            </div>
        </div>
    </div>

</div>
        -->
<?php include_once './parts/footer.php'; ?>