import React from 'react';
import { Route, Routes } from 'react-router-dom';
import UserList from './UserList';
import UserDetail from './UserDetail'; 

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<UserList />} />
        <Route path="/user/:id" element={<UserDetail />} />
      </Routes>
    </div>
  );
}

export default App;
