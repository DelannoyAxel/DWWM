import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

const UserPossessions = () => {
  const { id } = useParams();
  const [user, setUser] = useState(null);
  const [possessions, setPossessions] = useState([]);

  useEffect(() => {
    if (id) {
      // Récupérer les informations de l'utilisateur avec ses possessions
      fetch(`/api/users/${id}/details`)
        .then(response => response.json())
        .then(data => {
          console.log('User data:', data);  
          setUser(data);
        })
        .catch(error => console.error('Error fetching user:', error));
  
      // Récupérer les possessions de l'utilisateur
      fetch(`/api/users/${id}/possessions`)
        .then(response => response.json())
        .then(data => setPossessions(data))
        .catch(error => console.error('Error fetching user possessions:', error));
    }
  }, [id]);

  if (!user) {
    return <p>Chargement des informations utilisateur...</p>;
  }

  return (
    <div className="container mt-5">
      <h2 className="text-center">Détails de l'utilisateur</h2>
      
      {/* Tableau des informations utilisateur */}
      <table className="table table-striped table-bordered mb-4">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{user.id}</td>
          </tr>
          <tr>
            <th>Nom</th>
            <td>{user.nom}</td>
          </tr>
          <tr>
            <th>Prénom</th>
            <td>{user.prenom}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{user.email}</td>
          </tr>
          <tr>
            <th>Adresse</th>
            <td>{user.adresse}</td>
          </tr>
          <tr>
            <th>Téléphone</th>
            <td>{user.tel}</td>
          </tr>
          <tr>
            <th>Date de naissance</th>
            <td>{user.birthDate}</td>
          </tr>
        </tbody>
      </table>

      {/* Tableau des possessions */}
      <h3 className="text-center">Possessions</h3>
      <table className="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Valeur</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
          {possessions.length === 0 ? (
            <tr>
              <td colSpan="4">Aucune possession trouvée.</td>
            </tr>
          ) : (
            possessions.map(possession => (
              <tr key={possession.id}>
                <td>{possession.nom}</td>
                <td>{possession.valeur}</td>
                <td>{possession.type}</td>
              </tr>
            ))
          )}
        </tbody>
      </table>
    </div>
  );
};

export default UserPossessions;
