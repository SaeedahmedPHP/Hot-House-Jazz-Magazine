<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Event</title>
</head>
<body>

<h1>Create a New Event</h1>

<!-- Flash Messages -->
<?php if(session()->getFlashdata('success')): ?>
    <div style="color:green;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
    <div style="color:red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<!-- Display Validation Errors -->
<?= validation_list_errors() ?>

<!-- Form with CSRF -->
<?= form_open('/event/create') ?>

    <h5>Event Name</h5>
    <input type="text" name="name" value="<?= old('name') ?>" size="50" />

    <h5>Venue</h5>
    <input type="text" name="venue" value="<?= old('venue') ?>" size="50" />

    <h5>Date (YYYY-MM-DD)</h5>
    <input type="text" name="date" value="<?= old('date') ?>" size="50" />

    <div><input type="submit" value="Create Event" /></div>

</form>

</body>
</html>
