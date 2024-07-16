<?php ob_start(); ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo htmlspecialchars($user['id']); ?></td>
            <td><img src="../public/images/<?php echo htmlspecialchars($user['image_name']); ?>" alt="ImageProfil" width="250" height="125"></td>
            <td><?php echo htmlspecialchars($user['nom']); ?></td>
            <td><?php echo htmlspecialchars($user['prenom']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td><?php echo htmlspecialchars($user['telephone']); ?></td>
            <td><?php echo htmlspecialchars($user['role']); ?></td>
            <td><a href="../public/Update.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>