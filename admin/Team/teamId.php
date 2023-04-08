<?php
    include_once "../DataBase && class/TeamCms.php";
    $id=$_POST['id'];
    $query=TeamCms::selectTeam_id($id);
    $item=[];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<div class="team" style="padding-top: 50px;padding-bottom: 50px;text-align: center;position: center">
    <div class="row col-10 offset-1">
        <div class="col-10 offset-1">
            <?php while($item=mysqli_fetch_assoc($query)): ?>
                <img src="../images/Team/<?php echo $item['image']; ?>" class="img-responsive" width="80%" height="500px"></br></br>
                    <div class="col-lg-6 text-center">
                        <span class="bi bi-hand-thumbs-up" data-id="<?php echo $id ?>" id="like" style="font-size: 2rem"></span>
                        <span class="bi bi-hand-thumbs-down" data-id="<?php echo $id ?>" id="like" style="font-size: 2rem"></span>
                        <span class="bi-bookmark-check" data-id="<?php echo $id ?>" id="like" style="font-size: 2rem"></span>
                    </div>
                <h1><?php echo $item['title']; ?></h1>
                <h4><?php echo $item['content']; ?></h4>
            <?php endwhile; ?>
        </div>
    </div>
</div>