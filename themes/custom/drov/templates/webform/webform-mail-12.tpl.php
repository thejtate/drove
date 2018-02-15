<?php

/**
 * @file
 * Customize the e-mails sent by Webform after successful submission.
 *
 * This file may be renamed "webform-mail-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-mail.tpl.php" to affect all webform e-mails on your site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The webform submission.
 * - $email: The entire e-mail configuration settings.
 * - $user: The current user submitting the form. Always the Anonymous user
 *   (uid 0) for confidential submissions.
 * - $ip_address: The IP address of the user submitting the form or '(unknown)'
 *   for confidential submissions.
 *
 * The $email['email'] variable can be used to send different e-mails to different users
 * when using the "default" e-mail template.
 */

?>
Submitted on: [submission:date:long],
Company name: [submission:values:company_name],
Adress: [submission:values:company_address],
Location: [submission:values:location:city],
State: [submission:values:location:state],
ZIP: [submission:values:location:zip],
Phone: [submission:values:contacts:phone],
Email: [submission:values:contacts:email],
Where product purchase: [submission:values:where_product_purchase],
Where installed at: [submission:values:was_product_installed_at].

<table border="1">
  <tr>
    <td>Product name</td>
    <td>Product serial number</td>
  </tr>

  <?php
  $products_counter = 1;
  foreach ($node->webform['components'] as $id => $component): ?>
    <?php
    if ($component['form_key'] == 'product_serial_number' && !empty($submission->data[$component['cid']][0])): ?>
      <tr>
        <td>[submission:values:product_info:add_<?php print $products_counter ?>:product_name]
        </td>
        <td>[submission:values:product_info:add_<?php print $products_counter ?>:product_serial_number]
        </td>
      </tr>

      <?php $products_counter++ ?>
    <?php endif; ?>
  <?php endforeach; ?>
</table>
<br/>
<img
  src="http://drov-new.funnelstagingtoo.com/sites/default/files/DrovTechLogo2.png">
<br/>
-Drōv Technologies.

