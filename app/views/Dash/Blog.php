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
                        <li><a href="<?php echo URLROOT; ?>/Dashboard/New_Arrival"><i class="fa-solid fa-cart-shopping"></i><span>New arrival</span></a></li>
                        <li><a href="<?php echo URLROOT; ?>/Dashboard/Features"><i class="fa-solid fa-star"></i><span>Feautres</span></a></li>
                        <li style="background: #f8f9fd;"><a href="<?php echo URLROOT; ?>/Dashboard/Blog" style='padding: 2rem 1rem 2rem 1.5rem;'><i class="fa-solid fa-house-user"></i><span>Blog</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    
        <section class="dashboard_header">

            <div class="dash_container">
                <div class="elements">
                    <div class="title">
                        <h4><span>C</span>lubs</h4>
                    </div>
                    <div class="admin_icon">
                        <img src="<?php echo URLROOT; ?>/img/admin.jpg" alt="" width="50px" class="admin">
                        <a href="<?= URLROOT; ?>/Authentification/logOutAdmin"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
                    </div>
                </div>
            </div>

            <div class="tableaux_membre">
            <div class="add" id="btn_add"><a href="<?= URLROOT ?>/Dashboard/add"><i class="fa-solid fa-plus" ></i></a></div>
                <div class="table_club">
                    <!-- table membres -->
                    <?php 

                        // if($checkResult > 0){
                        //     echo '<div class="club">';
                        //     while ($row = ($result)) {

                        //             echo '
                        //             <div class="club_container">
                        //                 <div class="club_img">
                        //                     <img src="./upload/'.$row['Image'].'" alt="club img" style="width: 200px; height:100%">
                        //                 </div>
                        //                 <div class="club_info">
                        //                     <h3>'.$row['Clubname'].'</h3>
                        //                     <p>Membres: '.$checkResult.'/20</p>
                        //                     <p>'.$row['Description'] .'</p>
                        //                     <div class="club_btn">
                        //                         <a href="./updateClubForum.php?updateid='.$row['Id'].'&updateName='.$row['Clubname'].'&updateDescription='.$row['Description'].'&updateImage='.$row['Image'].' "><button> Update <i class="fa-regular fa-pen-to-square"></i></button></a>
                        //                         <a href="./backend/Module/deleteClub.php?deletedid='.$row['Id'].'" ><button>Delete<i class="fa-solid fa-trash"></i></button></a>
                        //                     </div>
                        //                 </div>
                        //             </div>';
                        //         }
                        //     echo '</div>';
                        // } else {
                        //     echo "<div style='color: white'>No membre exist</div>";
                        // }
                    ?>
                </div>
            </div>
        </section>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="./frontend/js/addClub.js" type="module"></script>
</html>