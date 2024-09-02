// src/UserService.js

export const calculateAge = (birthdate) => {
    if (!birthdate) return 'Non défini'; 

    const birthDate = new Date(birthdate);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDifference = today.getMonth() - birthDate.getMonth();
    
    // Ajuster l'âge si la date d'anniversaire n'est pas encore passée cette année
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
};
