<?php
/**
 *
 * Available custom variables:
 * - $copyright: The set copyright statement
 * - $startyear: The optionally set starting year
 *
 *  Recommended usage: copy this file and place it in your theme, then clear caches
 */
?>
<p class="copyright-statement">&copy; <?php if($startyear): print $startyear; ?> &ndash; <?php endif; ?>
<?php print date("Y") . ' ' . $copyright; ?>
</p>

