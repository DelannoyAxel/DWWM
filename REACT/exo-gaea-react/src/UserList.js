import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom'; 
import { calculateAge } from './UserService'; 



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
        "tel": "06 97 55 12 22",
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

const UserList = () => {
    const [users, setUsers] = useState(userData);
    const [showModal, setShowModal] = useState(false);
    const [newUser, setNewUser] = useState({
        id: '',
        nom: '',
        prenom: '',
        email: '',
        adresse: '',
        tel: '',
        birthdate: ''
    });

    useEffect(() => {
        console.log(users);
    }, [users]);

    const handleDelete = (userId) => {
        const updatedUsers = users.filter(user => user.id !== userId);
        setUsers(updatedUsers);
    };

    const handleInputChange = (e) => {
        const { name, value } = e.target;
        setNewUser(prevState => ({
            ...prevState,
            [name]: value
        }));
    };

    const handleAddUser = () => {
        setUsers(prevUsers => [
            ...prevUsers,
            {
                ...newUser,
                id: prevUsers.length + 1 // Génère un ID simple basé sur la longueur du tableau
            }
        ]);
        setShowModal(false);
        setNewUser({
            id: '',
            nom: '',
            prenom: '',
            email: '',
            adresse: '',
            tel: '',
            birthdate: ''
        });
    };

    return (
        <div className="container mt-4">
            <h1 className="mb-4">Liste des utilisateurs</h1>
            <button className="btn btn-primary mb-3" onClick={() => setShowModal(true)}>
                Ajouter un utilisateur
            </button>
            <table className="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Âge</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {users.map((user) => (
                        <tr key={user.id}>
                            <td>{user.id}</td>
                            <td>
                                <Link to={`/user/${user.id}`}>
                                    {user.nom} {user.prenom}
                                </Link>
                            </td>
                            <td>{user.prenom}</td>
                            <td>{user.email}</td>
                            <td>{user.adresse}</td>
                            <td>{user.tel}</td>
                            <td>{calculateAge(user.birthdate)}</td>
                            <td>
                                <button
                                    className="btn btn-danger"
                                    onClick={() => handleDelete(user.id)}
                                >
                                    Supprimer
                                </button>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>

            <div className={`modal fade ${showModal ? 'show' : ''}`} style={{ display: showModal ? 'block' : 'none' }} tabIndex="-1" role="dialog">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title">Ajouter un utilisateur</h5>
                            <button type="button" className="close" aria-label="Close" onClick={() => setShowModal(false)}>
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <form>
                                <div className="form-group">
                                    <label>ID</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        name="id"
                                        value={newUser.id}
                                        onChange={handleInputChange}
                                        readOnly
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Nom</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        name="nom"
                                        value={newUser.nom}
                                        onChange={handleInputChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Prénom</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        name="prenom"
                                        value={newUser.prenom}
                                        onChange={handleInputChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Email</label>
                                    <input
                                        type="email"
                                        className="form-control"
                                        name="email"
                                        value={newUser.email}
                                        onChange={handleInputChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Adresse</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        name="adresse"
                                        value={newUser.adresse}
                                        onChange={handleInputChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Téléphone</label>
                                    <input
                                        type="text"
                                        className="form-control"
                                        name="tel"
                                        value={newUser.tel}
                                        onChange={handleInputChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <label>Date de naissance</label>
                                    <input
                                        type="date"
                                        className="form-control"
                                        name="birthdate"
                                        value={newUser.birthdate}
                                        onChange={handleInputChange}
                                    />
                                </div>
                            </form>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" onClick={() => setShowModal(false)}>
                                Annuler
                            </button>
                            <button type="button" className="btn btn-primary" onClick={handleAddUser}>
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default UserList;