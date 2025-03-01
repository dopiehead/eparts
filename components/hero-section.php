
  <div>
    <div class="main-content">
         
        <div class="hero-section">
            <div class='hero-content'>
                <h1>NEW ARRIVALS</h1>
                <p>Check out The Latest Car Lines on<br>Our E-Autos website</p>
                <a href="#" class="check-out-btn">Check Out →</a>
            </div>
            <div class="page-numbers">953 > 556</div>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
         $("#q").on("keyup", function(e){
             e.preventDefault();      
             var x = $(this).val();
             $.ajax({
                type: "GET",
                url: "engine/search.php",
                data: {q:x},
                success: function(data){
                     $("#results").html(data);
                }

             }); 
            


         });



    </script>
</body>
</html>