import React from 'react';
import { createRoot } from 'react-dom/client';
import { HashRouter as Router, Routes, Route } from 'react-router-dom';
import UserTable from './components/UserTable';
import UserPossessions from './components/UserPossessions'; 
import style from '../styles/app.css'

const rootElement = document.getElementById('root');

const root = createRoot(rootElement);

root.render(
  <React.StrictMode>
    <Router>
      <Routes>
        <Route path="/" element={<UserTable />} />
        <Route path="/users/:id" element={<UserPossessions />} />
      </Routes>
    </Router>
  </React.StrictMode>
);