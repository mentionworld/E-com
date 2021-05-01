<?php
require('g.top.php');
if(isset($_POST['submit']))
{
    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $mobile=get_safe_value($con,$_POST['mobile']);
    $query=get_safe_value($con,$_POST['text']);
    $added_on= date('Y-m-d h:i:s');
    $result=mysqli_query($con,"insert into contact_us(username,email,mobile,comment,added_on) values('$name','$email','$mobile','$query','$added_on')");
    if($result)
    {
        echo '<script>alert("Responsed Submitted !!!!!")</script>';
        echo'<script> location.href="contact.php";</script>';
    }
 }
?>
<div class="container">
    <h2>Contact Us</h2>
    <div class="local">
        <div >   
        <div class="col-2">
            <img src="temp/Googlemap-600x551.jpg" alt="map image" width="100%">
        </div>
        </div>
        <aside>
        <div class="col-2">
            <div class="col-2-1">
                <div class="fnt">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="col-c">
                    <h1>Address</h1>
                    <p>Lorem ipsum dolor sit </p>
                </div>
            </div>
            <div class="col-2-1">
                <div class="fnt">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="col-c">
                    <h1>Office Timing</h1>
                    <p>Lorem ipsum dolor sit </p>
                </div>
            </div>
            <div class="col-2-1">
                <div class="fnt">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="col-c">
                    <h1>Contact us</h1>
                    <p>Lorem ipsum dolor sit </p>
                </div>
            </div>
        </div>
        </aside>
    </div>
</div>

<div class="categories">
    
    <form method="post">
        <div class="contact">
            <h1> Send Mail</h1>
            <div class="input-text">
                <div class="col-f">
                    <input type="text" name="name" placeholder="name*" id="" required>
                </div>
                <div class="col-f">
                    <input type="email" name="email" placeholder="email*" id="" required>
                </div>
                <div class="col-f">
                    <input type="text" name="mobile" placeholder="mobile*" id="" required>
                </div>
            </div>
            <div >
                <div class="col-t">
                    <textarea type="text" name="text" placeholder="message*" id="" required></textarea>
                </div>
            </div>
            <div class="col-f">
            <button class="submit" name="submit" type="submit">submit</button>
            </div>      
        </div>
    </form>
</div>
<!-- <div class="contact-us">
    <h2>Send Mail us </h2>
    <form action="">
        <div class="input-text">

            <input type="text" class="form-control" name="name" placeholder="name* " required>
            <input type="email" class="form-control" name="email" placeholder="email* " required>
            <input type="text" class="form-control" name="mobile" placeholder="mobile* " required>
            <textarea type="text" class="form-control" name="text" placeholder="message* " required></textarea>
        </div>
        <button class="contact-btn" name="submit" type="submit">submit</button>
    </form>
</div> -->
<?php
require('g.footer.php');
?>