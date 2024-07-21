<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>

    {{-- Font Awesome Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Css Link --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="title-heading">
            <h2>contact us</h2>
        </div>
        <div class="contact-text">
            <p>Got something on your mind? Let us know!  Fill out our simple contact form for a quick response. we are all egere to know about you. it will help us to improve and adjust according to your needs.</p>
        </div>

        <div class="grid-container">
            <div class="container-1">
                <div class="box-1 box">
                    <div class="icon-container">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="address-container">
                        <h4>address</h4>
                        <p>4A, gayatri nagar, sodala,jaipur</p>
                    </div>
                </div>
                <div class="box-2 box">
                    <div class="icon-container">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="address-container">
                        <p>+91-9351469994</p>
                    </div>
                </div>
                <div class="box-3 box">
                    <div class="icon-container">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="address-container">
                        <p>arpit.mishra.out@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="container-2">
                <h3 class="form-title">send message</h3>
                <form action="" method="post">
                    <div class="form-input">
                        <input type="text" id="f-name" name="f-name" placeholder="Full Name">
                    </div>
                    <div class="form-input">
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-message">
                    <textarea name="msg" id="msg" cols="50" rows="10" placeholder="Enter your message here"></textarea>
                    </div>
                    <input type="submit" value="Submit" id="submit-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>