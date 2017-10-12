<style type="text/css">
	input {
  display: block;
  margin: 5px;
}

img {
  display: none;
  max-width: 200px;
  max-height: 200px;
}

</style>
<form id="form1" runat="server">
  <input type='file' class="imgInp" />
  <img class="blah" src="#" alt="your image" />

  <input type='file' class="imgInp" />
  <img class="blah" src="#" alt="your image" />

  <input type='file' class="imgInp" />
  <img class="blah" src="#" alt="your image" />
</form>
<script type="text/javascript">
	function readURL() {
  var $input = $(this);
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $input.next('.blah').attr('src', e.target.result).show();
    }
    reader.readAsDataURL(this.files[0]);
  }
}

$(".imgInp").change(readURL);

</script>