<?php
session_start();
//error_reporting(0);
include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Search Examination Results</title>
        <!-- Google Fonts & FontAwesome -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .find-result-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(16px);
                border-radius: 24px;
                padding: 40px;
                border: 1px solid rgba(255, 255, 255, 0.4);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
            }
            .brand-icon-wrapper {
                width: 60px;
                height: 60px;
                border-radius: 16px;
                background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.6rem;
                margin: 0 auto 16px auto;
                box-shadow: 0 10px 20px rgba(99, 102, 241, 0.35);
            }
            .form-control {
                border-radius: 12px !important;
                padding: 12px 16px !important;
                height: auto !important;
                border: 1px solid #cbd5e1 !important;
                font-size: 0.95rem !important;
            }
            .form-control:focus {
                border-color: #6366f1 !important;
                box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15) !important;
            }
            .btn-search-custom {
                background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
                color: #fff !important;
                font-weight: 700;
                border-radius: 50px;
                padding: 12px 30px;
                border: none;
                box-shadow: 0 10px 20px rgba(99, 102, 241, 0.35);
                transition: all 0.3s ease;
                width: 100%;
            }
            .btn-search-custom:hover {
                transform: translateY(-2px);
                box-shadow: 0 15px 25px rgba(99, 102, 241, 0.5);
            }
            .back-home-link {
                color: #64748b;
                text-decoration: none;
                font-weight: 600;
                font-size: 0.9rem;
                transition: color 0.2s ease;
            }
            .back-home-link:hover {
                color: #6366f1;
            }
        </style>
    </head>
    <body class="login-bg-color">
        <div class="main-wrapper" style="width: 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 col-md-offset-3 col-lg-offset-35">
                        <div class="find-result-card">
                            <div class="text-center mb-4">
                                <div class="brand-icon-wrapper">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <h2 style="font-weight: 800; color: #0f172a; margin-bottom: 6px;">Find Examination Result</h2>
                                <p style="color: #64748b; font-size: 0.92rem;">Enter your credentials below to view your score card</p>
                            </div>

                            <form action="result.php" method="post">
                                <div class="form-group mb-3">
                                    <label for="rollid" style="font-weight: 600; color: #334155; margin-bottom: 6px;">Register / Roll Number</label>
                                    <input type="text" class="form-control" id="rollid" placeholder="e.g. 101, 102" autocomplete="off" name="rollid" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="default" style="font-weight: 600; color: #334155; margin-bottom: 6px;">Select Class / Course</label>
                                    <select name="class" class="form-control" id="default" required="required">
                                        <option value="">-- Choose your Class --</option>
                                        <?php 
                                        $sql = "SELECT * from tblclasses";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        if($query->rowCount() > 0) {
                                            foreach($results as $result) { ?>
                                                <option value="<?php echo htmlentities($result->id); ?>">
                                                    <?php echo htmlentities($result->ClassName); ?> &nbsp;(Section <?php echo htmlentities($result->Section); ?>)
                                                </option>
                                            <?php }
                                        } ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-search-custom mb-3">
                                    Search Result <i class="fa-solid fa-magnifying-glass ms-2"></i>
                                </button>

                                <div class="text-center mt-3">
                                    <a href="index.php" class="back-home-link">
                                        <i class="fa-solid fa-house me-1"></i> Back to Homepage
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMMON JS FILES -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
