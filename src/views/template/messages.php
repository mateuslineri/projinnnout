<?php
$errors = []; 

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}


$alertType = '';
$message['type'] === 'error' 
    ? $alertType = 'danger' 
    : $alertType = 'success';

?>

<?php if($message): ?>
    <div role="alert"
    class="my-3 alert alert-<?= $alertType ?>">
        <?= $message['message'] ?>
    </div>
<?php endif ?>
