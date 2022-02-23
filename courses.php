<?php include 'include/header.php' ?>
<?php 
include 'include/db.php';
$query=$db->query('SELECT * from courses where featured=1');
?>
<body>
    <?php include 'include/nav.php' ?>
    <section class="all-courses">
        <h1 class="heading">#All<span> Courses</span></h1>
        <div class="box-container">
        <?php while ($data=$query->fetch()) {?>
            <div class="box">
                <img src="assets/image/courses/<?php echo $data['image'] ?>" alt="">
                <div class="content">
                    <h3><?php echo $data['c_heading'] ?></h3>
                    <p> Last updated: <?php echo $data['date'] ?></p>
                    <div class="price">₹<?php echo $data['c_fee'] ?>/-</div>
                    <!--<a href="description.html"><button class="btn">Enroll Now</button></a>-->
                </div>
            </div>
        <?php } ?>
        </div>

    </section>
<?php include 'include/footer.php' ?>