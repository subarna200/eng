
<?php
if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}
// PHP
// You are free to render this message anywhere on your page. 

// PHP code to send email from a contact form
// Our form is leading somewhere, but it’s not clear where. Let’s add some action points and use the default mail() function to send a simple email after submission.

// The code of this PHP contact form specifies the headers and body of a message and sends each email with the mail() method. It also includes the validations we explained in the previous chapter and the HTML form itself.



$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   


    if (empty($errors)) {
        $toEmail = 'subarnamainali98@gmail.com';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: index.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }

    
}

?>

