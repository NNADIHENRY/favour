<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.modal .modal-content .close{
    color: red;
}
.modal .modal-content form input{
    padding: 10px;

}
.modal .modal-content form input[type="submit"]{
    background-color: blue;
}
</style>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">X</span>
    <h2>Newsletters Subscription</h2>
    <form action="" method="post">
        <label for="email-alert">Email alert:</label>
        <input type="text" name="" placeholder="Enter email..." required>
        <input type="submit" name="" value="Suscribe"><br>
        <i>Note: A charge of <s>N</s> 100 monthly, would be incured for receiving alert.</i>
    </form>
    <form action="" method="post"><br>
        <hr>
        <label for="Mobile-alert" style="margin-top:7px;">Mobile alert:</label>
        <input type="text" name="" placeholder="Enter phone number..." required>
        <input type="submit" name="" value="Suscribe"><br>
        <i style="margin-top:10px;">Note: A charge of <s>N</s> 200 monthly, would be incured for receiving alert.</i>
    </form>
  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>