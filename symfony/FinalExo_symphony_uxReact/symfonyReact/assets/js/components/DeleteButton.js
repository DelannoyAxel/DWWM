import React from 'react';

const DeleteButton = ({ userId, onDelete, users }) => {
    const deleteUser = (userId) => {
        fetch(`/api/users/${userId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw new Error(errorData.error || 'Erreur lors de la suppression.');
                });
            }
            // Met à jour le state dans le composant parent
            onDelete(users.filter(user => user.id !== userId));
        })
        .catch(error => console.error('Erreur lors de la suppression:', error));
    };

    return <button onClick={() => deleteUser(userId)}>Supprimer</button>;
};

export default DeleteButton;
