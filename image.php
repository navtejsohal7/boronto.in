 <script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile_pic").change(function(){
        readURL(this);
    });
  </script>
  <form action="ajaximage.php" class="form-horizontal" id="fuelux-wizard" enctype="multipart/form-data" method="post">
  <div style="margin: -15px 0 0 -10px;text-align:center" class="col-md-4">
      <div class="profile-img-ng-lg">
          <img id="blah" src="<?=base_url()?>upload/photos/misc/avatar/<?=$user_gender?>" alt="" width="150" height="150" />
      </div>
      <div id="button_file">
        <button style="margin-right: -27px;margin-bottom: 40px;" type="button" class="btn btn-primary btn-lg"><i class="fa fa-picture-o"></i> Add Picture</button>
        <input name="profile_pic" id="profile_pic" type="file" />
      </div>
  </div>
</form>