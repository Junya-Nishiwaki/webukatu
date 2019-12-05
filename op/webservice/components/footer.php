
<footer id='footer'>
  <p>Copyright Junya Nishiwaki. All Rights Reserved.</p>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script>
$(function() {
'use strict';

// Footer最下部表示
let $ftr = $('#footer');
if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
    $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
  }
});

// 画像ライブプレビュー
let $imgBox = $('.img-box');
$imgBox.on('dragover', function(e) {
  e.stopPropagation();
  e.preventDefault();
  $(this).css('border', '3px dashed #ccc');
})
$imgBox.on('dragleave', function(e) {
  e.stopPropagation();
  e.preventDefault();
  $(this).css('border', 'none');
})
$('.live-preview').on('change', function(e) {
  $imgBox.css('border', 'none');
  let file = this.files[0],
      $img = $(this).siblings('.img-preview'),
      fileReader = new FileReader();

  fileReader.onload = function(event) {
    $img.attr('src', event.target.result).show();
  }

  fileReader.readAsDataURL(file);
})
</script>
</body>
</html>
