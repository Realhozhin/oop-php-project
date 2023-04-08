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
                            <li><a class="dropdown-item" href="">details</a></li>
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
</br></br></br></br>
<!---- show details ---->
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>author</th>
        <th>keywords</th>
        <th>description</th>
        <th>delete</th>
        <th>update</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include_once "../DataBase && class/SeoWebSite.php";
        $query=SeoWebSite::Select_Seo();
        $item=[];
    ?>
    <?php while($item=mysqli_fetch_assoc($query)): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['title']; ?></td>
        <td><?php echo $item['author']; ?></td>
        <td><?php echo $item['keywords']; ?></td>
        <td><?php echo $item['description']; ?></td>
        <td>
            <form action="DeleteSeo.php" method="post">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </td>
        <td>
            <form action="Edit_Seo.php" method="post">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <input type="submit" value="update" class="btn btn-info">
            </form>
        </td>
    </tr>

    <?php endwhile; ?>
    </tbody>
</table>
<!---- end show details ---->
<?php include_once "../admin_parts/_footer.php"; ?>
