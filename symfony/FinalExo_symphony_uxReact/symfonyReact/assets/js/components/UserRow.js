import React from 'react';
import { Link } from 'react-router-dom'; // Assure-toi que 'Link' est importé
import DeleteButton from './DeleteButton';

const UserRow = ({ user, onDelete, users }) => {
    return (
        <tr>
            <td>{user.id}</td>
            <td><Link to={`/user/${user.id}/possessions`}>{user.nom}</Link></td>
            <td>{user.prenom}</td>
            <td>{user.adresse}</td>
            <td>{user.email}</td>
            <td>{user.tel}</td>
            <td>
                <DeleteButton userId={user.id} onDelete={onDelete} users={users} />
            </td>
        </tr>
    );
};

export default UserRow;
