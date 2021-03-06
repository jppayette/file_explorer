  <!-- CONTENT END -->

    <!-- Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Custom JS (parallax, etc) -->
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <!-- JS File -->
    <script src="<?=ROOT_URL?>/themes/js/main.js"></script>
    <script src="<?=ROOT_URL?>/themes/js/suppression.js"></script>

    <!-- InPage JS -->

    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
    </script>




    <script>
    
    
    $('.navigation').on( "click", function(e) {
    
    e.preventDefault();
    // ce script va retourner une "response" de type XMLHttpRequest
    $.ajax({
        type: 'POST',
        url: 'functions/explorer_formAjax.php',
        data :  {
          directory: this.dataset.directory, 
        },
        success: function () {
          console.log(directory);  
          //location.reload();
        }
    });
});


</script>
</body>
</html>

