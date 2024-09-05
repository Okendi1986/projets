<!-- Nav Starts -->
<div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right scroll">
    <li class="active"><a href="/">Home</a></li>
    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
    <li><a href="<?php echo e(route('works')); ?>">Nouveaux Voitures</a></li>
    <li><a href="<?php echo e(route('services')); ?>">Services</a></li>
    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/signup">Sign Up</a></li>
       <!-- Dropdown for Language Selection -->
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="caret"></span></a>
         <ul class="dropdown-menu">
             <li><a href="?lang=en">English</a></li>
             <li><a href="?lang=fr">Français</a></li>
         </ul>
     </li>
   </ul>
</div>
<!-- #Nav Ends -->
<?php /**PATH C:\Users\HP\Desktop\projets\Appvoiture\resources\views/partiels/slide.blade.php ENDPATH**/ ?>