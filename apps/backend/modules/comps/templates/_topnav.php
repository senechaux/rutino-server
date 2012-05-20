<div id="topnav">  
  <!-- start: skip link navigation -->  
  <a class="skip" title="skip link" href="#navigation">Go to menu</a><span class="hideme">.</span>  
  <a class="skip" title="skip link" href="#content">Go to content</a><span class="hideme">.</span>  
  <!-- end: skip link navigation -->
  <?php
  if ($sf_user->isAuthenticated()) {
    echo __('Hello ' . $sf_user->getGuardUser()->getUsername() . ' | ');
    echo link_to('Sign out', '@sf_guard_signout');
  } else {
    echo link_to('Sign in', '@sf_guard_signin');
  }
  ?>
</div>
