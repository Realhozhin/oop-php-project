<?php include_once "../admin_parts/_header.php"; ?>
    <!-- navbar -->
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">setting</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../admin.php">setting</a></li>
                                <li><a class="dropdown-item" href="detailsTeam.php">details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Slider/Slider.php">slider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php" target="_blank">show website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">make new page</a></li>
                                <li><a class="dropdown-item" href="#">profile</a></li>
                                <li><a class="dropdown-item" href="../logout.php">exit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- end navbar -->
    </br></br></br>
    <?php
        include_once "../DataBase && class/TeamCms.php";
        $id=$_POST['id'];
        $row=TeamCms::selectTeam_id($id);
        $item=[];
        $item=mysqli_fetch_assoc($row);
    ?>
    <!--- form setting --->
    <div class="form">
        <form action="Update.php" method="post" enctype="multipart/form-data">
            <label for="title">title</label></br>
            <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>"></br>
            <label for="image">image</label></br>
            <input type="file" name="image" id="image"></br>
            <img src="../images/Team/<?php echo $item['image']; ?>" width="100px" height="100px" alt=""></br>
            <label for="summary">summary</label></br>
            <input type="text" name="summary" id="summary" value="<?php echo $item['summary']; ?>"></br>
            <label for="content">content</label></br>
            <textarea type="text" name="content" id="content" rows="5"><?php echo $item['content']; ?></textarea></br>
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
            <input type="submit" value="submit" class="btn btn-success btn-block">
        </form>
    </div>
    <!--- end form setting --->
<?php include_once "../admin_parts/_footer.php"; ?>