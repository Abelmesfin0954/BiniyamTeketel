<?php
if (mail('your-email@example.com', 'Test Email', 'This is a test email.')) {
    echo 'Email sent successfully';
} else {
    echo 'Failed to send email';
}
?>
