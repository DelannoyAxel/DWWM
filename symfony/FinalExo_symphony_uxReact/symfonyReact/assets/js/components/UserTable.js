import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import AddUserModal from './addUser'; 

const UserTable = () => {
  const [users, setUsers] = useState([]);
  const [showModal, setShowModal] = useState(false); // État pour afficher ou non le modal

  useEffect(() => {
    fetch('/api/users')
      .then(response => response.json())
      .then(data => setUsers(data))
      .catch(error => console.error('Error fetching users:', error));
  }, []);

  const deleteUser = (id) => {
    fetch(`/api/users/${id}`, { method: 'DELETE' })
      .then(response => {
        if (response.ok) {
          setUsers(users.filter(user => user.id !== id));
        } else {
          console.error('L\'utilisateur n\'a pas pu être supprimé.');
        }
      })
      .catch(error => console.error('Error:', error));
  };

  const handleShowModal = () => setShowModal(true);
  const handleCloseModal = () => setShowModal(false);

  // Fonction pour ajouter un utilisateur et l'envoyer au backend
  const handleAddUser = async (newUser) => {
    try {
      const response = await fetch('/api/users/add', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(newUser),
      });
  
      if (response.ok) {
        // Re-fetch the list of users to get updated data
        const updatedUsers = await fetch('/api/users');
        const data = await updatedUsers.json();
        setUsers(data); // Update the users list with fresh data from the backend
      } else {
        console.error("Erreur lors de l'ajout de l'utilisateur");
      }
    } catch (error) {
      console.error('Erreur réseau:', error);
    }
  };
  

  // Fonction pour calculer l'âge d'un utilisateur
  const calculateAge = (birthDate) => {
    const birth = new Date(birthDate);
    const now = new Date();
    return now.getFullYear() - birth.getFullYear();
  };

  return (
    <div className="container mt-5">
      <h1 className="text-center">Utilisateurs</h1>

      {/* Bouton pour afficher le modal */}
      <button className="btn btn-success mb-3" onClick={handleShowModal}>
        Ajouter un utilisateur
      </button>

      {/* Modal d'ajout d'utilisateur */}
      <AddUserModal
        show={showModal}
        handleClose={handleCloseModal}
        handleAddUser={handleAddUser}
      />

      {/* Tableau des utilisateurs */}
      <table className="table table-striped table-bordered mt-3">
        <thead className="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Année de naissance</th>
            <th>Âge</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {users.map(user => (
            <tr key={user.id}>
              <td>{user.id}</td>
              <td><Link to={`/users/${user.id}`}>{user.nom}</Link></td>
              <td>{user.prenom}</td>
              <td>{user.email}</td>
              <td>{user.adresse}</td>
              <td>{user.tel}</td>
              <td>{user.birthDate}</td>
              <td>{calculateAge(user.birthDate)}</td>
              <td>
                <button className="btn btn-danger" onClick={() => deleteUser(user.id)}>
                  Supprimer
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default UserTable;
