<?php
include_once "admin/DataBase && class/CssCms.php";
$query=CssCms::SelectCss();
$item=[];
$item=mysqli_fetch_assoc($query);
?>
<section class="team-title">
    <section class="row ml-0 mr-0">
        <section class="col-4 offset-4">
            <h3 class="text-center font-weight-bold" style="color: #dc3545"><strong>read about us</strong></h3>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
        </section>
    </section>
</section>
</br>
<div class="interview" style="width:100%; height:<?php echo $item['height'].'px'; ?>;padding-bottom: 100px;background: url('admin/images/interview/<?php echo $item['image']; ?>') center center no-repeat fixed;background-size: cover">
    <div class="row">
        <div class="col-8 offset-2">
            <h2 style="color: <?php echo $item['color']; ?>">interview of our web-site</h2>
            <h5 style="font-family: <?php echo $item['font']; ?>">in this here you'are well know our web-site.............in this here you'are well know our web-site.............in this here you'are well know our web-site.............in this here you'are well know our web-site.............
                in this here you'are well know our web-site.............in this here you'are well know our web-site.............
                in this here you'are well know our web-site.............</h5>
        </div>
    </div>
</div>