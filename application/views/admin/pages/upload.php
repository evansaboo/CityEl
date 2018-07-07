<?php if (isset($error)) {
  echo $error;
}
if (isset($_SESSION['response'])) {
  echo $_SESSION['response'];
}?>
<?php
$url = './images';
$imgs = scandir($url);
foreach ($imgs as $img) {
  if ($img == '.' || $img == "..") { continue; }
  echo form_open('upload/remove_img/' . $img);
  echo '<img src="' . base_url() . '/images/' . $img . '" width="400px" height="200px"/>';
  echo '<button type="submit">Delete</button>';
  echo '</form>';
}
?>
<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
