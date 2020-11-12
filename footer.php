<button onclick="topFunction()" id="myBtnx" title="Go to top">Top</button>


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; lankalands.lk 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <?php include('mnav.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/form.js"></script>

  <script>
//Get the button
var mybutton = document.getElementById("myBtnx");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>