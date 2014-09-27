<?php
// -- footer.php --
?>

</div><!-- end of contents -->
<div id="footer"> </div>
</div> <!-- end of wrap -->
<?php
// latest jquery and bootstrap js from cdn
// this site's js delivered from the js folder
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo JSPATH.'main.js'; ?></script>
<?php
//Google Analytics: change UA-XXXXX-X to be your site's ID.
?>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
</body>
</html>
