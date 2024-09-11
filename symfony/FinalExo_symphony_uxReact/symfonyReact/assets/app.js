
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import './styles/app.css';


// Composant REACT pour afficher les utilisateurs dans un tableau
const UsersTable = () => {
    const [users, setUsers] = useState([]); // État pour stocker les utilisateurs

    // Utiliser useEffect pour récupérer les données au montage du composant
    useEffect(() => {
        fetch('/api/users') 
            .then((response) => response.json()) 
            .then((data) => setUsers(data)) // Stocke les utilisateurs dans l'état
            .catch((error) => console.error('Erreur lors de la récupération des utilisateurs:', error));
    }, []); // Le tableau vide [] signifie que l'effet se déclenche une seule fois

    // Fonction pour supprimer un utilisateur
    const deleteUser = (userId) => {
        // Supprimer l'utilisateur de l'état
        setUsers(users.filter(user => user.id !== userId));
    };

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
                        <tr key={user.id}>
                            <td>{user.id}</td>
                            <td>{user.nom}</td>
                            <td>{user.prenom}</td>
                            <td>{user.adresse}</td>
                            <td>{user.email}</td>
                            <td>{user.tel}</td>
                            <td>
                                <button onClick={() => deleteUser(user.id)}>Supprimer</button>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

document.addEventListener('DOMContentLoaded', () => {
    const rootElement = document.getElementById('root');
    if (rootElement) {
        ReactDOM.render(<UsersTable />, rootElement);
    }
});
