<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <style>
      body {
        margin: 2rem;
      }
      .reach-us {
        position: fixed;
        top: 100px;
        right: 0;
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
      .reach-us ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      .reach-us li {
        margin: 5px 0;
      }
      .reach-us a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 5px;
        border-radius: 5px;
      }
      .reach-us a:hover {
        background-color: #fff;
        color: #007bff;
      }
      .button{
    width: 100%;
    position: relative;
}
.button-contain button{
    width: 8%;
    padding: 6px;
    margin-left: 30px;
    margin-top: 10px;
    margin-bottom: 40px;
    gap: 1rem;
    cursor: pointer;
    display: float;
    float: center;
    font-size: 20px;
    color: #fff;
    border: none;
    border-radius: 5px;
    background-image: linear-gradient(to right,#1dde0f,  #10a7e2);
}
.button-contain button:hover{
    background-image: linear-gradient(to right,  #10a7e2, #1dde0f);
}
    </style>
  </head>
  <body>
  <section class="button">
      <div class="button-contain">
      <button type="back" onclick="window.location.href='http://localhost/CarRentalWebsite/gallery.php'";>Back</button> 
</div> </section>
    <div class="container">
      <form id="contact-form" class="bg-light p-4 rounded shadow-sm">
        <h2 class="mb-3"><i class="fas fa-paper-plane"></i> Send Request</h2>
        <div class="mb-3">
          <label for="name" class="form-label"
            ><i class="fas fa-user mr-2"></i> Name</label
          >
          <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            required
          />
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">
            <i class="fas fa-phone mr-2"></i> Phone</label
          >
          <input
            type="text"
            id="phone"
            name="phone"
            class="form-control"
            required
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"
            ><i class="fas fa-envelope mr-2"></i> Email</label
          >
          <input
            type="email"
            id="email"
            name="email"
            class="form-control"
            required
          />
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label"
            ><i class="fas fa-tag mr-2"></i> Subject</label
          >
          <input
            type="text"
            id="subject"
            name="subject"
            class="form-control"
            required
          />
        </div>
        <div class="mb-3">
          <label for="body" class="form-label"
            ><i class="fas fa-comment mr-2"></i> Body</label
          >
          <textarea
            id="body"
            name="body"
            class="form-control"
            required
          ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-paper-plane mr-2"></i> Send
        </button>
      </form>
    </div>
    <div class="reach-us">
      <h3><i class="fas fa-address-book mr-2"></i> Contact Us</h3>
      <ul>
        <li>
          <a href="#"><i class="fab fa-facebook-f mr-2"></i> Facebook</a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter mr-2"></i> Twitter</a>
        </li>
        <li>
          <a href="#"><i class="fab fa-linkedin-in mr-2"></i> LinkedIn</a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram mr-2"></i> Instagram</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-phone mr-2"></i> Phone</a>
        </li>
      </ul>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $("#contact-form").submit(function (e) {
        e.preventDefault();
        var formData = {
          name: $("input[name=name]").val(),
          phone: $("input[name=phone]").val(),
          email: $("input[name=email]").val(),
          subject: $("input[name=subject]").val(),
          body: $("textarea[name=body]").val(),
        };
        $.post("send_request.php", formData)
          .done(function (data) {
            alert(data.message);
          })
          .fail(function () {
            alert("Oops! Something went wrong.");
          });
      });
    </script>
  </body>
</html>
