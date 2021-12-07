<?php
include_once 'header.php';
?>


<div class="position-relative">
        <h2>Account information</h2>
    <div class="content">
  
        <!-- Creating notification when the
                user logs in -->
         
        <!-- Accessible only to the users that
                have logged in already -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION["useruid"])) : ?>
             
 
 
<p>
                Username:
                <strong>
                    <?php echo $_SESSION["useruid"]; ?>
                </strong>
            </p>

            <p>
                Email:
                <strong>
                    <?php echo $_SESSION["useremail"]; ?>
                </strong>
            </p>
 
            <p>
                Name:
                <strong>
                    <?php echo $_SESSION["username"]; ?>
                </strong>
            </p>
 
<p>
                <a href="includes/logout.inc.php" class="btn btn-danger" role="button" data-bs-toggle="button" style="background-color: red; color: black; font-weight: 900;">Logout</a>
            </p>
 
 
 
        <?php endif ?>
    </div>
</body>
</html>

</div>

<?php
include_once 'footer.php';
?>