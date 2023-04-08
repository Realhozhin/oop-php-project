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
                            <li><a class="dropdown-item" href="detailsinterview.php ">details</a></li>
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
<!--- form setting --->
<div class="form">
    <form action="insertInterview.php" method="post" enctype="multipart/form-data">
        <label for="font">font</label></br>
        <select name="font" id="font" style="width: 250px;height: 50px">
            <option value="Yekan">Yekan</option>
            <option value="">belham</option>
        </select></br>
        <label for="image">image</label></br>
        <input type="file" name="image" id="image"></br>
        <label for="color">color</label></br>
        <input type="color" name="color" id="color"></br>
        <label for="height">height</label></br>
        <input type="text" name="height" id="height"></br>
        <input type="submit" value="submit" class="btn btn-success btn-block">
    </form>
</div>
<!--- end form setting --->
<?php include_once "../admin_parts/_footer.php"; ?>
