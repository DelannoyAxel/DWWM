import React, { useEffect, useState } from 'react';
import UserRow from './UserRow';

const UsersTable = () => {
    const [users, setUsers] = useState([]);

    useEffect(() => {
        fetch('/api/users')
            .then((response) => response.json())
            .then((data) => setUsers(data))
            .catch((error) => console.error('Erreur lors de la récupération des utilisateurs:', error));
    }, []);

    return (
        <div>
            <h2>Liste des Utilisateurs</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {users.map((user) => (
                        <UserRow key={user.id} user={user} onDelete={setUsers} users={users} />
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default UsersTable;
