import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import UsersTable from './components/UserTable';  // Assure-toi que le nom est correct
import UserPossessions from './components/UserPossessions';
import '../styles/app.css';

const App = () => {
    return (
        <Router>
            <Routes>
                <Route path="/user/:id/possessions" element={<UserPossessions />} />
                <Route path="/" element={<UsersTable />} />
            </Routes>
        </Router>
    );
};

export default App;
