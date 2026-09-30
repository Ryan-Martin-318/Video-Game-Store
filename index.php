<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php';?>
</head>
<body>
    <?php include 'includes/navagations.php'; ?>
    <form>
        <input type="text" name="Code" required>
        <input type="text" name="Game_Name" required>
        <select name="Console" required>
            <option value="PC">PC</option>
            <option value="Xbox">Xbox</option>
            <option value="Playstation">Playstation</option>
            <option value="Nintendo">Nintendo</option>
            <option value="Mobile">Mobile</option>
        </select>
        <input type="file" name="Image" required>
        <input type="submit">
    </form>
</body>
</html>