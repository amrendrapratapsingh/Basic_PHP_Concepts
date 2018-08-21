<p>Redirecting</p>
<?php

ob_start();
//header('location:https://www.youtube.com/');


//header('refresh:5; url=https://www.youtube.com/');
echo "<script>
alert('Redirecting...')
window.location.assign('https://www.youtube.com/watch?v=D-o-UFJkE9E&list=RDD-o-UFJkE9E&start_radio=1')
</script>";
?>