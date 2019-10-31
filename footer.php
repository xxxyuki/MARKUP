
         
<div class="totop">
        <i class="fas fa-angle-double-up"></i>
</div>

<footer id="footer">
    <div class="copy">©Copyright | Yuki Ito 2019 All Right Reserved</div>
</footer>

 
<!-- topに戻る -->
<script>
        $(".fa-angle-double-up").click(function() {
          $('body, html').animate({scrollTop: 0}, 300, 'linear');
        });
    </script>

  <!-- ドロワーメニューの利用宣言 -->
  <script>
        $(document).ready(function() {
        $('.drawer').drawer();
      });
      </script>

      <?php wp_footer(); ?>
</body>
</html>