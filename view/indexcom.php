<!DOCTYPE html>
    <html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../Likestyle.css"/>
    <link href="../assets/Home/img/favicon.png" rel="icon">
        <link href="../assets/Home/img/apple-touch-icon.png" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

        <link href="../assets/Home/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/Home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/Home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/Home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../assets/Home/css/main.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/61f2e03fd8.js" crossorigin="anonymous"></script>
  
    </head>
    <body>
    <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="tampilanAdmin.php"><span>Berita Nyantui</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="loginSuccess.php">Home</a></li>
          <li><a href="AboutLogin.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             <?php
                 include "../controller/connect.php";
                  $query = "SELECT * FROM berita Group BY kategori";
                  $hasil = mysqli_query($mysqli, $query);
                  while ($row = mysqli_fetch_array($hasil)) {
                  ?>
                  <li name="submit"><a href='searchBeritauser.php?chooseCategories=<?php echo $row['kategori'] ?>' name="chooseCategories"><?php echo $row['kategori'] ?></a></li>
                  <?php
                  }
                ?>
            </ul>
          </li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
    <br>
    <h2 style="text-align:center;margin-top:10%;">Enter Your Comment Here</h2>
    <br>
        <div class="container">
            <form method="POST" id="comment_form">
                    <div class="form-group" style="margin-bottom:10px">
                        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                    </div>
                    <div class="form-group" style="margin-bottom:10px">
                        <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                    </div>
                    <div class="form-group" id="comment-submit">
                        <input type="hidden" name="comment_id" id="comment_id" value="0" />
                        <input type="submit" name="submit" id="submit" class="submitedit" value="Submit" />
                </button>     
            </form>
        </div>
        <span id="comment_message"></span>
        <br>
        <div id="display_comment"></div>
        <button class="like like__btn">
            <span id="icon"><i class="fas fa-thumbs-up"></i></span>
            <span id="count">1</span>
    </div>

    </body>
    <script src="../assets/like/like.js"></script>
    </html>

    <script>
    $(document).ready(function(){
    
    $('#comment_form').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
    url:"../controller/add_comment.php",
    method:"POST",
    data:form_data,
    dataType:"JSON",
    success:function(data)
    {
        if(data.error != '')
        {
            $('#comment_form')[0].reset();
            $('#comment_message').html(data.error);
            $('#comment_id').val('0');
            load_comment();
        }
    }
    })
    });

    load_comment();

    function load_comment()
    {
    $.ajax({
    url:"../controller/fetch_comment.php",
    method:"POST",
    success:function(data)
    {
        $('#display_comment').html(data);
    }
    })
    }

    $(document).on('click', '.reply', function(){
    var comment_id = $(this).attr("id");
    $('#comment_id').val(comment_id);
    $('#comment_name').focus();
    });
    
    });
</script>
