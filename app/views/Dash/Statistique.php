<?php
    // print_r($_SESSION['Email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="body">
        <section class="dashboard_bar">
            <div class="dash_container">
                <div class="logo">
                    <a href="<?php echo URLROOT; ?>/index"><img src="<?= URLROOT; ?>/assets/logo/black logo.png" alt="" style="width: 50px;"></a>
                </div>
                <div class="manage">
                    <ul>
                        <li style="background: #f8f9fd;"><a href="<?= URLROOT; ?>/Dashboard/Statistique" style='padding: 2rem 1rem 2rem 1.5rem;'><i class="fa-solid fa-chart-line"></i><span>Statistique</span></a></li>
                        <li><a href="<?= URLROOT; ?>/Dashboard/new_arrival"><i class="fa-solid fa-cart-shopping"></i><span>New arrival</span></a></li>
                        <li><a href="<?= URLROOT; ?>/Dashboard/features"><i class="fa-solid fa-star"></i><span>Feautres</span></a></li>
                        <li><a href="<?= URLROOT; ?>/Dashboard/blog"><i class="fa-solid fa-house-user"></i><span>Blog</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>S</span>tatistique</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="<?= URLROOT; ?>/img/admin.jpg" alt="" width="50px" class="admin">
                        <a href="<?= URLROOT; ?>/Authentification/logOutAdmin"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
                <h2 style="text-align: center;">
                    Welcome back <?= $_SESSION['Email']; ?>
                    <!-- session admin -->
                </h2>

                <div class="state">
                    <div class="state_admin">
                        <?php 
                            echo '<span>Total Admin : '.$data['admin'].' </span><i class="fa-solid fa-house-user"></i>';
                        ?>
                    </div>

                    <div class="state_clubs">
                        <?php 
                            echo '<span>Total Clubs : '.$data['product'].' </span><i class="fa-solid fa-chart-line"></i>';
                        ?>
                    </div>
                </div>

            </div>
        </section>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addClub.js" type="module"></script>
</html>