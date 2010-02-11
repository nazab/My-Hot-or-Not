<h1>NEW Contest!</h1>
<?php echo form_tag('contest_create','method=post') ?>
<label class="formBlock">
<span class="labelForm">Title</span>
<span class="fieldForm"><?php echo $form["title"]->render() ?></span>
</label>
<h2>Images!</h2>
<div id="images">
</div>
<?php echo link_to('Add a new image'.image_tag(sfConfig::get('sf_admin_web_dir').'/images/add.png',array('alt'=>'Add a new image','border'=>'0')),'@homepage',array('id' => 'add_image')) ?>
<br/>
<?php echo link_to('cancel','@homepage') ?>
or
<input type="submit" name="submit" value="create"/>
</form>
<script type="text/javascript">
$('#add_image').click(
    function() {
        alert('rr');return false;
    }
);
function load_add_image() {
    $.ajax({
        url: '<?php echo url_for()?>',
        success: function(data) {
          $('.images').html(data);
          alert('Load was performed.');
        }
      });
}
</script>