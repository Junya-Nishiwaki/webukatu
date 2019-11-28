
<footer id='footer'>
  <p>Copyright Junya Nishiwaki. All Rights Reserved.</p>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script>
$(function() {
'use strict';
let $ftr = $('#footer');
if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
    $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
  }
});
</script>
</body>
</html>
