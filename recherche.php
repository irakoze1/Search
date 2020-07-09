<script src="js/jquery-331.min.js"></script>
  <script>
      $("#recherche").on("keyup", function(event){
        $("#slider").hide();
        $("#advantages").hide();
        mot = $(this).val();
        if(mot.length == 0){
          $("#slider").show();
          $("#advantages").show();
        }
        for(var product of $(".product")){
          if(($(product).text()).toLowerCase().includes(mot.toLowerCase())){
            $(product).show();
          }else{
            $(product).hide()
          }
        }
      });
    </script>