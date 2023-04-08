<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#contact").on("submit",function(e) {
        e.preventDefault();
        var url=$("#contact").attr("action");
        var fullName=$("input[name=fullName]").val();
        var email=$("input[name=email]").val();
        var comment=$("input[name=comment]").val();
        $.ajax({
            url:"url";
            type: "POST",
            data:'fullname='+fullname+'&email='+email+'&comment='+comment,
            success: function(data) {
                if(data==1){
                    $("input[name=fullName]").val('');
                    $("input[name=email]").val('');
                    $("input[name=comment]").val('');
                    alert('ok');
                }else{
                    alert('not okay');
                }
            }
        })
</script> <!-- for contact --->
<script type="text/javascript">
    $('#like').on('click', function(e) {
        e.preventDefault();
        var id=$(this).attr('data-id');
        var elem=$(this);
        $.ajax({
            url:'admin/etc./Insert_like.php',
            type:'post',
            data: 'id='+$id,
            success: function(data) {
                if(data==1) {
                    elem.addclass('like');
                    alert('ok');
                }else if(data==2) {
                    alert('okay!!');
                }else {
                    alert('not okey!');
                }
            }
        })
    })
</script> <!-- for team id -->
</body>
</html>