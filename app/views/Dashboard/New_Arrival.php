<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="body">
        <section class="dashboard_bar">
            <div class="dash_container">
                <div class="logo">
                    <a href="<?php echo URLROOT; ?>/index"><img src="<?php echo URLROOT; ?>/assets/logo/black logo.png" alt="" style="width: 50px;"></a>
                </div>
                <div class="manage">
                    <ul>
                        <li><a href="<?php echo URLROOT; ?>/Dashboard/Statistique"><i class="fa-solid fa-chart-line"></i><span>Statistique</span></a></li>
                        <li style="background: #f8f9fd;"><a href="<?php echo URLROOT; ?>/Dashboard/New_Arrival" style='padding: 2rem 1rem 2rem 1.5rem;'><i class="fa-solid fa-cart-shopping"></i><span>New arrival</span></a></li>
                        <li><a href="<?php echo URLROOT; ?>/Dashboard/Features"><i class="fa-solid fa-star"></i><span>Feautres</span></a></li>
                        <li><a href="<?php echo URLROOT; ?>/Dashboard/Blog"><i class="fa-solid fa-house-user"></i><span>Blog</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>New</span>_Arrival</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="<?php echo URLROOT; ?>/img/admin.jpg" alt="" width="50px" class="admin">
                        <a href="./logout.php"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <div class="add" id="btn_add"><i class="fa-solid fa-plus" ></i></div>
                <div class="table_club">
                    <!-- table membres -->
                    <?php 
                        while ($row)
                    ?>
                </div>
            </div>
        </section>
        <div class="pop_up pop" id="pop_up">
            <div class="form">
                <form action="<?php echo URLROOT; ?>/Dashboard/New_Arrival" method="POST" enctype="multipart/form-data">

                    <!-- Add product name -->
                    <div class="Club name">
                        <label for="name">Product name</label>
                        <input type="text" name="ProductName" id="name" placeholder="Product Name" required>
                    </div>
                    
                    <!-- Add price product -->
                    <div class="description">
                        <label for="description">Product Price</label>
                        <input type="text" name="ProductPrice" id="name" placeholder="Price" required>
                    </div>

                    <!-- Add club image -->
                    <div class="image">
                        <label for="image">Product image</label>
                        <input type="file" name="ProductImage" id="name" required>
                    </div>

                    <div class="btns">
                        <input type="submit" id="submit" class="submit" value="Ajouter">
                        <input type="reset" value="Cancel" class="submit" id="cancel" style="background-color:red; cursor: pointer;">
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="<?= URLROOT ?>/js/addClub.js" type="module"></script>
</html>