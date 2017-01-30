
<?php echo $__env->yieldContent('header'); ?>
<div class="app app-default">
    <?php echo $__env->yieldContent('sidebar'); ?>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
        </div>
    </script>
    <div class="app-container">
    <?php echo $__env->yieldContent('navbar'); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('footer'); ?>
    </div>

</div>

   
   


</body>
</html>