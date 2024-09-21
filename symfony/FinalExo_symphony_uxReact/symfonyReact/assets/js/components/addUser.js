import React, { useState } from 'react';

const AddUserModal = ({ show, handleClose, handleAddUser }) => {
  const [newUser, setNewUser] = useState({
    nom: '',
    prenom: '',
    email: '',
    adresse: '',
    tel: '',
    birthDate: '',
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setNewUser((prevUser) => ({ ...prevUser, [name]: value }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    await handleAddUser(newUser);
    handleClose();
  };

  return (
    <div className={`modal ${show ? 'show' : ''}`} tabIndex="-1" role="dialog" style={{ display: show ? 'block' : 'none' }}>
      <div className="modal-dialog" role="document">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title">Ajouter un utilisateur</h5>
            <button type="button" className="close" onClick={handleClose}>
              <span>&times;</span>
            </button>
          </div>
          <form onSubmit={handleSubmit}>
            <div className="modal-body">
              <input type="text" name="nom" placeholder="Nom" onChange={handleChange} required />
              <input type="text" name="prenom" placeholder="Prénom" onChange={handleChange} required />
              <input type="email" name="email" placeholder="Email" onChange={handleChange} required />
              <input type="text" name="adresse" placeholder="Adresse" onChange={handleChange} required />
              <input type="text" name="tel" placeholder="Téléphone" onChange={handleChange} required />
              <input type="date" name="birthDate" onChange={handleChange} required />
            </div>
            <div className="modal-footer">
              <button type="button" className="btn btn-secondary" onClick={handleClose}>Fermer</button>
              <button type="submit" className="btn btn-primary">Ajouter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
};

export default AddUserModal;
