import React from 'react';
import { useParams } from 'react-router-dom';

const userData = [
    {
        "id": 1,
        "nom": "Dubois",
        "prenom": "Jacques",
        "email": "Jacques.dubois@gmail.com",
        "adresse": "av des champs 9",
        "tel": "06 95 74 22 33",
        "birthdate": ""
    },
    {
        "id": 2,
        "nom": "Dubois",
        "prenom": "Jacqueline",
        "email": "Jacqueline.dubois@gmail.com",
        "adresse": "av des champs 9",
        "tel": "06 95 74 44 55",
        "birthdate": ""
    },
    {
        "id": 3,
        "nom": "Ouille",
        "prenom": "Jacques",
        "email": "Jacques.dubois@gmail.com",
        "adresse": "av des Elysée 154",
        "tel": "06 97 44 55 66",
        "birthdate": ""
    },
    {
        "id": 4,
        "nom": "Ouille",
        "prenom": "Jacqueline",
        "email": "Jacques.dubois@gmail.com",
        "adresse": "av des Elysée 154",
        "tel": "06 97 55 11 22",
        "birthdate": ""
    },
    {
        "id": 5,
        "nom": "Ouille",
        "prenom": "Jacqueline",
        "email": "Jacques.dubois@gmail.com",
        "adresse": "av des Elysée 154",
        "tel": "06 97 55 33 44",
        "birthdate": ""
    }
];

const UserDetail = () => {
    // Récupérer l'ID de l'utilisateur depuis l'URL
    const { id } = useParams();
    // Trouver l'utilisateur correspondant
    const user = userData.find(user => user.id === parseInt(id));

    if (!user) {
        return <div>Utilisateur non trouvé</div>;
    }

    return (
        <div className="container mt-4">
            <h1>Informations de l'utilisateur</h1>
            <table className="table table-bordered">
                <thead>
                    <tr>
                        <th>Attribut</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{user.id}</td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td>{user.nom}</td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td>{user.prenom}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{user.email}</td>
                    </tr>
                    <tr>
                        <td>Adresse</td>
                        <td>{user.adresse}</td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>
                        <td>{user.tel}</td>
                    </tr>
                    {/* Ajoute d'autres attributs si nécessaire */}
                </tbody>
            </table>
        </div>
    );
};

export default UserDetail;
