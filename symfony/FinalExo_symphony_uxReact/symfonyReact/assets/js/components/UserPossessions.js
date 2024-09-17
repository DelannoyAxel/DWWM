import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const UserPossessions = () => {
    const { id } = useParams();
    const [user, setUser] = useState(null);
    const [possessions, setPossessions] = useState([]);

    useEffect(() => {
        // Récupère les informations de l'utilisateur
        fetch(`/api/users/${id}`)
            .then(response => response.json())
            .then(data => setUser(data))
            .catch(error => console.error('Erreur lors de la récupération des informations de l’utilisateur:', error));

        // Récupère les possessions de l'utilisateur
        fetch(`/api/users/${id}/possessions`)
            .then(response => response.json())
            .then(data => setPossessions(data))
            .catch(error => console.error('Erreur lors de la récupération des possessions:', error));
    }, [id]);

    return (
        <div>
            <h2>Détails de l'utilisateur</h2>
            {user && (
                <div>
                    <h3>{user.nom} {user.prenom}</h3>
                    <p>Adresse: {user.adresse}</p>
                    <p>Email: {user.email}</p>
                    <p>Téléphone: {user.tel}</p>
                </div>
            )}
            <h2>Possessions</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Valeur</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    {possessions.map((possession) => (
                        <tr key={possession.id}>
                            <td>{possession.id}</td>
                            <td>{possession.nom}</td>
                            <td>{possession.valeur}</td>
                            <td>{possession.type}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default UserPossessions;
