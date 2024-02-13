<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link  href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
     <div class="container">
        <h1>Connect with us</h1> 
        <p>we would love to respond to yur queries and help you to proceed  with the bookings. Feel free to connect with us .</p>
        <div class="contact-box">
            
            <div class="contact-left">
                 <h3>Send your request</h3>
                 <form>
                    <div class="input-column">
                        <div class="input-group">
                        <label>Name</label>
                        <input type="text" placeholder="your name">
                         </div>
                        <div class="input-group">
                        <label>Phone</label>
                        <input type="text" placeholder="+919876543210">
                         </div>
                        <div class="input-group">
                            <label>EmailID</label>
                            <input type="email" placeholder="yourname@gmail.com">
                        </div>
                         <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="your query">
                         </div>
                         <label>Message</label>
                         <textarea  rows="5" placeholder="your  message"></textarea>
                         <button type="submit">SEND</button>
                 </form>
            </div>
        
     
        <div class="contact-right">
                 <h3>Reach us</h3>

                     <table>
                         <tr>
                             <td>Email</td>
                             <td>contactus@example.com</td>
                         </tr>
                         <tr>
                             <td>Phone</td>
                             <td>+91144-445-7898</td>
                         </tr>
                         <tr>
                             <td>Address</td>
                            <td>winston street,bangalore</td>
                         </tr>
                     </table>

            </div>
        </div>
     </div>



</body>
</html>

CSS


*{
    margin: 0;
    padding: 0;
}
body{
    background: #9e9a9a;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;

}
.container{
    width: 80%;
    margin: 50px auto ;

}
.contact-box{
    background: #fff;
    display: flex;
}
.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}
.contact-right{
    flex-basis: 40%;
    padding: 40px ;
    background: #711287;
    color:#fff;
}
h1{
    margin-bottom: 10px;
}
.container p {
    margin-bottom: 40px;
}
.input-row{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.input-row .input-group{
    flex-basis: 45%;
}
input{
    width: 100%;
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
    padding-bottom: 5px;
}
textarea{
    width: 100%;
    border: 1px solid #ccc;
    outline: none;
    padding: 10px ;
    box-sizing: border-box;
}
label{
    margin-bottom: 6px;
    display: block;
    color: #494949;
}
button{
    background: #711287;
    width: 100px;
    border: none;
    outline: none;
    color: #fff;
    height: 35px;
    border-radius: 4  0px;
    margin-top: 20px;
    box-shadow: 0px 5px 15px 0px rgba(213, 107, 229, 0.676);

    
}
.contact-left h3{
    color: #fff;
    font-weight: 600;
    margin-bottom: 30px;

}
.contact-right h3{
    
    font-weight: 600;
    margin-bottom: 30px;
    
}
tr td :first-child{
    padding-right: 20px;
}
tr td{
    padding-top: 20px;
}