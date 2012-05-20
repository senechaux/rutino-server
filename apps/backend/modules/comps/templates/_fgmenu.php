<!-- style exceptions for IE 6 -->
<!--[if IE 6]>
<style type="text/css">
		.fg-menu-ipod .fg-menu li { width: 95%; }
		.fg-menu-ipod .ui-widget-content { border:0; }
	</style>
	<![endif]-->	
<script type="text/javascript">
    $(function(){
        // BUTTONS
        $('.fg-button').hover(
        function(){ $(this).removeClass('ui-state-default').addClass('ui-state-focus'); },
        function(){ $(this).removeClass('ui-state-focus').addClass('ui-state-default'); }
    );

        // MENUS
        $('#flyout1').menu({
            content: $('#flyout1').next().html(), // grab content from this page
            showSpeed: 400,
            flyOut: true
        });
        $('#flyout2').menu({
            content: $('#flyout2').next().html(), // grab content from this page
            showSpeed: 400,
            flyOut: true
        });
        $('#flyout3').menu({
            content: $('#flyout3').next().html(), // grab content from this page
            showSpeed: 400,
            flyOut: true
        });
    });
</script>

<div id="nav_main">

    <?php if ($sf_user->hasCredential('Users') 
            || $sf_user->hasCredential('User groups')
            || $sf_user->hasCredential('Perms')
            ): ?>
    <a id="flyout1" tabindex="0" href="#submenus1" class="fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all">
        <span class="ui-icon ui-icon-triangle-1-s"></span>
        Users
    </a>
    <div id="submenus1" class="fg-hidden">
        <ul>
          <?php echo $sf_user->hasCredential('Users')?'<li>'.link_to('Users', '@users').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('User groups')?'<li>'.link_to('Groups', '@user_groups').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('Perms')?'<li>'.link_to('Perms', '@user_perms').'</li>':''; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if ($sf_user->hasCredential('Wallet') 
            || $sf_user->hasCredential('Account') 
            || $sf_user->hasCredential('Transaction') 
            || $sf_user->hasCredential('PeriodicTransaction') 
            || $sf_user->hasCredential('Report')): ?>
    <a id="flyout2" tabindex="0" href="#submenus1" class="fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all">
        <span class="ui-icon ui-icon-triangle-1-s"></span>
        Wallets
    </a>
    <div id="submenus2" class="fg-hidden">
        <ul>
          <?php echo $sf_user->hasCredential('Wallet')?'<li>'.link_to('Wallets', '@wallet').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('Account')?'<li>'.link_to('Accounts', '@account').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('Transaction')?'<li>'.link_to('Transactions', '@transaction').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('PeriodicTransaction')?'<li>'.link_to('Periodic transactions', '@periodic_transaction').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('Report')?'<li>'.link_to('Reports', '@report').'</li>':''; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if ($sf_user->hasCredential('AccountType') 
            || $sf_user->hasCredential('Currency')): ?>
    <a id="flyout3" tabindex="0" href="#submenus1" class="fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all">
        <span class="ui-icon ui-icon-triangle-1-s"></span>
        Administration
    </a>
    <div id="submenus3" class="fg-hidden">
        <ul>
          <?php echo $sf_user->hasCredential('AccountType')?'<li>'.link_to('Account types', '@account_type').'</li>':''; ?>
          <?php echo $sf_user->hasCredential('Currency')?'<li>'.link_to('Currencies', '@currency').'</li>':''; ?>
        </ul>
    </div>
    <?php endif; ?>

</div>