</br></br>
<section class="team-title">
    <section class="row ml-0 mr-0">
        <section class="col-4 offset-4">
            <h3 class="text-center font-weight-bold" style="color: #dc3545"><strong>our team</strong></h3>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
        </section>
    </section>
</section>
    </br>
<?php
    include_once "admin/DataBase && class/TeamCms.php";
    $query=TeamCms::SelectTeam();
    $item=[];
?>
<div class="team" style="padding-top: 50px;padding-bottom: 50px">
    <div class="row col-10 offset-1">
        <div class="col-lg-10 col-lg-offset-1"></div>
        <?php while ($item=mysqli_fetch_assoc($query)): ?>
        <div class="col-lg-3">
            <img src="admin/images/Team/<?php echo $item['image'] ?>" class="img-fluid" style="width: 300px !important;height: 250px !important;">
            <h1><?php echo $item['title'] ?></h1>
            <p><?php echo substr($item['summary'],0,100) ?>
            </p>
            <div class="text">
                <form method="post" action="admin/Team/teamId.php">
                    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                    <input type="submit" value="read more ..." class="btn btn-info">
                </form>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

